<?php

namespace App\Http\Controllers;

use App\Models\ContactMassage;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    // frontend contact section
    public function contact()
    {
        return view('frontend.contact');
    }
    //contact massage section
    public function contact_massage(Request $request)
    {
        $massages = new ContactMassage();

        $massages->name = $request->input('name');
        $massages->e_mail = $request->input('e_mail');
        $massages->massage = $request->input('massage');

        $res = $massages->save();
        if ($res) {
            $message = 'Massage sent successfully !';
            return redirect('/contact')->with('success', $message);
        }
        return redirect()->back()->with('danger', 'Something went wrong!');
    }
}
