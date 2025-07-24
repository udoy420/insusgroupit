<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Intervention\Image\ImageManager as Image;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\User;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function profile_photo_change(Request $request)
    {
        $request->validate([
            'profile_photo' => ['required', 'image', 'mimes:jpeg,png,jpg'],
        ]);

        // Check if the user already has a profile photo and delete it
        if (Auth::user()->profile_photo) {
            unlink(base_path('public/uploads/profile_photos/' . Auth::user()->profile_photo));
        }
        // Generate a unique name for the profile photo
        $firstName = explode(' ', Auth::user()->name)[0];
        $generated_pro_pic_name = date('Y_m_d') . "_" . time() . "_" . Str::lower(Str::random(5)) . "_" . $firstName . "." . $request->file('profile_photo')->extension();

        // Save the profile photo using Intervention Image
        (new Image(new Driver()))->read($request->file('profile_photo'))->save(base_path('public/uploads/profile_photos/' . $generated_pro_pic_name));

        // database update
        User::find(Auth::user()->id)->update(['profile_photo' => $generated_pro_pic_name]);

        return back()->with('success', 'New profile photo uploaded successfully!');

    }

}
