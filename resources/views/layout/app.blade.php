<!DOCTYPE html>
<html>

<head>
    <title>White Industries</title>
    <link rel="icon" type="image/x-icon" href="{{'images/Logo.png'}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
        ul {
            margin: 0px;
            padding: 0px;
        }

        .footer-section {
            background: #151414;
            position: relative;
        }

        .footer-cta {
            border-bottom: 1px solid #373636;
        }

        .single-cta i {
            color: #ff5e14;
            font-size: 30px;
            float: left;
            margin-top: 8px;
        }

        .cta-text {
            padding-left: 15px;
            display: inline-block;
        }

        .cta-text h4 {
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .cta-text span {
            color: #757575;
            font-size: 15px;
        }

        .footer-content {
            position: relative;
            z-index: 2;
        }

        .footer-pattern img {
            position: absolute;
            top: 0;
            left: 0;
            height: 330px;
            background-size: cover;
            background-position: 100% 100%;
        }

        .footer-logo {
            margin-bottom: 30px;
        }

        .footer-logo img {
            max-width: 200px;
        }

        .footer-text p {
            margin-bottom: 14px;
            font-size: 14px;
            color: #7e7e7e;
            line-height: 28px;
        }

        .footer-social-icon span {
            color: #fff;
            display: block;
            font-size: 20px;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
            margin-bottom: 20px;
        }

        .footer-social-icon a {
            color: #fff;
            font-size: 16px;
            margin-right: 15px;
        }

        .footer-social-icon i {
            height: 40px;
            width: 40px;
            text-align: center;
            line-height: 38px;
            border-radius: 50%;
        }

        .facebook-bg {
            background: #3B5998;
        }

        .twitter-bg {
            background: #55ACEE;
        }

        .google-bg {
            background: #DD4B39;
        }

        .footer-widget-heading h3 {
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 40px;
            position: relative;
        }

        .footer-widget-heading h3::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -15px;
            height: 2px;
            width: 50px;
            background: #ff5e14;
        }

        .footer-widget ul li {
            display: inline-block;
            float: left;
            width: 50%;
            margin-bottom: 12px;
        }

        .footer-widget ul li a:hover {
            color: #ff5e14;
        }

        .footer-widget ul li a {
            color: #878787;
            text-transform: capitalize;
        }

        .subscribe-form {
            position: relative;
            overflow: hidden;
        }

        .subscribe-form input {
            width: 100%;
            padding: 14px 28px;
            background: #2E2E2E;
            border: 1px solid #2E2E2E;
            color: #fff;
        }

        .subscribe-form button {
            position: absolute;
            right: 0;
            background: #ff5e14;
            padding: 13px 20px;
            border: 1px solid #ff5e14;
            top: 0;
        }

        .subscribe-form button i {
            color: #fff;
            font-size: 22px;
            transform: rotate(-6deg);
        }

        .copyright-area {
            background: #202020;
            padding: 25px 0;
        }

        .copyright-text p {
            margin: 0;
            font-size: 14px;
            color: #878787;
        }

        .copyright-text p a {
            color: #ff5e14;
        }

        .footer-menu li {
            display: inline-block;
            margin-left: 20px;
        }

        .footer-menu li:hover a {
            color: #ff5e14;
        }

        .footer-menu li a {
            font-size: 14px;
            color: #878787;
        }
    </style>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="backgroundImage">
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="{{ route('home') }}" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span
                            class="text-primary font-weight-bold border px-3 mr-1">White</span>Industries</h1>
                </a>
            </div>
        </div>
        
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                    data-toggle="collapse" href="{{ route('home') }}"
                    style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                </a>

                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0"
                    id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-auto" style="height: 410px">
                        @foreach ($categories as $category)
                            <a style="background-color: antiquewhite;" href="{{ route('category-by-id', ['id' => $category['id']]) }}"
                                class="nav-item nav-link">{{ $category['title'] }}</a>
                            {{-- <a href="{{route('home').'/'.$category['id']}}" class="nav-item nav-link">{{$category['title']}}</a> --}}
                        @endforeach
                    </div>
                </nav>

            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </nav>
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 420px;">
                            <img class="img-fluid" src="{{ asset('images/cover.png') }}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="display-4 text-white font-weight-semi-bold mb-4">White Industries</h4>
                                    <h5 class="text-light text-uppercase font-weight-medium mb-3">Get your own Items
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Lahore, Pakistan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+923496219269</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>shahzadhere17@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2022, Al Rights Reservered to  <a
                                    href=" http://abeehatechnologies.com/" target="_blank">Abeeha Technologies</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

</body>

</html>
