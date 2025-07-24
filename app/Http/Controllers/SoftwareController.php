<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $softwares = Software::all();

        return view('backend.software.index', compact('softwares'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $softwares = Software::latest()->take(5)->get();
        return view('backend.software.create', compact('softwares'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'filter' => 'required',
            'link' => 'nullable|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = Str::uuid() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/softwares'), $imageName);
        }

        Software::create([
            'title' => $request->title,
            'category' => $request->category,
            'filter' => $request->filter,
            'link' => $request->link,
            'image' => $imageName,
            'status' => 'active',
        ]);

        return back()->with('success', 'Software added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Software $software)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Software $software)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Software $software)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Software $software)
    {
        //
    }
}
