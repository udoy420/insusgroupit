@extends('layouts.frontend_short')

@section('content')
    <main class="main">

        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title mt-5" data-aos="fade-up">
                <p>Registation</p>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">


                <div class="row gy-4">
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                        <p class="mt-5">Already have an account?</p>
                        <a class="btn btn-dark mt-2" href="{{ url('login') }}">Login</a>
                    </div>

                    <div class="col-lg-6">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-12 ">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" >
                                    {{-- <input type="text" class="form-control" name="name"> --}}
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 ">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" >
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 ">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 ">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-warning" type="submit">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->


    </main>
@endsection
