<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@extends('layouts.backend_master')

@section('content')
    <!-- Settings Section Start -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Profile Photo Update Start -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Update Profile Photo</h5>
                                    </div>
                                    @if (session('photo_status'))
                                        <div class="text-primary">{{ session('photo_status') }}</div>
                                    @endif
                                    <div class="d-grid justify-content-end">
                                        @if (auth()->user()->profile_photo)
                                            <img class="user-profile rounded-circle"
                                                src="{{ asset('uploads/profile_photo') }}/{{ auth()->user()->profile_photo }}"
                                                alt="Profile Picture" width="200" height="200">
                                        @else
                                            <img class="user-profile rounded-circle"
                                                src="{{ Avatar::create(auth()->user()->name)->toBase64() }}"
                                                alt="Profile Picture" width="200" height="200">
                                        @endif
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form" method="POST"
                                        action=" {{ route('profile.photo.change') }} " enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-2 col-form-label form-label-title">New Profile
                                                    Photo</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control form-choose" type="file"
                                                        id="formFileMultiple" name="profile_photo" multiple>
                                                    @error('profile_photo')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-grid justify-content-end">
                                            <button class="btn btn-primary" type="submit">Update Profile Photo</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Profile Photo Update End -->
                            <!-- Profile Update Start -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Profile Update</h5>
                                    </div>
                                    @if (session('profile_status'))
                                        <div class="text-primary">{{ session('profile_status') }}</div>
                                    @endif
                                    <form class="theme-form theme-form-2 mega-form" method="POST"
                                        action="{{ route('profile.update') }}">
                                        <div class="row">
                                            @csrf
                                            @method('patch')
                                            {{-- Name --}}
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">Update Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="name" id="name"
                                                        placeholder="Update Your Name"
                                                        value="{{ old('name', $user->name) }}">
                                                    @error('name')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- Email --}}
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">Update Email Address</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="email" name="email" id="email"
                                                        placeholder="Update Your Email Address"
                                                        value="{{ old('email', $user->email) }}">
                                                    @error('name')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-grid justify-content-end">
                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Profile Update End -->

                            <!-- Add Contact Number Start -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Update Contact Number</h5>
                                    </div>
                                    @if (session('contact_status'))
                                        <div class="text-primary">{{ session('contact_status') }}</div>
                                    @endif
                                    <form class="theme-form theme-form-2 mega-form" method="POST"
                                        action="{{ route('profile.contact') }}">
                                        <div class="row">
                                            @csrf
                                            @method('patch')
                                            {{-- Phone Number --}}
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">Your Phone Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="number" name="contact_no"
                                                        id="contact_no" placeholder="Enter Your Number"
                                                        value="{{ old('contact_no', $user->contact_no) }}">
                                                    @error('contact_no')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">Your Phone Number</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">+880</span>
                                                        </div>
                                                        <input class="form-control" type="number" name="contact_no"
                                                            id="contact_no" placeholder="Enter Your Number"
                                                            value="{{ old('contact_no', substr($user->contact_no, 0)) }}">
                                                    </div>
                                                    @error('contact_no')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div> --}}

                                        </div>
                                        <div class="d-grid justify-content-end">
                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Add Contact Number End -->

                            <!-- Password Update Start -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Password Update</h5>
                                    </div>
                                    @if (session('password_status'))
                                        <div class="text-primary">{{ session('password_status') }}</div>
                                    @endif
                                    @if ($errors->updatePassword->any())
                                        @foreach ($errors->updatePassword->all() as $error)
                                            <ul>
                                                <div class="text-danger">{{ $error }}</div>
                                            </ul>
                                        @endforeach
                                    @endif
                                    <form class="theme-form theme-form-2 mega-form" method="POST"
                                        action="{{ route('password.update') }}">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            {{-- Current Password --}}
                                            <div class="mb-4 row align-items-center">
                                                <label for="current_password"
                                                    class="form-label-title col-sm-2 mb-0">Current
                                                    Password</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input class="form-control" type="password"
                                                            placeholder="Enter Current Password" name="current_password"
                                                            id="current_password">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"
                                                                onclick="showPassword('current_password', 'show_current_password');">
                                                                <i class="fas fa-eye-slash"
                                                                    id="show_current_password"></i>
                                                            </span>
                                                        </div>
                                                        {{-- @error('current_password')
                                                            <small class="text-danger"></small>
                                                        @enderror --}}
                                                        {{-- <p>{{ $errors->updatePassword->current_password }}</p> --}}
                                                        {{-- @error('current_password')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror --}}
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- New Password --}}
                                            <div class="mb-4 row align-items-center">
                                                <label for="password" class="form-label-title col-sm-2 mb-0">New
                                                    Password</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input class="form-control" type="password"
                                                            placeholder="Enter New Password" id="password"
                                                            name="password">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"
                                                                onclick="showPassword('password', 'show_password');">
                                                                <i class="fas fa-eye-slash" id="show_password"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Confirm Password --}}
                                            <div class="mb-4 row align-items-center">
                                                <label for="password_confirmation"
                                                    class="form-label-title col-sm-2 mb-0">Confirm Password</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input class="form-control" type="password"
                                                            placeholder="Enter Your Confirm Password"
                                                            id="password_confirmation" name="password_confirmation">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"
                                                                onclick="showPassword('password_confirmation', 'show_password_confirmation');">
                                                                <i class="fas fa-eye-slash"
                                                                    id="show_password_confirmation"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-grid justify-content-end">
                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Password Update End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Settings Section End -->
@endsection
