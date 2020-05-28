<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\MessageSent;
use Mail;

class ContactController extends Controller
{
    //
    public function index(){
        return view('contacts.index');
    }
    
    
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'message' => 'required'

        ]);
        Contact::create($request->all());
        $notificationEmail = 'it@armpension.com';
        Mail::to($notificationEmail)->send(new MessageSent());
        return back()->with("success", "Thanks for reaching out! We'll be in touch");
    }
}
