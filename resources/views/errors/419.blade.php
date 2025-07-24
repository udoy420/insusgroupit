@extends('layouts.frontend_short')

@section('content')
    <main class="main">

        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title mt-5" data-aos="fade-up">
                <p>419 | Page Expired</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-xl-6 col-lg-8">
                        <h5 class="mb-3">
                            Your session has expired. Please refresh the page and try again.
                        </h5>
                        <h1 class="fade-text">419 | Page Expired</h1>
                        <h2 class="fade-text mt-3">{{ env('APP_NAME') }}</h2>
                        <a class="btn btn-dark mt-5" href="{{ route('index')}}">Go back to Home</a>
                    </div>
                </div>
            </div>

        </section><!-- /Contact Section -->


    </main>
@endsection
