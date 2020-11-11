<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contact()
    {
        return view('contact');
    }



    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'phone' => ['required', 'digits:10'],
            'email' => ['required', 'email', 'unique:contacts,email'],
            'subject' => ['required'],
            'message' => ['required', 'min:10', 'max:5000'],
        ]);

        Contact::create($data);

        return redirect('/contact')->with('mssg', 'Thank you for getting in touch!' . '<br>'  . 'We appreciate you contacting us about. It is an honor to have you in our database. We will get to you as soon as possible');
    }
}
