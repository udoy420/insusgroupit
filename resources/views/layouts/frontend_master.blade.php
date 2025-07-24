{{-- Header Part Start --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">


    <!-- Favicons -->
    <link href="{{ asset('front_assets') }}/images/home/logoC.png" rel="icon">
    <link href="{{ asset('front_assets') }}/images/home/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front_assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('front_assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('front_assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('front_assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('front_assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">

    <!-- Main CSS File -->
    <link href="{{ asset('front_assets') }}/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top bg-dark">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('index') }}" class="logo d-flex align-items-center me-lg-0">
                <img style="border-radius: 50%;" src="{{ asset('front_assets') }}/images/home/logo.jpg"
                    alt="InsusGroup Logo" data-aos="fade-in">

                <h1 class="sitename">InsusGroup</h1><span>IT</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home<br></a></li>
                    <li><a href="#portfolio">Softwares</a></li>
                    <li><a href="#services">Services</a></li>
                    <li class="dropdown"><a href="#about"><span>About</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#about">About Insus Group</a></li>
                            <li><a href="{{ route('underConstruction') }}">About Chairman</a></li>
                            <li><a href="Mdmessage.html">About M.D</a></li>
                            <li><a href="CooMessage.html">About C.O.O</a></li>
                        </ul>
                    </li>
                    <li><a href="#team">Team</a></li>
                    <!-- DropDown menu -->

                    <li class="dropdown"><a href="#featured-products"><span>Our Products</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="product-site">Food and Beverage</a></li>
                            <li><a href="{{ asset('front_assets') }}/pdf/Insus_It.pdf">Insus IT Village</a></li>
                            <li><a href="{{ route('underConstruction') }}">Cloud Sever</a></li>
                            <li><a href="{{ route('underConstruction') }}">Data Center</a></li>
                            <li><a href="{{ route('underConstruction') }}">Domain Hosting</a></li>
                        </ul>
                    </li>
                    <!-- DropDown menu -->
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            @guest
                <div class="dropdown">
                    <a class="btn btn-getstarted dropdown-toggle d-flex align-items-center px-3 py-2" href="#"
                        role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">Join to</a>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                        <li>
                            <a class="dropdown-item" href="ERPinvest/public">
                                <i class="bi bi-person-plus me-2"></i> Become Our Partner
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ url('login') }}">
                                <i class="bi bi-shield-lock me-2"></i> Login as Admin
                            </a>
                        </li>
                    </ul>
                </div>
            @else
                <div class="dropdown">
                    <a class="btn-getstarted dropdown-toggle d-flex align-items-center" href="#" role="button"
                        id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        @if (auth()->user()->profile_photo)
                            <img src="{{ asset('uploads/profile_photos') }}/{{ auth()->user()->profile_photo }}"
                                class="rounded-circle me-2" style="width: 30px; height: 30px;" alt="Profile Photo">
                        @else
                            <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" class="rounded-circle me-2"
                                style="width: 30px; height: 30px;" alt="Profile Photo">
                        @endif
                        <span>{{ Auth::user()->name }}</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ route('dashboard') }}">
                                <i class="bi bi-speedometer2 me-2"></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                <i class="bi bi-person-circle me-2"></i> Profile
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">
                                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>

            @endguest

        </div>
    </header>

    {{-- Header Part End --}}
    @yield('content')
    {{-- Footer Part Start --}}

    <footer id="footer" class="footer dark-background">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="/" class="logo d-flex align-items-center">
                            <span class="sitename">INSUS GROUP</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>House No. 9 (5th floor), Road 8,</p>
                            <p>Baridhara J Block, Dhaka 1212</p>
                            <p class="mt-3"><strong>Phone:</strong> <span> +8801335084680, +8801335084681,
                                    +8801335084684</span></p>
                            <p><strong>Email:</strong> <span>insusgroup@gmail.com</span></p>
                        </div>
                        <!-- <div class="social-links d-flex mt-4">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div> -->
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#hero"> Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#about"> About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services"> Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('underConstruction') }}"> Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('underConstruction') }}"> Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="product-site">Our Products</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('underConstruction') }}"> Web Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('underConstruction') }}"> Web Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('underConstruction') }}"> Marketing</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('underConstruction') }}"> Graphic Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('underConstruction') }}"> Domain Hosting</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('underConstruction') }}"> Data CenterManagement</a></li>
                        </ul>
                    </div>

                    <!-- <div class="col-lg-4 col-md-12 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div> -->

                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container text-center">
                <p> <span>Copyright</span> © 2025 <strong class="px-1 sitename">Insus Group Ltd.</strong></p>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Swiper(".init-swiper", JSON.parse(document.querySelector(".swiper-config").textContent));
        });
    </script>
    <!-- Products -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const products = [{
                    image: "{{ asset('front_assets') }}/images/home/products/pw1.jpg",
                    name: "Products1",
                    price: "99"
                },
                {
                    image: "{{ asset('front_assets') }}/images/home/products/pch1.jpg",
                    name: "Products2",
                    price: "99"
                },
                {
                    image: "{{ asset('front_assets') }}/images/home/products/hairoil1.jpg",
                    name: "Products3",
                    price: "99"
                },
                {
                    image: "{{ asset('front_assets') }}/images/home/products/pc1.jpg",
                    name: "Products4",
                    price: "99"
                },
                {
                    image: "{{ asset('front_assets') }}/images/home/products/cookingoil1.jpg",
                    name: "Products5",
                    price: "99"
                },
                {
                    image: "{{ asset('front_assets') }}/images/home/products/biscut1.jpg",
                    name: "Products6",
                    price: "99"
                },
                {
                    image: "{{ asset('front_assets') }}/images/home/products/holud.jpg",
                    name: "Products7",
                    price: "99"
                },
                {
                    image: "{{ asset('front_assets') }}/images/home/products/backdots.jpg",
                    name: "Products8",
                    price: "99"
                },
                {
                    image: "{{ asset('front_assets') }}/images/home/products/chllipowder.jpg",
                    name: "Products9",
                    price: "99"
                },
                {
                    image: "{{ asset('front_assets') }}/images/home/products/cpicy1.jpg",
                    name: "Products10",
                    price: "99"
                },
                {
                    image: "{{ asset('front_assets') }}/images/home/products/salt.jpg",
                    name: "Products11",
                    price: "99"
                },
                {
                    image: "{{ asset('front_assets') }}/images/home/products/flour.jpg",
                    name: "Products12",
                    price: "99"
                }
            ];

            const productList = document.getElementById("product-list");
            products.forEach(product => {
                const productCard = document.createElement("div");
                productCard.className = "swiper-slide";
                productCard.innerHTML = `
              <div class="product-card position-relative">
                  <div class="card-img">
                      <img src="${product.image}" alt="${product.name}" class="product-image img-fluid" style="width: 100%; height: 250px; object-fit: contain; max-width: 250px; max-height: 250px; display: block; margin: auto;">
                      <div class="cart-concern position-absolute d-flex justify-content-center">
                          <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                                  <svg class="shopping-carriage">
                                      <use xlink:href="#shopping-carriage"></use>
                                  </svg>
                              </button>
                              <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                                  <svg class="quick-view">
                                      <use xlink:href="#quick-view"></use>
                                  </svg>
                              </button>
                          </div>
                      </div>
                  </div>

              </div>`;
                productList.appendChild(productCard);
            });
        });
    </script>


    <!-- Vendor JS Files -->
    <script src="{{ asset('front_assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front_assets') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('front_assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('front_assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('front_assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('front_assets') }}/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('front_assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('front_assets') }}/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('front_assets') }}/js/main.js"></script>

</body>

</html>
{{-- Footer Part End --}}
