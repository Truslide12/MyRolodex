<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use App\Contact;



class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = $request->search;
        if (!$query)
        {
            $contacts = Contact::sortable('firstName')->paginate(10);
            return view('contacts.index', ['contacts' => $contacts]);
        } else{
            $contacts = Contact::search($request->search)->paginate(10);
            return view('contacts.index', ['contacts' => $contacts]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = new Contact();
        return view('contacts.create')->with('contact', $contact);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dump(create($request->toArray()));
        
        // create birthday string from user dropbox input
        $birthday = ($request->year."-".$request->month."-".$request->day);
        // dump($birthday);
        $request->validate
        ([
            'firstName'=>'required|string|max:255',
            'lastName'=>'required|string|max:255',
            'email'=>'required|unique:contacts|string|max:255',
            'phone'=>'nullable|string|max:255',
            // 'birthday'=>'nullable|date',
            // 'number'    =>'integer',
            // 'street'    =>'required|string|max:255',
            // 'city'      =>'required|string|max:255',
            // 'state'     =>'string|max:255',
            // 'zip'       =>'integer',
            // 'type'      =>'string|max:255',
          ]);
        //   dump($request->toArray());
        $contact = Contact::create([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'birthday'=>$birthday,
        ]);
        // dump($contact);
        // dump($contact->id);
        // $contact->addresses()->attatch($request->all()); // to be added later once I figure out how to make this function correctly
        return view('contacts.details')->with('contact', $contact);
      }

    /**
     * Display the selected contact resource
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        // dump($contact->addresses);
        if($contact) { 
            return view('contacts.details')->with('contact', $contact);
        } else {
            return redirect('contacts');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        if($contact) {            
            return view('contacts.edit')->with('contact',$contact);   
        } else {
            return redirect('contacts');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   // validation failing need to come back to fix this
        $request->validate([
            'firstName'=>'required|string|max:255',
            'lastName'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'phone'=>'nullable|string|max:255',
            'birthday'=>'nullable|string|max:255',
          ]);
        Contact::find($id)->update($request->all());
        return redirect()->route('contacts.index')->with('success','Contact update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        // dump($request);
        // verify ajax request
        $id = $request->id;
        // Need to find all addresses with the contacdt Id and delete them.
        Address::where('contact_id', $id)->delete();
        $contact = Contact::findOrFail($id);

        if($request->ajax() ) {
            $contact->delete( $request->all());
            return response(['msg' => 'Product deleted', 'status' => 'success']);
        }
        
        return response(['msg' => 'Failed deleting the product', 'status' => 'failed']);
    
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postDelete(Request $request)
    {
        $pkg = ['status'=>-1, 'msg'=>''];

        $rid = $request->input('rid');

        if($rid) {

            $row = Contact::find($rid);

            if($row) {

                $row->addresses()->delete();
                $row->delete();

                $pkg['status']=1;
                $pkg['msg']='Successfully removed item';

            } else {

                $pkg['status']=0;
                $pkg['msg']='Row ID not found';

            }

        } else {

            $pkg['status']=0;
            $pkg['msg']='Missing row ID';
        }


        return response()->json($pkg);

    }

    public function createAddress (Request $request)
    {
        return view('contacts.createAddress')->with('contact_id', $request->contact_id);
    }

    public function editAddress ($id)
    {
        $address = Address::find($id);
        // dump($address);
        if($address) {            
            return view('contacts.editAddress')->with('address',$address);   
        } else {
            return redirect('contacts');
        }
    }

       /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAddress(Request $request, $id)
    {   // validation failing need to come back to fix this
        $request->validate([
            'firstName'=>'required|string|max:255',
            'lastName'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'phone'=>'nullable|string|max:255',
            'birthday'=>'nullable|string|max:255',
          ]);
        Address::find($id)->update($request->all());
        return redirect()->route('contacts.index')->with('success','Contact update success');
    }
}
