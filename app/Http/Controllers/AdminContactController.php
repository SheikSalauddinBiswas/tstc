<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use App\Models\ContactMassage;

class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact_title = Contact::where('slug', 'title')->get();
        $contact_address = Contact::where('slug', 'address')->get();
        $contact_massage = ContactMassage::orderBy('id', 'DESC')->get();
        return view('admin.contact.contact', compact('contact_title', 'contact_address', 'contact_massage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact = new Contact();

        $contact->contact_info = $request->input('contact_info');
        $contact->name = $request->input('name');
        $contact->address = $request->input('address');
        $contact->e_mail = $request->input('e-mail');
        $contact->mobile = $request->input('mobile');

        $slug = $request->input('name');
        if (!isset($slug)) {
            $slug = ('title');
        } else $slug = ('address');
        $contact->slug = $slug;


        $res = $contact->save();

        if ($res) {
            $message = 'New page content created successfully !';
            return redirect('/admin/contact')->with('success', $message);
        } else return redirect()->back()->with('danger', 'Something went wrong!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
