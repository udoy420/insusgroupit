@extends('layouts.frontend_short')

@section('content')
    <main class="main">

        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title mt-5" data-aos="fade-up">
                <p>Admin Login</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">


                <div class="row gy-4">


                    <div class="col-lg-6">
                        {{-- <form action="{{ url('login') }}" method="POST" class="php-email-form"
                            data-aos="fade-up"data-aos-delay="200"> --}}
                        <form action="{{ url('login') }}" method="POST">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-md-12 ">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    {{-- <input type="email" class="form-control" name="email"> --}}
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 ">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                                    {{-- <input type="password" class="form-control" name="password"> --}}
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 text-center">
                                   <button class="btn btn-warning" type="submit">Log in</button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                        <p class="mt-5">Don't have any account?</p>
                        <a class="btn btn-dark mt-2" href="{{ url('register') }}">Register</a>
                    </div>
                    <!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->


    </main>
@endsection
