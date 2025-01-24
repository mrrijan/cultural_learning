<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cultural Learning Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
          rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            line-height: 1.6;
        }

        :root {
            --primary-color: #0088cc;
            --secondary-color: #005580;
        }

        .primary-text {
            font-family: 'Roboto', sans-serif;
            color: #333;
        }

        .secondary-text {
            font-family: 'Open Sans', sans-serif;
            color: #666;
        }

        /* Navbar Styles */
        .navbar {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav .nav-link {
            padding: 1rem 1.5rem;
            font-weight: 500;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-color);
        }

        /* Hero Section */
        .hero {
            height: calc(100vh - 76px);
            position: relative;
            background: url('./images/Hero_bhatk.jpg') no-repeat center center/cover;
            background-size: cover;
            background-attachment: fixed;
            color: white;

        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            /* background: rgba(0, 0, 0, 0.5); */
        }

        .hero .container {
            position: relative;
            z-index: 1;
        }

        /* Button Styles */
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        /* Responsive Adjustments */
        @media (max-width: 991.98px) {
            .navbar-nav {
                padding: 1rem 0;
            }

            .navbar-nav .nav-link {
                padding: 0.5rem 1rem;
            }

            .hero {
                height: 60vh;
            }
        }

        @media (max-width: 767.98px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }
        }

        /* About Section */
        .about_wrapper {
            background-color: rgba(0, 123, 255, 0.75); /* Match button color with reduced opacity */
        }

        .slick-carousel {
            /*
            height: 300px;
            object-fit: cover;
            */
            max-width: 990px;
            margin: 0 auto;
        }

        .slick-carousel img {
            height: 300px;
            object-fit: cover;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
            font-family: 'Open Sans', sans-serif;
            color: #000;
        }

        ul li i {
            color: #000;
            margin-right: 10px;
        }

        /* Explore Section */
        .culture-card {
            height: 100%;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .culture-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .culture-img {
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s, filter 0.3s;
        }

        .culture-card:hover .culture-img {
            transform: scale(1.05);
            filter: brightness(0.8);
        }

        .card-body {
            padding: 20px;
        }

        .card-body h4 {
            font-family: 'Roboto', sans-serif;
            color: #333;
        }

        .card-body p {
            font-family: 'Open Sans', sans-serif;
            color: #666;
        }


        .btn-info:hover {

            color: #fff;
        }


        .btn-info:hover i {
            color: #fff;
        }

        /* Fulmaya Insight Section */
        #fulmaya-insight {
            background-color: #f8f9fa; /* Light background color */
        }

        #fulmaya-insight .row {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* 3D shadow effect */
            border-radius: 10px;
        }

        #fulmaya-insight img {
            border-radius: 10px;
        }

        #fulmaya-insight blockquote {
            font-family: 'Open Sans', sans-serif;
            color: #333;
        }

        #fulmaya-insight blockquote footer {
            font-family: 'Roboto', sans-serif;
            color: #666;
        }

        /*footer css */
        .footer-section {
            background-color: #115779;
        }

        .footer-section .text-warning {
            color: #FFA500 !important;
        }

        .footer-section a {
            text-decoration: none;
        }

        .footer-bottom {
            border-color: rgba(255, 255, 255, 0.1) !important;
        }

        .social-links a {
            transition: opacity 0.3s ease;
        }

        .social-links a:hover {
            opacity: 0.8;
        }

        #contact-info li {
            color: #fff;
        }

        #more-info {
            color: #000;

        }

        .language-dropdown {
            position: absolute;
            top: 100%; /* Position below the "Learn" item */
            left: 0;
            min-width: 200px; /* Adjust based on your needs */
            display: none;
            z-index: 10;
            border: 1px solid #ddd;
        }

        .nav-item:hover .language-dropdown {
            display: block;
        }

        .language-dropdown .dropdown-item {
            padding: 10px;
            color: #333;
            text-decoration: none;
            cursor: pointer;
        }

        .language-dropdown .dropdown-item:hover {
            /*background-color: var(--primary-color);*/
            color: black;
        }

        .language-dropdown .dropdown-item {
            padding: 10px;
            color: #333;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /*.language-dropdown .dropdown-item:hover {*/
        /*    color: white; !* Change text color to white *!*/
        /*}*/

        .language-dropdown ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .language-dropdown ul li {
            padding: 5px 10px;
            background: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .language-dropdown ul li a:hover {
            background-color: var(--primary-color); /* Blue background on hover */
            color: white; /* White text */
        }

        /*.language-dropdown {*/
        /*    position: absolute;*/
        /*    top: 100%; !* Positioned below the "Learn" link *!*/
        /*    left: 0;*/
        /*    width: 800px;*/
        /*    display: none; !* Hidden by default *!*/
        /*    justify-content: space-evenly;*/
        /*    z-index: 10;*/
        /*    background-color: white;*/
        /*    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);*/
        /*    border-radius: 5px;*/
        /*    padding: 15px;*/
        /*}*/

        /*.language-dropdown .dropdown-item {*/
        /*    padding: 10px;*/
        /*    text-align: left;*/
        /*    transition: background-color 0.3s ease;*/
        /*}*/

        /*.language-dropdown .dropdown-item:hover {*/
        /*    background-color: var(--primary-color);*/
        /*    color: white;*/
        /*}*/


    </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="90">
@php
    $languages = \App\Models\Language::all();
@endphp
    <!-- Navigation -->
<header class="header_wrapper">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 76px;">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <nav class="navbar navbar-expand-lg navbar-light bg-white text-black fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img decoding="async" src="{{url("/images/logo.png")}}" alt="Logo"
                                                  height="40"><span class="text-primary">Heri</span><span
                    class="text-danger">Tech</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navigation">
                <div class="navbar-toggler-icon"></div>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav menu-navbar-nav ">
                    <li class="nav-item"><a class="nav-link active" href="#home" aria-current="page">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#explore">Explore</a></li>
                    {{--                    <li class="nav-item"><a class="nav-link" href="#learn">Learn</a></li>--}}
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="#learn" id="learnDropdown">Learn</a>
                        <div class="language-dropdown bg-white shadow rounded-3 p-3 d-none"
                             style="justify-content: space-evenly; width: 800px;">
                            @foreach ($languages as $language)
                                <div class="dropdown-item">
                                    {{ $language->title }}
                                    <ul class="d-flex flex-column gap-3">
                                        <li class="mt-2"><a style="text-decoration: none"
                                                            href="{{url("$language->id/beginner/mentors")}}">Beginner</a>
                                        </li>
                                        <li><a style="text-decoration: none"
                                               href="{{url("$language->id/intermediate/mentors")}}">Intermediate</a>
                                        </li>
                                        <li><a style="text-decoration: none"
                                               href="{{url("$language->id/expert/mentors")}}">Expert</a></li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#support">Support</a></li>
                </ul>
                @php
                    $user = \Illuminate\Support\Facades\Auth::user();
                @endphp
                <div class="navbar-nav menu-navbar-nav justify-content-end ms-12">
                    @if(Route::has('login'))
                        @auth
                            @if($user->role === "student")
                                <a href="{{url("/dashboard/student")}}" class="btn btn-primary">
                                    {{__("Dashboard")}}
                                </a>
                            @else
                                <a href="{{url("/dashboard/mentor")}}" class="btn btn-primary">
                                    {{__("Dashboard")}}
                                </a>
                            @endif
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="btn btn-outline-primary mr-2"
                                style="margin-right: 10px"
                            >
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="btn btn-primary me-2"
                                >
                                    Register
                                </a>
                            @endif
                        @endauth
                    @endif
                    {{--                    <button class="btn btn-primary me-2">Sign up</button>--}}
                    {{--                    <button class="btn btn-outline-primary">Login</button>--}}
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Navigation End -->

<!-- Hero Section -->
@php
    $language = \App\Models\Language::where("id", $language_id)->first();
    $user = \Illuminate\Support\Facades\Auth::user();
@endphp
<section class="hero" id="home">
    <div class="hero-overlay"></div>
    <div class="container h-100">
        <div class="row h-100 justify-content-center">
            <div style="margin-top : 70px" class="col-md-8 text-white bg-light bg-opacity-75 p-4 rounded-3 text-center">
                <h1 class="display-4 fw-bold mb-4 primary-text">{{$language->title}}</h1>
                <p class="lead mb-4 secondary-text">{{$language->description}}</p>
            </div>
        </div>
        <table class="table table-hover" style="color: black; margin-top : -280px;">
            <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mentors as $mentor)
                @php
                    $course = \App\Models\Course::where("user_id",$user->id)
                                            ->where("mentor_id",$mentor->id)->first();
                @endphp
                <tr>
                    <td>{{$mentor->name}}</td>
                    <td>{{$mentor->type}}</td>
                    <td>{{$mentor->email}}</td>
                    <td>{{$mentor->phone}}</td>
                    <td>
                        @if(!$course)
                            <a href="{{url("/course/$language->id/book/$mentor->id")}}" class="btn btn-primary">
                                Book
                            </a>
                        @endif

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
<section id="fulmaya-insight" class="py-5">
    <div class="container">
        {{--        <div class="row align-items-center shadow-lg p-3 mb-5 bg-body rounded">--}}
        {{--            <div class="col-md-4">--}}
        {{--                <img src="./images/About_carousel_Img/fhulmaya.png" alt="Phulmaya Gurung" class="img-fluid rounded-3">--}}
        {{--            </div>--}}
        {{--            <div class="col-md-8">--}}
        {{--                <blockquote class="blockquote">--}}
        {{--                    <p class="mb-4">हाम्रो कला, संस्कृति र रीति-रिवाज हाम्रो पहिचानको सबैभन्दा ठूलो बाधा र सम्पदा हो। यी हाम्रा जरा हुन्, हाम्रो अस्तित्वको प्रतीक, जसले हामीलाई समय र परम्परासँग जोड्छ। हरेक रीति-रिवाज, हरेक संस्कार एक कथा हो, जसले हाम्रो पूर्खाहरूको ज्ञान र अनुभवलाई संजोगेर राख्छ।</p>--}}
        {{--                    <footer class="blockquote-footer">फुलमाया गुरुङ</footer>--}}
        {{--                </blockquote>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
</section>
<!-- End of Hero Section -->
<!-- Footer -->
<footer class="footer-section bg-primary-dark text-white py-5">
    <div class="container">
        <div class="row mb-4">
            <!-- Logo and Description -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <a href="#" class="footer-logo d-inline-block mb-3">
                    <img src="./images/logo.png" alt="HeriTech" height="40">
                    <span class="ms-2 text-white h4">HeriTech</span>
                </a>
                <p class="text-light mb-4">Heritech is dedicated to bridging tradition and modernity by promoting
                    cultural heritage through innovative solutions.</p>
                <a href="#" class="text-warning text-decoration-none">Read More</a>
                <div class="social-links mt-4">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="text-warning mb-4">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><span class="text-warning me-2">▶</span><a href="#"
                                                                                class="text-white text-decoration-none">Learn</a>
                    </li>
                    <li class="mb-2"><span class="text-warning me-2">▶</span><a href="#"
                                                                                class="text-white text-decoration-none">Tour</a>
                    </li>
                    <li class="mb-2"><span class="text-warning me-2">▶</span><a href="#"
                                                                                class="text-white text-decoration-none">About</a>
                    </li>
                    <li class="mb-2"><span class="text-warning me-2">▶</span><a href="#"
                                                                                class="text-white text-decoration-none">Terms
                            Of Service</a></li>
                    <li class="mb-2"><span class="text-warning me-2">▶</span><a href="#"
                                                                                class="text-white text-decoration-none">Privacy
                            Policy</a></li>
                    <li class="mb-2"><span class="text-warning me-2">▶</span><a href="#"
                                                                                class="text-white text-decoration-none">Report
                            an Issue</a></li>
                </ul>
            </div>


            <!-- Contact Info -->
            <div class="col-lg-4">
                <h5 class="text-warning mb-4">Contact</h5>
                <ul class="list-unstyled" id="contact-info">
                    <li class="mb-2">Phone: +977 9800000000</li>
                    <li class="mb-2">Email: president@gmail.com</li>
                    <li class="mb-2">Address: Hetauda,Nepal</li>

                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom pt-4 mt-4 border-top border-secondary">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <p class="mb-0">&copy; Copyright 2024</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-white text-decoration-none me-3">Privacy Policy</a>
                    <span class="text-white me-3">|</span>
                    <a href="#" class="text-white text-decoration-none me-3">Customer support</a>
                    <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>

<script>
    $(document).ready(function () {
        $('.slick-carousel').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            centerMode: true,
            variableWidth: true
        });
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault()
            const target = document.querySelector(this.getAttribute("href"))
            if (target) {
                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                })
            }
        })
    })

    // Active navigation link highlighting
    window.addEventListener("scroll", () => {
        const sections = document.querySelectorAll("section")
        const navLinks = document.querySelectorAll(".nav-link")

        let current = ""

        sections.forEach((section) => {
            const sectionTop = section.offsetTop
            const sectionHeight = section.clientHeight
            if (pageYOffset >= sectionTop - 150) {
                current = section.getAttribute("id")
            }
        })

        navLinks.forEach((link) => {
            link.classList.remove("active")
            if (link.getAttribute("href").substring(1) === current) {
                link.classList.add("active")
            }
        })
    })

    // Navbar background change on scroll
    window.addEventListener("scroll", () => {
        const navbar = document.querySelector(".navbar")
        if (window.scrollY > 50) {
            navbar.classList.add("bg-white", "shadow")
        } else {
            navbar.classList.remove("bg-white", "shadow")
        }
    })

    // Mobile menu close on click
    const navLinks = document.querySelectorAll(".nav-link")
    const menuToggle = document.getElementById("navbarNav")
    const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle: false})

    navLinks.forEach((link) => {
        link.addEventListener("click", () => {
            if (menuToggle.classList.contains("show")) {
                bsCollapse.toggle()
            }
        })
    })

    // for dropdown
    // document.getElementById('learnDropdown').addEventListener('click', function(e) {
    //     e.preventDefault();
    //     document.body.classList.toggle('show-menu');
    // });
    //
    // // Close menu when clicking outside
    // document.addEventListener('click', function(e) {
    //     if (!e.target.closest('#learnDropdown') && !e.target.closest('.mega-menu')) {
    //         document.body.classList.remove('show-menu');
    //     }
    // });
    //
    // document.getElementById('learnDropdown').addEventListener('click', function (e) {
    //     e.preventDefault(); // Prevent the default anchor behavior
    //
    //     const dropdown = this.nextElementSibling;
    //
    //     if (dropdown) {
    //         // Toggle the dropdown's visibility
    //         if (dropdown.style.display === 'block') {
    //             dropdown.style.display = 'none';
    //         } else {
    //             dropdown.style.display = 'block';
    //         }
    //     }
    // });
    //
    // // Close the dropdown when clicking anywhere outside
    // document.addEventListener('click', function (e) {
    //     const dropdown = document.querySelector('.language-dropdown');
    //     const learnDropdown = document.getElementById('learnDropdown');
    //
    //     if (
    //         dropdown &&
    //         e.target !== dropdown &&
    //         !dropdown.contains(e.target) &&
    //         e.target !== learnDropdown
    //     ) {
    //         dropdown.style.display = 'none';
    //     }
    // });


    //for dropdown 2
    document.getElementById('learnDropdown').addEventListener('click', function (e) {
        e.preventDefault(); // Prevent default link behavior

        const dropdown = this.nextElementSibling; // Get the div.language-dropdown

        if (dropdown) {
            // Toggle the dropdown's visibility
            // if (dropdown.style.display === 'block') {
            //     dropdown.style.display = 'none';
            // } else {
            //     dropdown.style.display = 'block';
            // }
            if (dropdown.classList.contains('d-none')) {
                dropdown.classList.remove('d-none');
                dropdown.classList.add('d-flex');
            } else {
                dropdown.classList.remove('d-flex');
                dropdown.classList.add('d-none');
            }
        }
    });

    // Close the dropdown when clicking outside
    document.addEventListener('click', function (e) {
        // const dropdown = document.querySelector('.language-dropdown');
        // const learnDropdown = document.getElementById('learnDropdown');
        //
        // if (
        //     dropdown &&
        //     e.target !== dropdown &&
        //     !dropdown.contains(e.target) &&
        //     e.target !== learnDropdown
        // ) {
        //     dropdown.style.display = 'none';
        // }

        const dropdown = document.querySelector('.language-dropdown');
        const learnDropdown = document.getElementById('learnDropdown');

        if (
            dropdown &&
            e.target !== dropdown &&
            !dropdown.contains(e.target) &&
            e.target !== learnDropdown
        ) {
            dropdown.classList.remove('d-flex');
            dropdown.classList.add('d-none');
        }
    });

</script>

