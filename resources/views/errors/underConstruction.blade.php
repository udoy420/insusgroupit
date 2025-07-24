@extends('layouts.frontend_short')

@section('content')
    <main class="main">

        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title mt-5" data-aos="fade-up">
                <p>Under Construction</p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-xl-6 col-lg-8">
                        <h5 class="mb-3">
                            We are working hard to bring something amazing!
                        </h5>
                        <h2 class="fade-text">Coming Soon</h2>

                        <!-- Countdown Timer -->
                        <div class="countdown">
                            <p>Launching in:
                                <h2>
                                    <span id="countdown-timer"></span>
                                </h2>
                            </p>
                        </div>

                        <a class="btn btn-dark mt-5" href="{{ route('index') }}">Go back to Home</a>
                    </div>

        </section><!-- /Under Construction Section -->

    </main>

@endsection
