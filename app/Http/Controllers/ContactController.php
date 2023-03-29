<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
{
    return view('contact');
}



public function submitForm(Request $request)
{
    $contact = new Contact;
    $contact->nombre = $request->input('name');
    $contact->email = $request->input('email');
    $contact->numero = $request->input('numero');
    $contact->puesto = $request->input('puesto');
    $contact->save();

    return redirect('/contact')->with('success', 'Form submitted successfully!');
}

}
