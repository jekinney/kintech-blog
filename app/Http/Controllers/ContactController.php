<?php

namespace App\Http\Controllers;

use App\Users\Models\Contact;
use App\Http\Requests\ContactForm;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Contact $contact)
    {
        $contacts = $contact->get();

        return view('contact.index', compact('contacts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactForm $request, Contact $contact)
    {
        $contact->create($request->all());

        return redirect()->route('home');
    }
}
