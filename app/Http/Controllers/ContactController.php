<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validInputs = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'nullable|string',
            'event_date' => 'nullable|date',
            'event_address' => 'nullable|string',
            'general_question' => 'nullable|string',
            'subject' => 'nullable|string',
            'message' => 'nullable|string',
        ]);
        
        try 
        {
            $contact = Contact::create($validInputs);
            Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactFormMail($contact));
            return back()->with('message', 'Thanks for contacting us.');
        }
        catch (\Throwable $th) {
            return back()->with(['exception' => $th->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
