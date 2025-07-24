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
                        <form action="{{ url('login')}}"  method="post" class="php-email-form" data-aos="fade-up"data-aos-delay="200">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-md-12 ">
                                    <input type="email" class="form-control" name="email"required="">
                                    <label for="email" class="form-label">Email address</label>
                                    @error('email')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 ">
                                    <input type="password" class="form-control" name="password"  required="">
                                    <label for="password" class="form-label">Password</label>
                                    @error('password')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Log in</button>
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
