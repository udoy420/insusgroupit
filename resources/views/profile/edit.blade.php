@extends('layouts.backend_master')

@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Profile</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-5 connectedSortable">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h3 class="card-title">User Profile</h3>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-5 justify-center">
                                        {{-- <img src="{{ asset('back_assets') }}/images/avatar.png" --}}
                                        @if (auth()->user()->profile_photo)
                                            <img src="{{ asset('uploads/profile_photos') }}/{{ auth()->user()->profile_photo }}"
                                                class="img-fluid rounded-circle mb-3" alt="User Image"
                                                style="width: 150px; height: 150px;">
                                        @else
                                            <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}"
                                                class="img-fluid rounded-circle mb-3" alt="User Image"
                                                style="width: 150px; height: 150px;">
                                        @endif
                                    </div>
                                    <div class="col-7 float-end">
                                        <h3 class="card-text"> {{ auth()->user()->name }}</h3>
                                        <p class="card-text"><b>Email:</b> {{ auth()->user()->email }}</p>
                                        <p class="card-text"><b>Joined:</b>
                                            {{ auth()->user()->created_at->format('d M Y') }}</p>
                                        <p class="card-text"><b>Last Updated:</b>
                                            {{ auth()->user()->updated_at->format('d M Y') }}</p>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer">
                                <form action="{{ route('profile.photo.change') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-2">
                                        <label for="inputGroupFile02" class="form-label fw-bold">Upload New Profile
                                            Photo</label>
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02"
                                            name="profile_photo" />
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            @error('profile_photo')
                                                <div x-data="{ show: true }" x-show="show" x-transition.opacity.duration.1000ms
                                                    x-init="setTimeout(() => show = false, 3000)" class="text-danger small mt-1">
                                                    <i class="bi bi-exclamation-circle me-1"></i> {{ $message }}
                                                </div>
                                            @enderror

                                            @if (session('success'))
                                                <div x-data="{ show: true }" x-show="show"
                                                    x-transition.opacity.duration.1000ms x-init="setTimeout(() => show = false, 2000)"
                                                    class="text-success small">
                                                    <i class="bi bi-check-circle-fill me-1"></i> {{ session('success') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-6 text-end">
                                            <button type="submit" class="btn btn-warning">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--end::Footer-->

                        </div>
                        <!-- /.card -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Delete Account</h3>
                            </div>
                            <!--begin::Form-->
                            <form method="POST" action="{{ route('profile.destroy') }}">
                                @csrf
                                @method('DELETE')

                                <div class="card-body">
                                    <p class="text-danger fw-semibold mb-3">
                                        {{ __('Are you sure you want to delete your account? This action cannot be undone.') }}
                                    </p>
                                    <p class="text-muted small">
                                        {{ __('Please enter your password to confirm account deletion.') }}
                                    </p>

                                    <div class="mt-3" x-data="{ show: false }">
                                        <label for="deletePassword" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input :type="show ? 'text' : 'password'"
                                                class="form-control @error('password', 'userDeletion') is-invalid @enderror"
                                                id="deletePassword" name="password" placeholder="Enter your password"
                                                required />
                                            <button type="button" class="btn btn-outline-secondary" @click="show = !show">
                                                <i :class="show ? 'bi bi-eye-slash' : 'bi bi-eye'"></i>
                                            </button>
                                        </div>
                                        @error('password', 'userDeletion')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!--begin::Footer-->
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="#" class="btn btn-secondary"
                                                onclick="event.preventDefault(); history.back();">
                                                {{ __('Cancel') }}
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-danger float-end">
                                                <i class="bi bi-trash me-1"></i> {{ __('Delete Account') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <!--end::Form-->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.Start col -->
                    <!-- Start col -->
                    <div class="col-lg-7 connectedSortable">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Update Name & Email</h3>
                            </div>

                            <!--begin::Form-->
                            <form method="post" action="{{ route('profile.update') }}">
                                @csrf
                                @method('patch')

                                <!--begin::Body-->
                                <div class="card-body">
                                    <!-- Name Field -->
                                    <div class="row mb-3">
                                        <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="inputName3" name="name" value="{{ old('name', $user->name) }}"
                                                required autofocus autocomplete="name" />
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Contact no. Field -->
                                    <div class="row mb-3">
                                        <label for="inputName3" class="col-sm-2 col-form-label">Contact No.</label>
                                        <div class="col-sm-10">
                                            <input type="number"
                                                class="form-control @error('contact_no') is-invalid @enderror"
                                                id="inputName3" name="contact_no"
                                                value="{{ old('contact_no', $user->contact_no) }}" required autofocus
                                                autocomplete="contact_no." />
                                            @error('contact_no')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Email Field -->
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" id="inputEmail3"
                                                name="email" value="{{ old('email', $user->email) }}" required
                                                autocomplete="username" />
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                                <div class="mt-2">
                                                    <p class="text-sm text-muted">
                                                        {{ __('Your email address is unverified.') }}
                                                        <button form="send-verification"
                                                            class="btn btn-link p-0 m-0 align-baseline">
                                                            {{ __('Click here to re-send the verification email.') }}
                                                        </button>
                                                    </p>

                                                    @if (session('status') === 'verification-link-sent')
                                                        <p class="mt-2 text-success">
                                                            {{ __('A new verification link has been sent to your email address.') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--end::Body-->

                                <!--begin::Footer-->
                                <div class="card-footer text-end">
                                    <div class="row">
                                        <div class="col-6">
                                            @if (session('status') === 'profile-updated')
                                                <div x-data="{ show: true }" x-show="show"
                                                    x-transition.opacity.duration.1000ms x-init="setTimeout(() => show = false, 2000)"
                                                    class="text-success small mt-2">
                                                    <i class="bi bi-check-circle-fill me-1"></i> {{ __('Saved.') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-warning">Update</button>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Footer-->
                            </form>
                            <!--end::Form-->
                        </div>

                        <!-- /.card -->

                        <div class="card mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Update Password</h3>
                            </div>
                            <!--begin::Form-->
                            <form method="post" action="{{ route('password.update') }}">
                                @csrf
                                @method('put')

                                <!--begin::Body-->
                                <div class="card-body">
                                    <!-- Current Password -->
                                    <div class="row mb-3">
                                        <label for="inputPasswordCurrent" class="col-sm-2 col-form-label">Current
                                            Password</label>
                                        <div class="col-sm-10" x-data="{ show: false }">
                                            <div class="input-group">
                                                <input :type="show ? 'text' : 'password'"
                                                    class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                                                    id="inputPasswordCurrent" name="current_password"
                                                    autocomplete="current-password" required />
                                                <button type="button" class="btn btn-outline-secondary"
                                                    @click="show = !show">
                                                    <i :class="show ? 'bi bi-eye-slash' : 'bi bi-eye'"></i>
                                                </button>
                                            </div>
                                            @error('current_password', 'updatePassword')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- New Password -->
                                    <div class="row mb-3">
                                        <label for="inputNewPassword" class="col-sm-2 col-form-label">New Password</label>
                                        <div class="col-sm-10" x-data="{ show: false }">
                                            <div class="input-group">
                                                <input :type="show ? 'text' : 'password'"
                                                    class="form-control @error('password', 'updatePassword') is-invalid @enderror"
                                                    id="inputNewPassword" name="password" autocomplete="new-password"
                                                    required />
                                                <button type="button" class="btn btn-outline-secondary"
                                                    @click="show = !show">
                                                    <i :class="show ? 'bi bi-eye-slash' : 'bi bi-eye'"></i>
                                                </button>
                                            </div>
                                            @error('password', 'updatePassword')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="row mb-3">
                                        <label for="inputConfirmPassword" class="col-sm-2 col-form-label">Confirm
                                            Password</label>
                                        <div class="col-sm-10" x-data="{ show: false }">
                                            <div class="input-group">
                                                <input :type="show ? 'text' : 'password'"
                                                    class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror"
                                                    id="inputConfirmPassword" name="password_confirmation"
                                                    autocomplete="new-password" required />
                                                <button type="button" class="btn btn-outline-secondary"
                                                    @click="show = !show">
                                                    <i :class="show ? 'bi bi-eye-slash' : 'bi bi-eye'"></i>
                                                </button>
                                            </div>
                                            @error('password_confirmation', 'updatePassword')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--end::Body-->

                                <!--begin::Footer-->
                                <div class="card-footer text-end">
                                    <div class="row">
                                        <div class="col-6">
                                            @if (session('status') === 'password-updated')
                                                <div x-data="{ show: true }" x-show="show"
                                                    x-transition.opacity.duration.1000ms x-init="setTimeout(() => show = false, 2000)"
                                                    class="text-success small">
                                                    <i class="bi bi-check-circle-fill me-1"></i> {{ __('Saved.') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-warning">Update</button>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Footer-->
                            </form>

                            <!--end::Form-->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.Start col -->
                </div>
                <!-- /.row (main row) -->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
@endsection()
