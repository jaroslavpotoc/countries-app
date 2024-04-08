<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Countries</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{ asset('import/assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('import/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('import/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('import/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <livewire:header-section />

    <!-- ======= Hero Section ======= -->
    <section class="hero-section" id="hero">

        <div class="wave">

            <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path
                            d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                            id="Path"></path>
                    </g>
                </g>
            </svg>

        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 hero-text-image">
                    <div class="row">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 data-aos="fade-right">Promote your country with the Countires App</h1>
                            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit.</p>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="{{ route('country.list') }}" class="btn btn-outline-white">Get started</a></p>
                        </div>
                        <div class="col-lg-4 iphone-wrap">
                            <img src="{{ asset('import/assets/img/phone_1.png') }}" alt="Image" class="phone-1" data-aos="fade-right">
                            <img src="{{ asset('import/assets/img/phone_2.png') }}" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Home Section ======= -->
        <section class="section">
            <div class="container">

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-5" data-aos="fade-up">
                        <h2 class="section-heading">Save your time to using Countries</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="mb-3">Explore Population</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-brightness-high"></i>
                            </div>
                            <h3 class="mb-3">Dark Mode</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-bar-chart"></i>
                            </div>
                            <h3 class="mb-3">Exchange Rate</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="section">

            <div class="container">
                <div class="row justify-content-center text-center mb-5" data-aos="fade">
                    <div class="col-md-6 mb-5">
                        <img src="{{ asset('import/assets/img/undraw_svg_1.svg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="step">
                            <span class="number">01</span>
                            <h3>Sign Up</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step">
                            <span class="number">02</span>
                            <h3>Create Profile</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step">
                            <span class="number">03</span>
                            <h3>Enjoy the app</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 me-auto">
                        <h2 class="mb-4">Online Support</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio,
                            laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt
                            dolore mollitia esse natus beatae.</p>
                        <p><a href="{{ route('country.list') }}" class="btn btn-primary">Download Now</a></p>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <img src="{{ asset('import/assets/img/undraw_svg_2.svg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 ms-auto order-2">
                        <h2 class="mb-4">Gather Feedback</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio,
                            laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt
                            dolore mollitia esse natus beatae.</p>
                        <p><a href="{{ route('country.list') }}" class="btn btn-primary">Download Now</a></p>
                    </div>
                    <div class="col-md-6" data-aos="fade-right">
                        <img src="{{ asset('import/assets/img/undraw_svg_3.svg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Review Section ======= -->
        <livewire:review-section />

        <!-- ======= Download Section ======= -->
        <livewire:download-section />

    </main>

    <!-- ======= Footer ======= -->
    <livewire:footer-section />

    <!-- Vendor JS Files -->
    <livewire:script-section />

</body>

</html>