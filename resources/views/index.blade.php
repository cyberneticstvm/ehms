<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="landing template, Cuba landing template,responsive landing
        template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('/frontend/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/frontend/assets/images/favicon.png') }}" type="image/x-icon">
    <title>eHMS - A Super Cool Eye Hospital Management System</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&amp;display=swap" rel="stylesheet">
    <!-- Swiper css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/assets/css/vendors/swiper/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/assets/css/vendors/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/assets/css/vendors/drawer/bootstrap-drawer.css') }}">
    <!-- Font awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/assets/css/vendors/fontawesome/all.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/assets/css/style.css') }}">
</head>

<body>
    <div class="loader-wrapper">
        <div class="loader-index"> <span></span></div><svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <div class="tap-top"><i class="fa-solid fa-angles-up"></i></div>
    <main>
        <!-- Header start -->
        <header class="header-absolute">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="custom-container container">
                    <a class="navbar-brand m-0" href="/">
                        <img src="{{ asset('/frontend/assets/images/logo/logo.webp') }}" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav navigation">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about-us">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#service">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#features">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#plan">Plan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#review">Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#blog">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <button class="btn btn-primary rounded-pill" data-toggle="drawer" data-target="#drawer-1">Request Demo</button>
                </div>
            </nav>
        </header>

        <!-- Home section start -->
        <section class="home-style-1">
            <div class="custom-container container">
                <div class="home-content" id="home">
                    <h4 class="txt-warning">Introducing </h4>
                    <h1>The leading <span class="txt-success">Eye Hospital Management System</span> for your Hospital</h1>
                    <p>eHMS helps to manage all aspects of your eye hospital's operations such as Branches, Patients, Doctors, Appointments, consultation, Camps, Pharmacy and Orders. It includes electronic health records, business intelligence, SMS and revenue cycle management.</p>
                    <div class="row">
                        <div class="col-lg-5 col-md-8">
                            <div class="home-details">
                                <form class="grouping-input">
                                    <div class="d-flex align-items-center">
                                        <div class="input-icon">
                                            <svg>
                                                <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#envelope') }}"></use>
                                            </svg>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Enter your email.." required>
                                    </div>
                                    <button type="button" class="btn btn-primary rounded-pill" data-toggle="drawer" data-target="#drawer-1">
                                        <span>Request Demo</span>
                                        <svg>
                                            <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#arrow-right') }}"></use>
                                        </svg>
                                    </button>
                                </form>
                                <ul>
                                    <li>
                                        <svg>
                                            <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#right') }}"></use>
                                        </svg>
                                        <span>Easy to access</span>
                                    </li>
                                    <li>
                                        <svg>
                                            <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#right') }}"></use>
                                        </svg>
                                        <span>No credit card</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-image text-end d-md-block d-none">
                <img class="img-fluid" src="{{ asset('/frontend/assets/images/sass/home.webp') }}" alt="cuba dashboards">
                <img class="img-fluid text-image" src="{{ asset('/frontend/assets/images/sass/home-text.webp') }}" alt="label dashboard">
            </div>
        </section>
        <!-- Home section end -->

        <!-- Brand section start -->
        <section class="brand-style-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-style-1 text-center">
                            <h5>Trusted 10+ Companies around the world</h5>
                            <h2>Hospitals That Grows With <span class="text-primary"> eHMS</span> Productivity Tool</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="brand-slider-wrapper">
                            <div class="swiper brand-slider-1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="brand-box">
                                            <a href="https://devieh.com" target="_blank">Devi Eye Hospitals</a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-box">
                                            <a href="https://specta360.com" target="_blank">Specta360</a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-box">
                                            <a href="https://devieyecare.com" target="_blank">Devi Eyecare</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brand section end -->

        <!-- Service section start -->
        <section class="service-style-1" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-style-1 text-center">
                            <h5>Introducing our service</h5>
                            <h2>We Are Here To Help You Run Your Hospital Business</h2>
                            <p>Customer support for SaaS companies is one of the best ways to understand your customers'
                                feelings about your business.</p>
                        </div>
                    </div>
                </div>
                <div class="row service-wrapper gy-4">
                    <div class="col-lg-6">
                        <div class="light-card">
                            <div class="service-content">
                                <div class="service-icon-box">
                                    <img src="{{ asset('/frontend/assets/images/sass/service/icons/1.webp') }}" alt="icon">
                                </div>
                                <div class="service-content-wrap">
                                    <h3>Advance Analytics</h3>
                                    <p>Advanced analytics refers to the use of complex and sophisticated data analysis
                                        techniques and tools </p>
                                    <a href="#">
                                        <span>Learn More</span>
                                        <svg>
                                            <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#arrow-right') }}"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="service-image">
                                <img class="img-fluid" src="{{ asset('/frontend/assets/images/sass/service/graph-1.webp') }}" alt="graph">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="light-card">
                            <div class="service-content">
                                <div class="service-icon-box">
                                    <img src="{{ asset('/frontend/assets/images/sass/service/icons/2.webp') }}" alt="icon">
                                </div>
                                <div class="service-content-wrap">
                                    <h3>Automated Reports</h3>
                                    <p>Automated reports are reports that are generated automatically by computer
                                        software or programs.</p>
                                    <a href="#">
                                        <span>Learn More</span>
                                        <svg>
                                            <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#arrow-right') }}"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="service-image">
                                <img class="img-fluid" src="{{ asset('/frontend/assets/images/sass/service/graph-2.webp') }}" alt="graph">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-content service-box">
                            <img class="img-fluid service-shape" src="{{ asset('/frontend/assets/images/shape/2.webp') }}" alt="shape">
                            <div class="service-icon-box">
                                <img src="{{ asset('/frontend/assets/images/sass/service/icons/2.webp') }}" alt="icon">
                            </div>
                            <div class="service-content-wrap">
                                <h3>Appointments</h3>
                                <p class="text-justify">Managing patient appointments efficiently contributes to better patient care and overall healthcare service quality. Modern technologies, such as eHMS, can help streamline the process and improve the patient experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-content service-box">
                            <img class="img-fluid service-shape" src="{{ asset('/frontend/assets/images/shape/2.webp') }}" alt="shape">
                            <div class="service-icon-box">
                                <img src="{{ asset('/frontend/assets/images/sass/service/icons/2.webp') }}" alt="icon">
                            </div>
                            <div class="service-content-wrap">
                                <h3>Consultation</h3>
                                <p class="text-justify">Patient consultations are a cornerstone of effective healthcare delivery, ensuring that patients receive appropriate care and that their health concerns are addressed. Good communication and a patient-centered approach are essential for successful patient consultations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-content service-box">
                            <img class="img-fluid service-shape" src="{{ asset('/frontend/assets/images/shape/2.webp') }}" alt="shape">
                            <div class="service-icon-box">
                                <img src="{{ asset('/frontend/assets/images/sass/service/icons/2.webp') }}" alt="icon">
                            </div>
                            <div class="service-content-wrap">
                                <h3>Reports</h3>
                                <p>AI integrated one click reports for all modules such as Appointments, Consultation, Camp Register, Pharmacy, Inventory and Store. eHMS also providing interactive dashboard for graphical representations and consolidated numbers for the data.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service section end -->

        <!-- About section start -->
        <section class="about-style-1" id="about-us">
            <div class="custom-container container">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="about-images-wrapper">
                            <img class="img-fluid about-image" src="{{ asset('/frontend/assets/images/sass/about-us/1.webp') }}" alt="overview chart">
                            <img class="img-fluid left-image" src="{{ asset('/frontend/assets/images/sass/about-us/2.webp') }}" alt="chart">
                            <img class="img-fluid right-image" src="{{ asset('/frontend/assets/images/sass/about-us/3.webp') }}" alt="chart">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="title-style-1">
                                <h5>About Us</h5>
                                <h2>Why eHMS is the Best Eye Hospital Software</h2>
                            </div>
                            <p>A software company is an organization that develops, distributes, and supports software
                                products and services.</p>
                            <ul>
                                <li>
                                    <div class="about-icon bg-light-primary">
                                        <svg>
                                            <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#interface') }}"></use>
                                        </svg>
                                    </div>
                                    <p>Friendly Interface</p>
                                </li>
                                <li>
                                    <div class="about-icon bg-light-primary">
                                        <svg>
                                            <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#lock') }}"></use>
                                        </svg>
                                    </div>
                                    <p>Strong Encryption</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section end -->

        <!-- Solution section start -->
        <section class="solution-style-1">
            <div class="custom-container container">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="title-style-1">
                            <h5>Our Solution</h5>
                            <h2>Our Platform for any Business</h2>
                            <p>There are many platforms that can be used by businesses to support their operations. </p>
                        </div>
                        <ul class="solution-content">
                            <li>
                                <div class="d-flex bg-light-primary">
                                    <div class="solution-icon">
                                        <img src="{{ asset('/frontend/assets/images/sass/icons/1.webp') }}" alt="vector icon">
                                    </div>
                                    <div>
                                        <h3>Appointments</h3>
                                        <p>Many desktop publican packages and web page editors now use for them.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bg-light-success">
                                    <div class="solution-icon">
                                        <img src="{{ asset('/frontend/assets/images/sass/icons/2.webp') }}" alt="vector icon">
                                    </div>
                                    <div>
                                        <h3>Class Bookings</h3>
                                        <p>Reporting & Omni-channel Solution To Empower Your Agents</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bg-light-danger">
                                    <div class="solution-icon">
                                        <img src="{{ asset('/frontend/assets/images/sass/icons/3.webp') }}" alt="vector icon">
                                    </div>
                                    <div>
                                        <h3>Fast Support</h3>
                                        <p>We Are Here To Help You Find A Solution That Suits Your Business Need.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="solution-images-wrapper">
                            <img class="img-fluid" src="{{ asset('/frontend/assets/images/sass/solution/1.webp') }}" alt="chart">
                            <img class="img-fluid left-image" src="{{ asset('/frontend/assets/images/sass/solution/2.webp') }}" alt="chart">
                            <img class="img-fluid right-image" src="{{ asset('/frontend/assets/images/sass/solution/3.webp') }}" alt="chart">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Solution section end -->

        <!-- Feature section start -->
        <section class="feature-style-1" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-style-1 text-center">
                            <h5>Faster, Lighter & Dev. Friendly</h5>
                            <h2>Choose dashboard for every stage of your customer journey</h2>
                            <p>Customer support for SaaS companies is one of the best ways to understand your customers'
                                feelings about your business.</p>
                        </div>
                    </div>
                </div>
                <div class="row feature-main-wrapper row-cols-lg-5 row-cols-sm-3 row-cols-1 gy-4">
                    <div class="col">
                        <div class="feature-wrapper">
                            <div class="feature-outline-box">
                                <div class="feature-box">
                                    <div class="feature-icon bg-light-info">
                                        <img src="{{ asset('/frontend/assets/images/sass/feature-icon/1.webp') }}" alt="icon">
                                    </div>
                                    <h3>Analytics Business</h3>
                                </div>
                            </div>
                            <img class="outline-box" src="{{ asset('/frontend/assets/images/sass/shape/1.webp') }}" alt="shape arrow">
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-wrapper">
                            <div class="feature-outline-box">
                                <div class="feature-box">
                                    <div class="feature-icon bg-light-warning">
                                        <img src="{{ asset('/frontend/assets/images/sass/feature-icon/2.webp') }}" alt="icon">
                                    </div>
                                    <h3>Artificial Intelligence</h3>
                                </div>
                            </div>
                            <img class="outline-box" src="{{ asset('/frontend/assets/images/sass/shape/2.webp') }}" alt="shape arrow">
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-wrapper">
                            <div class="feature-outline-box">
                                <div class="feature-box">
                                    <div class="feature-icon bg-light-success">
                                        <img src="{{ asset('/frontend/assets/images/sass/feature-icon/3.webp') }}" alt="icon">
                                    </div>
                                    <h3>Privacy & Security</h3>
                                </div>
                            </div>
                            <img class="outline-box" src="{{ asset('/frontend/assets/images/sass/shape/3.webp') }}" alt="shape arrow">
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-wrapper">
                            <div class="feature-outline-box">
                                <div class="feature-box">
                                    <div class="feature-icon bg-light-danger">
                                        <img src="{{ asset('/frontend/assets/images/sass/feature-icon/4.webp') }}" alt="icon">
                                    </div>
                                    <h3>Annual Reports</h3>
                                </div>
                            </div>
                            <img class="outline-box" src="{{ asset('/frontend/assets/images/sass/shape/4.webp') }}" alt="shape arrow">
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-wrapper">
                            <div class="feature-outline-box">
                                <div class="feature-box">
                                    <div class="feature-icon bg-light-primary">
                                        <img src="{{ asset('/frontend/assets/images/sass/feature-icon/5.webp') }}" alt="icon">
                                    </div>
                                    <h3>Performance Analysis</h3>
                                </div>
                            </div>
                            <img class="outline-box" src="{{ asset('/frontend/assets/images/sass/shape/5.webp') }}" alt="shape arrow">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature section end -->

        <!-- Overview section start -->
        <section class="overview-style-1 section-b-space">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-style-1 text-center">
                            <h5>Key selling points</h5>
                            <h2>Quick Software Overview</h2>
                            <p>Pick one of our stock themes, or create your custom theme with the most advanced theme
                                editor on any online survey building tool. Create professional ads.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="overview-image">
                            <img class="img-fluid" src="{{ asset('/frontend/assets/images/sass/overview.webp') }}" alt="dashboard">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="overview-big-text">
                            <h2>4200+</h2>
                            <svg width="155" height="75" viewBox="0 0 155 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="path-1-inside-1_1_2374" fill="white">
                                    <path d="M52.9682 14.6676C51.643 13.9786 50.3044 13.2166 48.9126 12.5607C46.5819 11.4609 44.2644 10.3279 41.8671 9.38046C38.3643 7.99572 34.8215 6.71036 31.2588 5.48463C29.594 4.91484 27.8492 4.59018 26.1311 4.17277C23.7871 3.60298 21.4563 2.99343 19.0989 2.50976C17.6072 2.20499 16.0689 2.1056 14.5573 1.88033C11.2542 1.39004 7.96454 0.879875 4.66818 0.39621C3.55608 0.230571 2.43066 0.0980604 1.30523 0.00530274C0.885697 -0.027825 0.452835 0.0980604 2.41404e-06 0.27695C1.55828 0.681109 3.10991 1.16477 4.68817 1.47617C7.47176 2.0261 10.2886 2.43025 13.0789 2.96692C17.0612 3.72886 21.0967 4.37154 25.0124 5.41175C29.4009 6.57785 33.7094 8.07522 38.0113 9.53947C42.7261 11.1429 47.1213 13.4552 51.5297 15.741C52.3955 16.1915 52.1357 16.7613 51.9959 17.2781C51.31 19.7627 51.9559 22.0419 52.8483 24.3409C53.694 26.5208 55.0126 28.409 56.3777 30.2509C57.5697 31.8609 58.9815 33.3119 60.3667 34.7762C63.0104 37.5722 66.087 39.8447 69.3634 41.839C71.5743 43.1906 73.8051 44.5422 76.349 45.2247C78.2269 45.7282 79.6653 45.3373 80.3712 43.8863C80.8241 42.9521 81.0438 41.8456 81.1237 40.7988C81.3035 38.4467 80.6576 36.2868 79.5455 34.1799C78.5799 32.3512 77.1148 31.099 75.5499 29.8733C74.0649 28.7138 72.7064 27.3821 71.1614 26.322C67.9316 24.1024 64.6219 22.0021 61.3389 19.8555C59.5942 18.7159 57.8494 17.5696 56.0914 16.4433C55.6452 16.1584 55.1591 15.9397 54.653 15.6681C55.9249 13.6274 57.663 12.5077 59.8805 12.0174C62.1314 11.5205 64.3356 11.8319 66.5265 12.3487C71.8207 13.6142 76.7819 15.7211 81.5699 18.2852C83.0882 19.1001 84.6798 19.7958 86.1715 20.6638C88.1826 21.8299 90.1537 23.0755 92.1049 24.3409C94.4889 25.8847 96.8463 27.4815 99.2037 29.0583C101.674 30.7147 104.165 32.3512 106.602 34.0606C108.913 35.6773 111.224 37.3138 113.441 39.0563C117.856 42.495 122.258 45.98 126.58 49.5445C129.41 51.8767 132.081 54.4077 134.871 56.7929C136.935 58.5553 139.08 60.2315 141.184 61.9542C141.743 62.4114 142.296 62.8884 142.809 63.5377C142.05 63.4383 141.284 63.3389 140.525 63.2462C136.569 62.736 132.62 62.2126 128.665 61.7157C126.014 61.3844 123.37 61.0332 120.713 60.8013C117.99 60.5628 115.253 60.4502 112.516 60.2912C110.165 60.152 107.808 60.0195 105.45 59.8804C104.651 59.834 103.845 59.6883 103.053 59.7346C102.513 59.7678 101.814 59.5955 101.495 60.2978C101.368 60.5694 101.102 60.8941 101.168 61.1127C101.295 61.5235 101.548 61.7819 102.14 61.8879C103.965 62.206 105.756 62.7029 107.548 63.1799C112.183 64.4255 116.798 65.7639 121.452 66.9366C125.754 68.0166 130.096 68.9243 134.418 69.9181C139.786 71.1571 145.16 72.396 150.527 73.6549C151.173 73.8073 151.746 74.0524 152.252 74.609C152.778 75.192 153.637 75.0529 154.283 74.6487C154.616 74.4433 154.822 73.9663 154.989 73.5754C155.049 73.4363 154.856 73.1514 154.722 72.9791C154.389 72.5418 153.903 72.1774 153.69 71.6937C152.824 69.7193 152.065 67.6853 151.206 65.7043C150.001 62.9281 148.696 60.1918 147.504 57.4091C146.598 55.3021 145.772 53.1621 144.973 51.022C144.054 48.5772 143.182 46.1125 142.316 43.6478C141.943 42.5943 141.624 41.521 141.331 40.441C141.111 39.6327 140.791 39.4008 140.005 39.6062C139.24 39.805 139.006 40.176 139.266 40.9379C139.806 42.548 140.372 44.1513 140.931 45.7481C141.99 48.776 142.989 51.8237 144.147 54.8118C144.873 56.6736 145.872 58.4228 146.698 60.2448C147.397 61.7886 148.01 63.3654 148.676 64.9158C149.615 67.1155 150.574 69.3086 151.513 71.5082C151.599 71.7136 151.606 71.9521 151.659 72.237C137.435 68.6129 122.918 66.3536 109 61.5964C110.272 61.6627 111.543 61.7355 112.822 61.8018C115.073 61.9144 117.33 61.9144 119.575 62.1397C124.456 62.6366 129.324 63.2329 134.192 63.8226C137.215 64.187 140.225 64.5978 143.242 65.0284C144.041 65.1411 144.82 65.4127 145.619 65.5585C145.885 65.6049 146.225 65.5386 146.452 65.3929C146.711 65.2272 147.058 64.9026 147.038 64.6707C147.018 64.399 146.678 64.1141 146.425 63.9021C145.726 63.3124 145 62.7559 144.281 62.1861C142.156 60.4833 139.999 58.8203 137.914 57.0645C135.604 55.1166 133.366 53.0826 131.082 51.1015C129.171 49.4385 127.293 47.7358 125.315 46.1589C122.112 43.6014 118.842 41.1168 115.579 38.6323C113.235 36.8434 110.897 35.0346 108.48 33.3318C105.344 31.1255 102.147 28.9987 98.9507 26.8785C96.1804 25.0433 93.4368 23.155 90.5733 21.4655C87.1504 19.4447 83.6543 17.5498 80.1248 15.7211C78.0604 14.6544 75.8895 13.7666 73.7186 12.9119C70.8151 11.7723 67.8384 10.8116 64.7352 10.414C61.5054 10.0033 58.3622 10.4008 55.5986 12.2824C54.6596 12.9384 53.8871 13.8196 52.9682 14.6676ZM53.8738 17.1125C54.1668 17.2582 54.3866 17.3444 54.5864 17.4636C56.9371 18.8947 59.3478 20.2397 61.6253 21.7835C65.2679 24.2482 68.824 26.8454 72.4133 29.3896C74.1714 30.6352 75.6897 32.1127 77.0549 33.7824C79.3723 36.6115 79.8318 39.7453 78.8995 43.1509C78.8129 43.4623 78.2669 43.8532 77.9406 43.8466C77.2547 43.8333 76.5022 43.7141 75.9028 43.396C73.612 42.1968 71.3279 40.9711 69.1236 39.6261C64.9949 37.115 61.552 33.8287 58.5353 30.0919C56.6707 27.7796 55.2257 25.2023 54.1136 22.4527C53.4343 20.7499 53.2146 18.9875 53.8738 17.1125Z" />
                                </mask>
                                <path d="M52.9682 14.6676C51.643 13.9786 50.3044 13.2166 48.9126 12.5607C46.5819 11.4609 44.2644 10.3279 41.8671 9.38046C38.3643 7.99572 34.8215 6.71036 31.2588 5.48463C29.594 4.91484 27.8492 4.59018 26.1311 4.17277C23.7871 3.60298 21.4563 2.99343 19.0989 2.50976C17.6072 2.20499 16.0689 2.1056 14.5573 1.88033C11.2542 1.39004 7.96454 0.879875 4.66818 0.39621C3.55608 0.230571 2.43066 0.0980604 1.30523 0.00530274C0.885697 -0.027825 0.452835 0.0980604 2.41404e-06 0.27695C1.55828 0.681109 3.10991 1.16477 4.68817 1.47617C7.47176 2.0261 10.2886 2.43025 13.0789 2.96692C17.0612 3.72886 21.0967 4.37154 25.0124 5.41175C29.4009 6.57785 33.7094 8.07522 38.0113 9.53947C42.7261 11.1429 47.1213 13.4552 51.5297 15.741C52.3955 16.1915 52.1357 16.7613 51.9959 17.2781C51.31 19.7627 51.9559 22.0419 52.8483 24.3409C53.694 26.5208 55.0126 28.409 56.3777 30.2509C57.5697 31.8609 58.9815 33.3119 60.3667 34.7762C63.0104 37.5722 66.087 39.8447 69.3634 41.839C71.5743 43.1906 73.8051 44.5422 76.349 45.2247C78.2269 45.7282 79.6653 45.3373 80.3712 43.8863C80.8241 42.9521 81.0438 41.8456 81.1237 40.7988C81.3035 38.4467 80.6576 36.2868 79.5455 34.1799C78.5799 32.3512 77.1148 31.099 75.5499 29.8733C74.0649 28.7138 72.7064 27.3821 71.1614 26.322C67.9316 24.1024 64.6219 22.0021 61.3389 19.8555C59.5942 18.7159 57.8494 17.5696 56.0914 16.4433C55.6452 16.1584 55.1591 15.9397 54.653 15.6681C55.9249 13.6274 57.663 12.5077 59.8805 12.0174C62.1314 11.5205 64.3356 11.8319 66.5265 12.3487C71.8207 13.6142 76.7819 15.7211 81.5699 18.2852C83.0882 19.1001 84.6798 19.7958 86.1715 20.6638C88.1826 21.8299 90.1537 23.0755 92.1049 24.3409C94.4889 25.8847 96.8463 27.4815 99.2037 29.0583C101.674 30.7147 104.165 32.3512 106.602 34.0606C108.913 35.6773 111.224 37.3138 113.441 39.0563C117.856 42.495 122.258 45.98 126.58 49.5445C129.41 51.8767 132.081 54.4077 134.871 56.7929C136.935 58.5553 139.08 60.2315 141.184 61.9542C141.743 62.4114 142.296 62.8884 142.809 63.5377C142.05 63.4383 141.284 63.3389 140.525 63.2462C136.569 62.736 132.62 62.2126 128.665 61.7157C126.014 61.3844 123.37 61.0332 120.713 60.8013C117.99 60.5628 115.253 60.4502 112.516 60.2912C110.165 60.152 107.808 60.0195 105.45 59.8804C104.651 59.834 103.845 59.6883 103.053 59.7346C102.513 59.7678 101.814 59.5955 101.495 60.2978C101.368 60.5694 101.102 60.8941 101.168 61.1127C101.295 61.5235 101.548 61.7819 102.14 61.8879C103.965 62.206 105.756 62.7029 107.548 63.1799C112.183 64.4255 116.798 65.7639 121.452 66.9366C125.754 68.0166 130.096 68.9243 134.418 69.9181C139.786 71.1571 145.16 72.396 150.527 73.6549C151.173 73.8073 151.746 74.0524 152.252 74.609C152.778 75.192 153.637 75.0529 154.283 74.6487C154.616 74.4433 154.822 73.9663 154.989 73.5754C155.049 73.4363 154.856 73.1514 154.722 72.9791C154.389 72.5418 153.903 72.1774 153.69 71.6937C152.824 69.7193 152.065 67.6853 151.206 65.7043C150.001 62.9281 148.696 60.1918 147.504 57.4091C146.598 55.3021 145.772 53.1621 144.973 51.022C144.054 48.5772 143.182 46.1125 142.316 43.6478C141.943 42.5943 141.624 41.521 141.331 40.441C141.111 39.6327 140.791 39.4008 140.005 39.6062C139.24 39.805 139.006 40.176 139.266 40.9379C139.806 42.548 140.372 44.1513 140.931 45.7481C141.99 48.776 142.989 51.8237 144.147 54.8118C144.873 56.6736 145.872 58.4228 146.698 60.2448C147.397 61.7886 148.01 63.3654 148.676 64.9158C149.615 67.1155 150.574 69.3086 151.513 71.5082C151.599 71.7136 151.606 71.9521 151.659 72.237C137.435 68.6129 122.918 66.3536 109 61.5964C110.272 61.6627 111.543 61.7355 112.822 61.8018C115.073 61.9144 117.33 61.9144 119.575 62.1397C124.456 62.6366 129.324 63.2329 134.192 63.8226C137.215 64.187 140.225 64.5978 143.242 65.0284C144.041 65.1411 144.82 65.4127 145.619 65.5585C145.885 65.6049 146.225 65.5386 146.452 65.3929C146.711 65.2272 147.058 64.9026 147.038 64.6707C147.018 64.399 146.678 64.1141 146.425 63.9021C145.726 63.3124 145 62.7559 144.281 62.1861C142.156 60.4833 139.999 58.8203 137.914 57.0645C135.604 55.1166 133.366 53.0826 131.082 51.1015C129.171 49.4385 127.293 47.7358 125.315 46.1589C122.112 43.6014 118.842 41.1168 115.579 38.6323C113.235 36.8434 110.897 35.0346 108.48 33.3318C105.344 31.1255 102.147 28.9987 98.9507 26.8785C96.1804 25.0433 93.4368 23.155 90.5733 21.4655C87.1504 19.4447 83.6543 17.5498 80.1248 15.7211C78.0604 14.6544 75.8895 13.7666 73.7186 12.9119C70.8151 11.7723 67.8384 10.8116 64.7352 10.414C61.5054 10.0033 58.3622 10.4008 55.5986 12.2824C54.6596 12.9384 53.8871 13.8196 52.9682 14.6676ZM53.8738 17.1125C54.1668 17.2582 54.3866 17.3444 54.5864 17.4636C56.9371 18.8947 59.3478 20.2397 61.6253 21.7835C65.2679 24.2482 68.824 26.8454 72.4133 29.3896C74.1714 30.6352 75.6897 32.1127 77.0549 33.7824C79.3723 36.6115 79.8318 39.7453 78.8995 43.1509C78.8129 43.4623 78.2669 43.8532 77.9406 43.8466C77.2547 43.8333 76.5022 43.7141 75.9028 43.396C73.612 42.1968 71.3279 40.9711 69.1236 39.6261C64.9949 37.115 61.552 33.8287 58.5353 30.0919C56.6707 27.7796 55.2257 25.2023 54.1136 22.4527C53.4343 20.7499 53.2146 18.9875 53.8738 17.1125Z" stroke="black" stroke-width="2" mask="url(#path-1-inside-1_1_2374)" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8">
                        <div class="overview-content">
                            <h4>More than 4k People Around the
                                world are already using cuba dashboard</h4>
                            <ul>
                                <li>
                                    <h3>40k+</h3>
                                    <p>
                                        <svg>
                                            <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#right') }}"></use>
                                        </svg>
                                        <span>Active Downloads</span>
                                    </p>
                                </li>
                                <li>
                                    <h3>4.84</h3>
                                    <p>
                                        <svg>
                                            <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#right') }}"></use>
                                        </svg>
                                        <span>Average Rating</span>
                                    </p>
                                </li>
                                <li>
                                    <h3>52k</h3>
                                    <p>
                                        <svg>
                                            <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#right') }}"></use>
                                        </svg>
                                        <span>Active users</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Overview section end -->

        <!-- Review section start -->
        <section class="review-style-1 section-b-space" id="review">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-style-1 text-center">
                            <h5>Customer Feedback</h5>
                            <h2>What our valuable customer say about us</h2>
                            <p>Some inspirational feedback from our customers on themeforest</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="review-slider-wrapper">
                            <div class="swiper review-slider-1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="review-box">
                                            <div class="review-user d-flex align-items-center">
                                                <div class="review-image">
                                                    <img src="{{ asset('/frontend/assets/images/user/1.webp') }}" alt="profile">
                                                </div>
                                                <div>
                                                    <h3>Esther Howard</h3>
                                                    <span class="txt-success">CEO</span>
                                                </div>
                                                <ul class="social-links">
                                                    <li>
                                                        <a href="https://www.facebook.com/" target="_blank">
                                                            <i class="fa-brands fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/" target="_blank">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.skype.com/en/" target="_blank">
                                                            <i class="fa-brands fa-skype"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="review-content">
                                                <p>Hey, I loved it's great design and using this for my online book
                                                    selling website [ readtheworld.eu ]. I am thankful to the support
                                                    team.</p>

                                                <p>They setup my website and give me paid services also for my custom
                                                    requirements and make my website a complete booking selling
                                                    website..</p>
                                            </div>
                                            <ul class="ratings d-flex">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="review-box">
                                            <div class="review-user d-flex align-items-center">
                                                <div class="review-image">
                                                    <img src="{{ asset('/frontend/assets/images/user/2.webp') }}" alt="profile">
                                                </div>
                                                <div>
                                                    <h3>Esther Howard</h3>
                                                    <span class="txt-success">CEO</span>
                                                </div>
                                                <ul class="social-links">
                                                    <li>
                                                        <a href="https://www.facebook.com/" target="_blank">
                                                            <i class="fa-brands fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/" target="_blank">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.skype.com/en/" target="_blank">
                                                            <i class="fa-brands fa-skype"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="review-content">
                                                <p>Planning a project requires a number of tasks to assure timely
                                                    delivery. Project planning is one of the most important features
                                                    you’ve been looking for to optimize work flow.</p>
                                            </div>
                                            <ul class="ratings d-flex">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="review-box">
                                            <div class="review-user d-flex align-items-center">
                                                <div class="review-image">
                                                    <img src="{{ asset('/frontend/assets/images/user/2.webp') }}" alt="profile">
                                                </div>
                                                <div>
                                                    <h3>Esther Howard</h3>
                                                    <span class="txt-success">CEO</span>
                                                </div>
                                                <ul class="social-links">
                                                    <li>
                                                        <a href="https://www.facebook.com/" target="_blank">
                                                            <i class="fa-brands fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/" target="_blank">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.skype.com/en/" target="_blank">
                                                            <i class="fa-brands fa-skype"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="review-content">
                                                <p>Planning a project requires a number of tasks to assure timely
                                                    delivery. Project planning is one of the most important features
                                                    you’ve been looking for to optimize work flow.</p>
                                            </div>
                                            <ul class="ratings d-flex">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star fill-light"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-nav">
                                    <div class="slidePrev-btn"><i class="fa-solid fa-arrow-left"></i></div>
                                    <div class="slideNext-btn"><i class="fa-solid fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Review section end -->

        <!-- Subscription section start -->
        <section class="subscribe-style-1">
            <div class="custom-container container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="subscribe-box text-center">
                            <div class="subscribe-content">
                                <h3>Get Started Today and Try 30 days free!</h3>
                                <p>Start tracking your user analytics to boost your business </p>
                                <form>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Type your e-mail" aria-label="Type your e-mail" aria-describedby="basic-addon2" required>
                                        <button type="submit" class="input-group-text btn-dark" id="basic-addon2">Start
                                            Subscription <i class="fa-solid fa-arrow-right ms-2"></i></button>
                                    </div>
                                </form>
                                <div class="home-details">
                                    <ul>
                                        <li>
                                            <svg>
                                                <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#right') }}"></use>
                                            </svg>
                                            <span>Easy to access</span>
                                        </li>
                                        <li>
                                            <svg>
                                                <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#right') }}"></use>
                                            </svg>
                                            <span>No credit card</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="decore">
                                <img class="img-fluid left-image" src="{{ asset('/frontend/assets/images/sass/subscribe/1.webp') }}" alt="men vector">
                                <img class="img-fluid right-image" src="{{ asset('/frontend/assets/images/sass/subscribe/2.webp') }}" alt="graph card">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Subscription section end -->

        <!-- Plan section start -->
        <section class="plan-style-1" id="plan">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-style-1 text-center">
                            <h5>Choose from our affordable 3 packages!</h5>
                            <h2>Make the wise decision for your business</h2>
                            <p>Choose the right plan for you! Our staffs will give continuously marketing support to
                                you! </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="plan-slider-wrapper">
                            <div class="swiper plan-slider-1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="plan-box">
                                            <div class="text-center">
                                                <h3>6 Months</h3>
                                                <p>Have a go and test your superpowers</p>
                                                <div class="plan-price">
                                                    <span>$</span>
                                                    <h2 class="txt-primary">30.00</h2>
                                                    <span>/ yr.</span>
                                                </div>
                                                <div class="trial-content">
                                                    <ul>
                                                        <li>
                                                            <svg>
                                                                <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#right') }}"></use>
                                                            </svg>
                                                            <span>6 Months Premium Support Included</span>
                                                        </li>
                                                        <li>
                                                            <svg>
                                                                <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#right') }}"></use>
                                                            </svg>
                                                            <span>Quality checked by Envato</span>
                                                        </li>
                                                    </ul>
                                                    <button type="button" class="btn btn-outline-dark rounded-pill">Start Free
                                                        Trial</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="plan-box">
                                            <div class="text-center">
                                                <h3>Annual</h3>
                                                <p>Have a go and test your superpowers</p>
                                                <div class="plan-price">
                                                    <span>$</span>
                                                    <h2 class="txt-primary">40.00</h2>
                                                    <span>/ yr.</span>
                                                </div>
                                                <div class="trial-content">
                                                    <ul>
                                                        <li>
                                                            <svg>
                                                                <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#right') }}"></use>
                                                            </svg>
                                                            <span>unlimited access </span>
                                                        </li>
                                                        <li>
                                                            <svg>
                                                                <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#right') }}"></use>
                                                            </svg>
                                                            <span>24/7 continues services</span>
                                                        </li>
                                                        <li>
                                                            <svg>
                                                                <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#right') }}"></use>
                                                            </svg>
                                                            <span>Expert & experienced marketing team </span>
                                                        </li>
                                                    </ul>
                                                    <button type="button" class="btn btn-outline-dark rounded-pill">Start Free
                                                        Trial</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="plan-box">
                                            <div class="text-center">
                                                <h3>3 Months</h3>
                                                <p>Have a go and test your superpowers</p>
                                                <div class="plan-price">
                                                    <span>$</span>
                                                    <h2 class="txt-primary">25.00</h2>
                                                    <span>/ yr.</span>
                                                </div>
                                                <div class="trial-content">
                                                    <ul>
                                                        <li>
                                                            <svg>
                                                                <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#right') }}"></use>
                                                            </svg>
                                                            <span>6 Months Premium Support Included</span>
                                                        </li>
                                                        <li>
                                                            <svg>
                                                                <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#right') }}"></use>
                                                            </svg>
                                                            <span>Quality checked by Envato</span>
                                                        </li>
                                                    </ul>
                                                    <button type="button" class="btn btn-outline-dark rounded-pill">Start Free
                                                        Trial</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Plan section end -->

        <!-- Blog section start -->
        <section class="blog-style-1 section-b-space" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="title-style-1">
                            <h5>Our Blog</h5>
                            <h2>Year of Struggle Better Strategy with Quality Business</h2>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="blog-content">
                            <p>Pick one of our stock themes, or create your custom theme with the most advanced theme
                                editor on any online survey building tool. Create professional ads.</p>
                            <a href="#">View all <span class="ms-1"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-end gy-sm-4 gy-3">
                    <div class="col-lg-6">
                        <div class="blog-image-wrapper">
                            <img src="{{ asset('/frontend/assets/images/sass/blog/1.webp') }}" alt="blog">
                            <div class="blog-title">
                                <h3>Experience Made Difference</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-image-wrapper">
                            <img src="{{ asset('/frontend/assets/images/sass/blog/2.webp') }}" alt="blog">
                            <div class="blog-title">
                                <h3>Case Study</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="blog-image-wrapper">
                            <img src="{{ asset('/frontend/assets/images/sass/blog/3.webp') }}" alt="blog">
                            <div class="blog-title">
                                <h3>How to Achieve Goals</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog section end -->

        <!-- Footer section start -->
        <footer class="footer-style-1">
            <div class="main-footer">
                <div class="container">
                    <div class="row gx-xl-5 gy-md-5 gy-4 gx-4">
                        <div class="col-xl-4">
                            <div class="footer-contact">
                                <a href="index.html">
                                    <img src="{{ asset('/frontend/assets/images/logo/logo.webp') }}" alt="eHMS Logo">
                                </a>
                                <p class="text-justify">eHMS helps to manage all aspects of your eye hospital's operations such as Branches, Patients, Doctors, Appointments, consultation, Camps, Pharmacy and Orders. It includes electronic health records, business intelligence, SMS and revenue cycle management.</p>
                                <ul>
                                    <li>
                                        <a target="_blank" href="https://www.facebook.com/ehms.care"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.instagram.com/ehms.care"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-6">
                            <div class="footer-content">
                                <h3>Quick Links</h3>
                                <ul class="footer-links">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Home </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>About Us</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Features</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Blog Page</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Demo</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-6">
                            <div class="footer-content">
                                <h3>Important Links</h3>
                                <ul class="footer-links">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Mentors</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Our Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://cybernetics.me" target="_blank">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Parent Organization</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4">
                            <div class="footer-content">
                                <h3>Contact Info</h3>
                                <ul class="footer-location">
                                    <li>
                                        <div class="d-flex">
                                            <div class="footer-icon">
                                                <svg>
                                                    <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#map-pin') }}"></use>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6>Address :</h6>
                                                <p>Head Office: Trivandrum</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <div class="footer-icon">
                                                <svg>
                                                    <use href="{{ asset('/frontend/assets/svg/icon_sprite.svg#inbox') }}"></use>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6>email :</h6>
                                                <p>contact@ehms.care</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="sub-footer">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p>© Copyright {{ date('Y') }}. All Rights Reserved by <a href="https://cybernetics.me" target="_blank">Cybernetics Technologies.</a></p>
                        </div>
                        <div class="col-md-6">
                            <ul class="footer-links sub-footer-links">
                                <li>
                                    <a href="{{ route('terms.of.use') }}">Terms of Use</a>
                                </li>
                                <li>
                                    <a href="{{ route('privacy.policy') }}">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer section end -->

    </main>
    <div class="drawer drawer-left slide" tabindex="-1" role="dialog" aria-labelledby="drawer-1-title" aria-hidden="true" id="drawer-1">
        <div class="drawer-content drawer-content-scrollable" role="document">
            <div class="drawer-header">
                <h4 class="drawer-title" id="drawer-1-title">Request Demo</h4>
            </div>
            <div class="drawer-body">
                <h6 class="text-success text-center">Please enter your details and submit the form.</h6>
                <form method="post" id="frm-req-demo">
                    @csrf
                    <div class="row mt-3 mb-3 g-3">
                        <div class="col-12">
                            <label class="form-label">Full Name *</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required="required">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Contact Number *</label>
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Contact Number" maxlength="10" required="required">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Email *</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Message (Optional)</label>
                            <textarea class="form-control" placeholder="Message" name="message" id="message" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-danger w-100" data-toggle="drawer" data-target="#drawer-1">
                                Cancel
                            </button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-success btn-submit w-100">
                                Submit
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 message mt-3"></div>
                    </div>
                </form>
            </div>
            <div class="drawer-footer">eHMS.care</div>
        </div>
    </div>

    <!-- bootstrap js -->
    <script src="{{ asset('/frontend/assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- swiper js -->
    <script src="{{ asset('/frontend/assets/js/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/js/custom-swiper.js') }}"></script>

    <!-- font awesome js -->
    <script src="{{ asset('/frontend/assets/js/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/backend/assets/js/drawer/bootstrap-drawer.js') }}"></script>

    <script src="{{ asset('/frontend/assets/js/script.js') }}"></script>
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on("submit", "#frm-req-demo", function(e) {
                e.preventDefault();
                var formData = {
                    name: $("#name").val(),
                    email: $("#email").val(),
                    mobile: $("#mobile").val(),
                    message: $("#message").val(),
                };
                $.ajax({
                    method: 'post',
                    url: '/request/demo',
                    data: formData,
                    dataType: 'json',
                    success: function(res) {
                        if (res.status == 'success') {
                            $('#frm-req-demo')[0].reset();
                            $(".message").html(res.message).removeClass('text-danger').addClass('text-success')
                        } else {
                            $(".message").html(res.message).removeClass('text-success').addClass('text-danger');
                        }
                    },
                    beforeSend: function() {
                        $(".btn-submit").html("Requesting..")
                    },
                    complete: function() {
                        $(".btn-submit").html("Submit")
                    }
                });
            })
        });
    </script>
</body>

</html>