<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('contact');
    }

  
    public function store(Request $request)
    {
       try {
                $contact = new Contact();
                
                $contact->name = $request->name;
                $contact->email = $request->email;
                $contact->mobile = $request->mobile;
                $contact->message = $request->message;
                
                $contact->save();
                
                $maildata = $request->all();
                $recipients = 'vibhorpatil404@gmail.com';
                Mail::to($recipients)->send(new ContactMail($maildata));
                
               
            } catch (\Exception $e) {
                return back()->with('error', 'An error occurred while processing your request.');
            }

        
        return redirect()->back()->with('success','Thank you for getting in touch with us!');
    }

    /**
     * Display the specified resource.
     */
    public function adm_contact()
    {
        $contact = Contact::latest()->get();
        return view('admin.pages.contact',compact('contact'));
    }
    
     public function destroy(Contact $contact,$id)
    {
        $contacts = Contact::find($id);
        $contacts->delete();
        return redirect('/adm_contact')->with('success', 'Contact deleted successfully.');
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
   
}
