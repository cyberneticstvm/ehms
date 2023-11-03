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
                </div>
            </nav>
        </header>

        <!-- Home section start -->
        <section class="home-style-1">
            <div class="custom-container container">
                <div class="" id="home">
                    <h4 class="txt-warning">Introducing </h4>
                    <h1>The leading <span class="txt-success">Eye Hospital Management System</span> for your Hospital</h1>
                    <p>eHMS helps to manage all aspects of your eye hospital's operations such as Branches, Patients, Doctors, Appointments, consultation, Camps, Pharmacy and Orders. It includes electronic health records, business intelligence, SMS and revenue cycle management.</p>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="" tabindex="-1" role="dialog" aria-labelledby="drawer-1-title" aria-hidden="true" id="drawer-1">
                                <div class="drawer-content drawer-content-scrollable" role="document">
                                    <div class="drawer-header">
                                        <h4 class="drawer-title" id="drawer-1-title">Tenant Registration</h4>
                                    </div>
                                    <div class="drawer-body">
                                        <h6 class="text-success text-center">Please enter your details and submit the form.</h6>
                                        @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                        @endif
                                        @if(session()->has('error'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('error') }}
                                        </div>
                                        @endif
                                        <form method="post" id="frm-tenant-register">
                                            @csrf
                                            <div class="row mt-3 mb-3 g-3">
                                                <div class="col-12">
                                                    <label class="form-label">Full Name *</label>
                                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name">
                                                    @error('name')
                                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Contact Number *</label>
                                                    <input type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="Contact Number" maxlength="10">
                                                    @error('mobile')
                                                    <small class="text-danger">{{ $errors->first('mobile') }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Email *</label>
                                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                                    @error('email')
                                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-label">Subdomain * <a href="javascript:void(0)" title="You can access application via https://subdomain.ehms.care">i</a></label>
                                                    <input type="text" class="form-control" name="subdomain" value="{{ old('subdomain') }}" placeholder="Subdomain" maxlength="15">
                                                    @error('subdomain')
                                                    <small class="text-danger">{{ $errors->first('subdomain') }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-label">Admin Username *</label>
                                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Admin Username">
                                                    @error('username')
                                                    <small class="text-danger">{{ $errors->first('username') }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-label">Admin Password *</label>
                                                    <input type="password" class="form-control" name="password" placeholder="******">
                                                    @error('password')
                                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-label">Confirm Admin Password *</label>
                                                    <input type="password" class="form-control" name="password_confirmation" placeholder="******">
                                                    @error('password_confirmation')
                                                    <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                                                    @enderror
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Home section end -->

        <!-- Footer section start -->
        <footer class="footer-style-1">
            <div class="main-footer">
                <div class="container">
                    <div class="row gx-xl-5 gy-md-5 gy-4 gx-4">
                        <div class="col-xl-4">
                            <div class="footer-contact">
                                <a href="index.html">
                                    <img src="{{ asset('/frontend/assets/images/logo/logo.webp') }}" alt="logo">
                                </a>
                                <p>Outlived no dwelling denoting in peculiar as he believed. Behavior excellent
                                    middleton be as it curiosity departure ourselves very extreme future.</p>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://in.pinterest.com/"><i class="fa-brands fa-pinterest"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-6">
                            <div class="footer-content">
                                <h3>Quick Link</h3>
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
                                            <span>Login</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-6">
                            <div class="footer-content">
                                <h3>Community</h3>
                                <ul class="footer-links">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Career</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Leadership</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Strategy</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>Services</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-chevron-right"></i>
                                            <span>History</span>
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
                                                <p>2118 Thorndike Cir. Syracuse, Connecticut 35624</p>
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
                                                <p>info@cubatheme.com</p>
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
                            <p>© Copyright 2023. All Rights Reserved by </p>
                        </div>
                        <div class="col-md-6">
                            <ul class="footer-links sub-footer-links">
                                <li>
                                    <a href="#">Terms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy</a>
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
            $('form').submit(function() {
                $(".btn-submit").attr("disabled", true);
                $(".btn-submit").html("Loading...<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>");
            });
        });
    </script>
</body>

</html>