<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::where('slug', 'question')->get();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $about = new About();

        $about->question = $request->input('question');
        $about->answer = $request->input('answer');
        $about->slug = $request->input('slug');
        $about->image = $request->input('image');
        $about->image_title = $request->input('image_title');
        $about->image_description = $request->input('image_description');

        $res = $about->save();
        if ($res) {
            $message = 'New question add successfully !';
            return redirect('/admin/about')->with('success', $message);
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
    /**
     * Show the form for creating a new resource.
     */
    public function create_question()
    {
        return view('admin.about.create_question');
    }
}
