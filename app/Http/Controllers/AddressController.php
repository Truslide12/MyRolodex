<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\Contact;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = Address::all();//->paginate(5); 
        return view('addresses.index', ['addresses' => $addresses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Contact $contact)
    {
        // dump($contact);
        return view('addresses.create')->with('contact', $contact);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dump($request->toArray());
        $contact = Contact::find($request->contact_id);
        // dump($contact);
        $request->validate([
            'number'    =>'integer',
            'street'    =>'required|string|max:255',
            'city'      =>'required|string|max:255',
            'state'     =>'string|max:255',
            'zip'       =>'integer',
            'type'      =>'string|max:255',
            // 'contact_id'=>'required|integer'
            ]); 
        $address = Address::create([
            'number' => $request->number,
            'street' => $request->street,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'type' => $request->type,
            'contact_id' => $contact->id,
            ]);

        return view('contacts.details')->with('contact', $contact);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($address)
    {
        return view('address.details')
        ->with('address', $address);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($contact_id)
    {
        $address = Address::find($contact_id);
        return view('addresses.edit',compact('address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $request->validate([
            'number'    => 'integer',
            'street'    => 'required|string|max:255',
            'city'      => 'required|string|max:255',
            'state'     => 'string|max:255',
            'zip'       => 'integer',
            'type'      => 'string|max:255',
        ]);
          Address::find($id)->update($request->all());
          return redirect()->route('contacts.index')->with('success','Address update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Address::find($id)->delete();
        return redirect()->route('contacts.index')->with('success','Address deleted success'); 
    }
}
