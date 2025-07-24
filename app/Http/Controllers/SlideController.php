<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager as Image;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\User;


class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slides = Slide::latest()->get();
        // $slides = Slide::all();
        return view('backend.slide.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $slides = Slide::all();
        // return view('backend.slide.create', compact('slides'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'home_slide' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // Generate a unique name for the profile photo
        $generated_home_slide = date('Y_m_d') . "_" . time() . "_" . Str::lower(Str::random(5)) . "." . $request->file('home_slide')->extension();

        // Save the profile photo using Intervention Image
        (new Image(new Driver()))->read($request->file('home_slide'))->save(base_path('public/uploads/home_slide/' . $generated_home_slide));

        // database update
        User::find(Auth::user()->id)->update(['home_slide' => $generated_home_slide]);

        Slide::insert([
            'home_slide' => $generated_home_slide,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('slide.index')->with('success', 'Slide added successfully!');
        // return view('backend.slide.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slide $slide)
    {
        // return view('backend.slide.show');
        // $slides = Slide::all();
        // return view('index', compact('slides'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slide $slide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slide $slide)
    {
        $inputName = 'home_slide_' . $slide->id;

        $request->validate([
            $inputName => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file($inputName);

        // Delete old image
        $old_path = public_path('uploads/home_slide/' . $slide->home_slide);
        if (file_exists($old_path)) {
            unlink($old_path);
        }

        // Generate unique name and save the image
        $generated_home_slide = date('Y_m_d') . "_" . time() . "_" . Str::lower(Str::random(5)) . "." . $file->extension();
        (new \Intervention\Image\ImageManager(new \Intervention\Image\Drivers\Gd\Driver()))
            ->read($file)
            ->save(public_path('uploads/home_slide/' . $generated_home_slide));

        // Update the slide
        $slide->update([
            'home_slide' => $generated_home_slide,
        ]);

        return redirect()->route('slide.index')->with([
            'success_update' => 'Slide updated successfully!',
            'slide_id' => $slide->id,
        ]);
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slide $slide)
    {
        $image_path = public_path('uploads/home_slide/' . $slide->home_slide);
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        $slide->delete();

        return redirect()->route('slide.index')->with([
            'success_delete' => 'Slide deleted successfully!',
            'slide_id' => $slide->id,
        ]);
    }
}
