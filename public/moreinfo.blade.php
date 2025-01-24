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
    <style>
        /* Custom CSS */
        .section-title {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: #333;
        }

        .card {
            transition: transform 0.3s ease;
            border: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .hero-section {
            margin-top: 60px;
        }

        .carousel-item img {
            border-radius: 8px;
        }

        .card-title {
            font-size: 1.2rem;
            margin-bottom: 0;
        }

        .bg-light {
            background-color: #f8f9fa !important;
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .text-justify {
            text-align: justify;
        }

        .theme-color {
            color: #008EC4;
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

        #contact-info li{
        color: #fff;
}
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="90">

    <!-- Navigation -->
    <header class="header_wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-white text-black fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img decoding="async" src="./images/logo.png" alt="Logo"
                        height="40"><span class="text-primary">Heri</span><span class="text-warning">Tech</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navigation">
                    <div class="navbar-toggler-icon"></div>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav menu-navbar-nav ms-3">
                        <li class="nav-item"><a class="nav-link active" href="{{route("home")}}"
                                aria-current="page">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#explore">Explore</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#learn">Learn</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#support">Support</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Navigation End -->




    <!-- Main Content Sections -->
    <main>
        <!-- Hero Section -->
        <section class="hero-section mt-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-light p-5 text-center rounded">
                            <h1 class="display-4 mb-4 text-start">Newar</h1>
                            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://images.squarespace-cdn.com/content/v1/53ecd1bde4b0a6f9524254f8/1685710696992-9OZ4ZN5VY3BPX76QAZDJ/Newar+Culture.jpg?format=2500w"
                                            class="d-block w-100" alt="Newar Culture"
                                            style="max-height: 400px; object-fit: cover;">
                                    </div>
                                    <!-- Add more carousel items as needed -->
                                    <div class="carousel-item">
                                        <img src="https://www.got2globe.com/wp-content/uploads/2018/09/22736069-1cf2-47db-bb72-27cb58441ab8.jpg"
                                            class="d-block w-100" alt="Newar Culture"
                                            style="max-height: 400px; object-fit: cover;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://www.drive.nepaldatabase.com/uploads/images/202210/image_750x_633962631d0d3.jpg"
                                            class="d-block w-100" alt="Newar Culture"
                                            style="max-height: 400px; object-fit: cover;">
                                    </div>
                                </div>
                                <!-- Carousel navigation arrows -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newar Cuisine Section -->
        <section class="cuisine-section bg-light me-5 ms-5 mt-5">
            <div class="container p-5">
                <h2 class="section-title mb-4">Newar cuisine</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <h5 class="card-title theme-color mb-1">Samay Baji</h5>
                        <div class="card">
                            <img src="images/Newa_culture/Samay Baji.jpg" class="card-img-top" alt="Choila">
                            <div class="card-body text-justify ">
                                <p class="card-text">Samay Baji is a traditional Newari dish that is served during
                                    festivals and special occasions. It is a platter of beaten rice, fried fish, boiled
                                    egg, black soybeans, and other condiments.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5 class="card-title theme-color mb-1">Yomari</h5>
                        <div class="card">
                            <img src="images/Newa_culture/Yomari.jpg" class="card-img-top" alt="Choila">
                            <div class="card-body text-justify">
                                <p class="card-text">
                                    Yomari is a sweet dish that is made from rice flour and filled with chaku (molasses)
                                    and sesame seeds. It is a popular dish during the Yomari Punhi festival.

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <h5 class="card-title theme-color mb-1">Choila</h5>
                        <div class="card">
                            <img src="images/Newa_culture/Choila.jpg" class="card-img-top" alt="Choila">
                            <div class="card-body text-justify">
                                <p class="card-text">
                                    Choila is a spicy Newari dish made from grilled buffalo meat. It is marinated with
                                    various spices and served with beaten rice and other condiments.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newar Festival Section 1 -->
        <section class="festival-section bg-light rounded ms-5 me-5 mt-5">
            <div class="container p-5">
                <h2 class="section-title mb-4">Newar Festivals</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <h5 class="card-title theme-color mb-1">Biska Jatra</h5>
                        <div class="card">
                            <img src="images/Newa_culture/Bisket Jatra.jpg" class="card-img-top" alt="Bisket Jatra">
                            <div class="card-body text-justify">
                                <p class="card-text">
                                    Biska Jatra is one of Bhaktapur’s most popular festivals. The aesthete considers it
                                    to be one of the city’s most valued festivals, with both cultural and historical
                                    significance.
                                    People welcome Basanta, or spring, through this Jatra, which is held in mid-April.
                                    Biska Jatra is the largest jatra celebrated in Bhaktapur. It is celebrated for eight
                                    nights and nine days, thus, is also known as the Chyacha Gunhuya Jatra, which
                                    translates to “eight-night and nine-day jatra.”

                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 mb-4">
                        <h5 class="card-title theme-color mb-1">Gai Jatra</h5>
                        <div class="card">
                            <img src="images/Newa_culture/Gai Jatra.jpg" class="card-img-top" alt="Gai Jatra">
                            <div class="card-body text-justify">
                                <p class="card-text">
                                    Gai Jatra is a festival of dancing, singing, mirth and laughter. The festival of cow
                                    is celebrated in the Kathmandu Valley to commemorate the death of loved ones. As
                                    part of the festival family members of the deceased of the past year send people
                                    mostly children. dressed as cows to parade on the streets.The festival usually falls
                                    in July or August.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h5 class="card-title theme-color mb-1">Yomari Punhi</h5>
                        <div class="card">
                            <img src="images/Newa_culture/Yomari Punhi.jpg" class="card-img-top" alt="Yomari Punhi">
                            <div class="card-body text-justify">
                                <p class="card-text">
                                    Yomari Punhi is a classic food-oriented festival where the Yomaris are executed as
                                    an ideal dish.Yomari refers to a portion of traditional Newari food that
                                    proportionally is filled with the sweetest fillings and Punhi, which means the full
                                    moon day. Cause, the festival occurs on the day of the full moon, the festival is
                                    called Yomari Punhi.Traditionally, people celebrate this festival to celebrate their
                                    harvest. That’s why, it is also called Dhanya Purnima where the deity of grains,
                                    Annapurna is worshipped.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newar Costume Section 2 -->
        <section class="costume-section bg-light rounded ms-5 me-5 mt-5">
            <div class="container p-5">
                <h2 class="section-title mb-4">Newari Cultural Costumes</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <h5 class="card-title theme-color mb-1">Haku Patasi</h5>
                        <div class="card">
                            <img src="images/Newa_culture/Haku Patasi.jpg" class="card-img-top" alt="Haku Patasi">
                            <div class="card-body text-justify">
                                <p class="card-text">
                                    Haku Patasi is a iconic cultural dress of Newari women in Nepal. Wear this sari to
                                    show our rich heritage.

                                    Haku Patasi is made of local household wool from surrounding regions of Kathmandu
                                    valley. Haku patasi is black sari with red borders worn by Nepali Newari women
                                    living in and around Kathmandu valley. Haku means Black and patasi meaning Sari in
                                    Newari language.

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <h5 class="card-title theme-color mb-1">Kumari Dress</h5>
                        <div class="card">
                            <img src="images/Newa_culture/Kumari Dress.jpg" class="card-img-top" alt="Kumari Dress">
                            <div class="card-body text-justify">
                                <p class="card-text">
                                    The Kumari dress refers to the traditional attire worn by the Kumari, the Living
                                    Goddess of Nepal. The Kumari is a prepubescent Newar girl, revered and worshipped as
                                    the physical embodiment of the Hindu goddess Taleju Bhawani and a manifestation of
                                    divine feminine power. Her dress reflects her sacred status and is deeply rooted in
                                    Newar culture and religious traditions.

                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4 mb-4">
                        <h5 class="card-title theme-color mb-1">Lakhey Costume</h5>
                        <div class="card">
                            <img src="images/Newa_culture/Lakhe.jpg" class="card-img-top" alt="Lakhe">
                            <div class="card-body text-justify">
                                <p class="card-text">

                                    The Lakhe wear consists of a vibrant red robe with intricate gold patterns, symbolizing power and mysticism, paired with a ferocious mask featuring bulging eyes, snarling teeth, and wild hair. The Lakhe, a demon-turned-protector in Newar mythology, performs traditional dances during festivals like Indra Jatra to ward off evil spirits. Combining spiritual significance and theatrical performance, the Lakhe’s dramatic appearance keeps this centuries-old tradition alive.

                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </main>
    <!-- Main Content Sections End -->


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
                                class="text-white text-decoration-none">Learn</a></li>
                        <li class="mb-2"><span class="text-warning me-2">▶</span><a href="#"
                                class="text-white text-decoration-none">Tour</a></li>
                        <li class="mb-2"><span class="text-warning me-2">▶</span><a href="#"
                                class="text-white text-decoration-none">About</a></li>
                        <li class="mb-2"><span class="text-warning me-2">▶</span><a href="#"
                                class="text-white text-decoration-none">Terms Of Service</a></li>
                        <li class="mb-2"><span class="text-warning me-2">▶</span><a href="#"
                                class="text-white text-decoration-none">Privacy Policy</a></li>
                        <li class="mb-2"><span class="text-warning me-2">▶</span><a href="#"
                                class="text-white text-decoration-none">Report an Issue</a></li>
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
