<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Countries - App</title>
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

    <!-- ======= FeatPricingures Section ======= -->
    <div class="hero-section inner-page">
        <div class="wave">
            <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path
                            d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z"
                            id="Path"></path>
                    </g>
                </g>
            </svg>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-md-7 text-center hero-text">
                            <h1 data-aos="fade-up" data-aos-delay="">Countries App</h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-12" data-aos="fade-up">
                    <h2 class="section-heading">Europe Countries</h2>
                </div>
            </div>
            <div class="row">
                @if($countries->isEmpty())
                    <div class="col-md-12" data-aos="fade-up">
                        <p>No countries available.</p>
                    </div>
                @else
                    @foreach($countries as $country)
                        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="">
                            <div class="feature-1 text-center">
                                <div class="wrap-icon icon-1" data-bs-toggle="collapse" href="#country{{ $loop->iteration }}" role="button" aria-expanded="false" aria-controls="country{{ $loop->iteration }}">
                                    <img src="{{ $country->flag }}" alt="Flag" class="img-fluid mb-2">
                                </div>
                                <h3 class="mb-3">{{ $country->official_name }}</h3>
                                <div class="collapse" id="country{{ $loop->iteration }}">
                                    <div class="card card-body">
                                        <p><strong>Common Name:</strong> {{ $country->common_name }}</p>
                                        <p><strong>Capital City:</strong> {{ $country->capital }}</p>
                                        <p><strong>Population:</strong> {{ $country->population }}</p>
                                        <p><strong>Time Zone:</strong> {{ $country->timezones }}</p>
                                        <p><strong>Currency Symbol:</strong> {{ $country->currency_symbol }}</p>
                                        <p><strong>Currency Code:</strong> {{ $country->currency_code }}</p>
                                        <!-- Add current rate here -->
                                        @php $displayedCurrencyCodes = []; @endphp
                                        @foreach($currencyRates as $rate)
                                            @if($rate->currency_code === $country->currency_code && !in_array($rate->currency_code, $displayedCurrencyCodes))
                                                <p><strong>Current {{ $rate->currency_code }} Rate:</strong> {{ $rate->rate }}</p>
                                                @php $displayedCurrencyCodes[] = $rate->currency_code; @endphp
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- ======= Review Section ======= -->
    <livewire:review-section />

    <!-- ======= Download Section ======= -->
    <livewire:download-section />

    <!-- ======= Footer ======= -->
    <livewire:footer-section />

    <!-- Vendor JS Files -->
    <livewire:script-section />

</body>

</html>
