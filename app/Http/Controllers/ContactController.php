<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(10);

        return view('admin.contacts.index',compact('contacts'));
    }
    public function create()
    {
        return view('admin.contacts.create');
    }
    public function store(Request $request)
    {

       
        $contact_data = [
            
            'fax' => $request->input('fax'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
            'map' => $request->input('map'),
            'online' => 1
        ];
        
         Contact::create($contact_data);
         return Redirect::to('admin/contact/'); 
    }
    public function edit($id)
    {   
            $contact = Contact::find($id);
            Session::put('message', 'Contact created Successfully !!');
            return view('admin.contacts.edit', compact('contact','id'));
    }
    
    public function update(Request $request, $id)
     {
        //dd($request->all());
        $contact = Contact::findOrFail($id);
        
        $this->validate($request, [

            'fax' => ['required','max:20'],
            'mobile' => ['required',],
            'email' => ['max:100','email','required'],
            
            
        ]);
        $contact_data = [  
            'fax' => $request->input('fax'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
            'map' => $request->input('map'),
            'online' => 1
        ];     

        $contact->update($contact_data);
        Session::put('message', 'Contact Updated Successfully !!');
        return Redirect::to('admin/contact/');
    }
    public function destroy($id)
    {
        $contact = Contact::find($id)->delete();
        Session::put('message', 'Contact Deleted Successfully !!');
        return Redirect::to('/admin/contact/'); 

    }
    public function InActive($id)
    {
        $contact = Contact::find($id)->update(['online' => 0]);
        Session::put('message', 'contact Activated Successfully !!');
        return Redirect::to('/admin/contact');
    }

    public function Active($id)
    {
        
        $contact = Contact::find($id)->update(['online' => 1]);
        Session::put('message', 'contact Activated Successfully !!');
        return Redirect::to('/admin/contact');
    }
    
}
