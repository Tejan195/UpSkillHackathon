<?php
session_start();
if(isset($_GET['logout'])){
    unset($_SESSION['user_id']);
    header("location:../Html/main.php");
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../scss/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-theme>
    <!--Nav-Bar-->
    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SaveLink</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" style="outline: none;box-shadow: none;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#main">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item me-3" id="signinLink">
                        <?php if(isset($_SESSION['user_id'])):?>
                        <a class="nav-link" href="?logout=true"><button id="logoutButton">Logout</button></a>
                        <?php else: ?>
                        <a class="nav-link" href="../html/sign.php"><button id="signInButton">Sign-In</button></a>
                        <?php endif; ?>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!--Main-->
    <section id="main" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12" id="col">
                    <h1 class="fw-semibold" data-aos="fade-down">Save Our<br><span class="Earth">Earth</span></h1>
                    <div class="ptext">
                        <div class="p1 pt-4 text-black" data-aos="fade-right">
                            <p>Welcome to SaveLink, the platform dedicated to connecting communities with</p>
                            <p>local rag pickers
                                for a cleaner and greener environment.SaveLink offers a user</p>
                            <p>friendly interface that makes it easy for residents to connect with local rag-pickers</p>
                        </div>
                    </div>
                    <img src="../images/earth.jpg" class="image-fluid" data-aos="fade-left" alt="Background Image">
                </div>
                <div class="btn-read" data-aos="fade-up">
                    <a href="#"><button>READ MORE</button></a>
                </div>
            </div>
        </div>
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#FFFFE0" fill-opacity="1"
                d="M0,160L60,176C120,192,240,224,360,208C480,192,600,128,720,101.3C840,75,960,85,1080,117.3C1200,149,1320,203,1380,229.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </section>
    <!--about-->
    <section id="about" class="section-padding border-top min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="display-4 pt-4" data-aos="fade-down">About Us</h2>
                        <div class="line" data-aos="fade-down"></div>
                        <p data-aos="fade-down">SaveLink is an innovative platform designed to bridge the gap between
                            local communities and rag pickers, fostering a cleaner and greener environment,SaveLink
                            ensures that waste management becomes efficient, reliable, and user-friendly.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="about-wrapper d-flex col-12">
                    <div class="about-detail" data-aos="fade-right" data-aos-delay="150">
                        <h3>Our Story</h3>
                        <a class="about-icon" href="#"><i class="fa-solid fa-book-open"></i></a>
                    </div>
                    <div class="about-text" data-aos="fade-right" data-aos-delay="150">
                        <p>Our Story started as a passion project. Growing up, I've always had a deep love for
                            nature,one thing that constantly saddened me seeing litter. <a href="#">Learn more</a></p>
                    </div>
                    <div class="about-detail3" data-aos="fade-up" data-aos-delay="150">
                        <h3>Our Team</h3>
                        <a class="about-icon" href="#"><i class="fa-solid fa-people-group"></i></a>
                    </div>
                    <div class="about-text3" data-aos="fade-up" data-aos-delay="150">
                        <p>Our team consists of qualified and dedicated professionals with more than 5 years of
                            experience in social assistance,(SDE). <a href="#">Learn more</a></p>
                    </div>
                    <div class="about-detail2" data-aos="fade-left" data-aos-delay="150">
                        <h3>Our Vision</h3>
                        <a class="about-icon" href="#"><i class="fa-solid fa-handshake "></i></i></a>
                    </div>
                    <div class="about-text2" data-aos="fade-left" data-aos-delay="150">
                        <p>We envision a future where every household can effortlessly connect with trusted local rag
                            pickers through a user-friendly platform. <a href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
    </section>
    <!--services-->
    <section id="services" class="section-padding border-top min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h1 class=" display-4 fw-semibold" data-aos="fade-down">Awesome Services</h1>
                        <div class="line" data-aos="fade-down" data-aos-delay="150"></div>
                        <p data-aos="fade-down" data-aos-delay="150">Our services range wide to cater to all your waste
                            management needs. Whether you're looking for regular waste collection, special event
                            clean-ups, or community-driven initiatives, saveLink connects you with reliable local rag
                            pickers.</p>
                    </div>
                    <div class="wp-class1">
                        <div class="wrapper-services" data-aos="fade-right" data-aos-delay="150">
                            <div class="wrapper-container">
                                <div class="wrapper-icon"><a href="#" class="text-decoration-none"><i
                                            class="fa-brands fa-connectdevelop"></i></a></div>
                                <div class="h4">
                                    <h4>Easy Connect</h4>
                                </div>
                                <div class="wrapper-desc">
                                    <p>saveLink provides a seamless way for users to connect with local rag pickers. Our
                                        platform ensures that finding a reliable service is just a few clicks away.</p>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper-services2" data-aos="fade-right" data-aos-delay="150">
                            <div class="wrapper-container">
                                <div class="wrapper-icon"><a href="#" class="text-decoration-none"><i
                                            class="fa-solid fa-shield-halved"></i></a></div>
                                <div class="h4">
                                    <h4>Verified Credentials</h4>
                                </div>
                                <div class="wrapper-desc">
                                    <p>We prioritize trust and reliability. All rag pickers on saveLink undergo a
                                        thorough verification process, giving users peace of mind when choosing a
                                        service provider.</p>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper-services3" data-aos="fade-left" data-aos-delay="150">
                            <div class="wrapper-container">
                                <div class="wrapper-icon"><a href="#" class="text-decoration-none"><i
                                            class="fa-solid fa-money-check-dollar"></i></a></div>
                                <div class="h4">
                                    <h4>Transparent Pricing</h4>
                                </div>
                                <div class="wrapper-desc">
                                    <p>No more guesswork with pricing. saveLink offers clear and transparent pricing, so
                                        users know exactly what they’re paying for without any hidden costs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper-services4" data-aos="fade-left" data-aos-delay="150">
                            <div class="wrapper-container">
                                <div class="wrapper-icon"><a href="#" class="text-decoration-none"><i
                                            class="fa-solid fa-location-dot"></i></a></div>
                                <div class="h4">
                                    <h4>Real-Time Update</h4>
                                </div>
                                <div class="wrapper-desc">
                                    <p>Stay informed with real-time updates on the status of your request. Users can
                                        track the progress of their service and receive notifications every step of the
                                        way.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--pricing-->
    <section id="pricing" class="section-padding border-top min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="display-4 pt-4 fw-semibold" data-aos="fade-down">Pricing</h2>
                        <div class="line" data-aos="fade-down"></div>
                        <p data-aos="fade-down"></p>
                    </div>
                    <div class="pricing-table table">

                        <div class="ptable-item" data-aos="fade-down"data-aos-delay="300">
                            <div class="ptable-single">

                                <div class="ptable-header">
                                    <div class="ptable-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="ptable-title">
                                        <h2 class="fw-semibold text-white">Pick Up</h2>
                                    </div>
                                    <div class="ptable-price">
                                        <p class="text-white">starting at Rs.99</p>
                                    </div>

                                </div>

                                <div class="ptable-body">
                                    <div class="ptable-description">
                                        <ul>
                                            <li>Convinent pick up service</li>
                                            <li>Anywhere in the service area</li>
                                            <li>Book a vehicle or individual</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="ptable-footer">
                                    <div class="ptable-action">
                                        <a href="#"><i class="fa fa-shopping-cart"></i>Book now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ptable-item featured-item" data-aos="fade-up">
                            <div class="ptable-single">

                                <div class="ptable-header">
                                    <div class="ptable-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="ptable-title">
                                        <h2 class="fw-semibold text-white">Join a Hand</h2>
                                    </div>
                                    <div class="ptable-price">
                                        <p class="text-white">Earn money</p>
                                    </div>
                                </div>

                                <div class="ptable-body">
                                    <div class="ptable-description">
                                        <ul>
                                            <li>Collect liquor bottles up to 20kg.</li>
                                            <li>Open to all individuals for participation.</li>
                                            <li>Earn money through bottle collection.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="ptable-footer">
                                    <div class="ptable-action">
                                        <a href="#"><i class="fa fa-shopping-cart"></i>Book now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ptable-item"data-aos="fade-down"data-aos-delay="300">
                            <div class="ptable-single">

                                <div class="ptable-header">
                                    <div class="ptable-icon">
                                        <i class="fa fa-gift"></i>
                                    </div>
                                    <div class="ptable-title">
                                        <h2 class="fw-semibold text-white">Sanitizing</h2>
                                    </div>
                                    <div class="ptable-price">
                                        <p class="text-white">starting at Rs 299</p>
                                    </div>

                                </div>

                                <div class="ptable-body">
                                    <div class="ptable-description">
                                        <ul>
                                            <li>Thorough sanitization of all collected items.</li>
                                            <li>Use of eco-friendly disinfectants.</li>
                                            <li>Regular compliance checks for collectors.</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="ptable-footer">
                                    <div class="ptable-action">
                                        <a href="#"><i class="fa fa-shopping-cart"></i>Book now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer-->
    <footer class="bg-dark">
        <div class="footer-top">
        </div>
        <div class="container d-4">
            <div class="row gy-5">
                <div class="col-lg-3 col-sm-6">
                    <a href="#" class="text-decoration-none fw-semibold">
                        <p>SaveLink</p>
                    </a>
                    <div class="line"></div>
                    <p>Empowering cleanlines Through Intelligent Technology</p>
                    <div>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h6 class="mb-0 text-white">SERVICES</h6>
                    <div class="line"></div>
                    <ul>
                        <li><a href="#">Easy Connect</a></li>
                        <li><a href="#">Verified Credentials</a></li>
                        <li><a href="#">Transparent pricing</a></li>
                        <li><a href="#">Real-Time Update</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h6 class="mb-0 text-white">ABOUT</h6>
                    <div class="line"></div>
                    <ul>
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Our Vision</a></li>
                        <li><a href="#">Out Team</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h6 class="mb-0 text-white">CONTACT</h6>
                    <div class="line"></div>
                    <ul>
                        <li><a href="#">Jharsuguda, 768204</a></li>
                        <li><a href="#">+91-(8791XXXX81)</a></li>
                        <li><a href="#">tejan.thapa.555@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <footer class="bg-dark">
            <div class="footer-top"></div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row g-4 justify-content-between">
                        <div class="col-auto">
                            <p class="mb-0">&copy; 2024 SaveLink. All rights reserved.</p>
                        </div>
                        <div class="col-auto">
                            <p class="mb-0"><a href="#"></a>Designed by Team Rtx</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </footer>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="../js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>