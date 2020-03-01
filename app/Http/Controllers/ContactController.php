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
    public function index()
    {
        $contacts = Contact::orderBy('firstName')->paginate(10);
        return view('contacts.index', ['contacts' => $contacts]);
              // ->with("i", (request()->input('page',1) -1) *5);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('contacts.details')
                ->with('contact', $contact);
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
        return view('contacts.edit',compact('contact'));
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
    public function destroy($id)
    {
        // Need to find all addresses with the contacdt Id and delete them.
        Address::where('contact_id', $id)->delete();
        Contact::find($id)->delete();
        return redirect()->route('contacts.index')->with('success','Contact deleted success');   
    }

    public function search() 
    {
        return view('contacts.search');   
    }

    public function postSearch(Request $request)
    {
        // Searching Contacts
        $q = $request->input('search') . '%'; // NOTE: Append wildcard symbol "%"

        $contacts = Contact::where('firstName','like',$q)
              ->orWhere('lastName','like',$q)
              ->orWhere('email','like',$q)
              ->orWhere('phone','like',$q)
              ->get();
        return view('contacts.postSearch', ['contacts' => $contacts]);
    }

    public function createAddress (Request $request)
    {
        // dump($request->toArray());
        // dump($request->contact_id);

        return view('contacts.createAddress')->with('contact_id', $request->contact_id);
    }

    public function sort($field, $currentField , $dir)
    {
        $validFields = Contact::getFields();
        
        if( in_array($field, $validFields) && in_array($currentField, $validFields) && in_array($dir, ['asc','desc']) ) {
            
            if ($field !== $currentField) 
            {
                return redirect()->route('contacts.sortUp', ['field' => $field]);
            }
            else if ($dir === 'asc')
            {
                return redirect()->route('contacts.sortDown', ['field' => $field]);
            }
            else if ($dir === 'desc')
            {
                return redirect()->route('contacts.sortUp', ['field' => $field]);
            }
            else {
                print("Error: Invalid field and/or direction to sort by");
            }
        }
    }

    public function sortUp ($field)
    {
        $data = Contact::orderBy($field, 'asc')->paginate(10);
        $currentField = $field;
        $dir = 'asc';
        return view('contacts.sort', ['contacts' => $data, 'field' => $field, 'currentField' => $currentField, 'dir' => $dir]);
    }

    public function sortDown ($field)
    {
        $data = Contact::orderBy($field, 'desc')->paginate(10);
        $currentField = $field;
        $dir = 'desc';
        return view('contacts.sort', ['contacts' => $data, 'field' => $field, 'currentField' => $currentField, 'dir' => $dir]);
    }
}
