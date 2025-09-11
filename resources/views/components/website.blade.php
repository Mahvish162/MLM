<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crypt.tophivetheme.com/demo/template-8.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Aug 2025 10:05:57 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Deltabiz</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/button.css') }}">
    <link rel="icon" type="image/svg" href="{{ asset('images/DELTABIZ-LOGO3.png') }}">
</head>
<body class="crypt-dark section-dark">

    <!-- Hero/Header -->
    <section class="container-fluid temp5-bg">

        <!-- Header -->
        <header class="header-boxed border-bottom-0 fixed-top mt-2">
            <div class="d-flex flex-row justify-content-between align-items-center">

                <!-- Logo -->
                <div class="crypt-logo dark">
                    <a href="template-1.html">
                        <img src="{{ asset('images/DELTABIZ-LOGO3.png') }}" alt="">
                    </a>
                </div>
                <div class="crypt-logo light">
                    <a href="template-1.html">
                        <img src="{{ asset('images/DELTABIZ-LOGO3.png') }}" alt="">
                    </a>
                </div>

                <!-- Menu item -->
                <div class="transparent-menu-bg flex hidesmscreen in-view">
                    <div class="d-flex align-items-center gap-4">

                        <ul class="d-flex gap-4 align-items-center px-0 p-1 m-0">
                            <!-- Dropdown (Landing Page) -->
                            <li class="nav-item profile_menu">
                                <a class="nav-link crypto-has-dropdown fw-medium" href="{{ route('home') }}" >
                                    Home
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg"  x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"></path>
                                    </svg> -->
                                </a>
                                <!-- <ul class="profile_menu dropdown-menu dropdown-menu-shows">
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-between align-content-center" href="template-1.html">
                                            Template 1
                                            <span class="verified alert align-items-center d-flex mb-0">
                                                NEW
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-between align-content-center" href="template-2.html">
                                            Template 2
                                            <span class="verified alert align-items-center d-flex mb-0">
                                                NEW
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-between align-content-center" href="template-3.html">
                                            Template 3
                                            <span class="verified alert align-items-center d-flex mb-0">
                                                NEW
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-between align-content-center" href="template-4.html">
                                            Template 4
                                            <span class="verified alert align-items-center d-flex mb-0">
                                                NEW
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-between align-content-center" href="template-5.html">
                                            Template 5
                                            <span class="verified alert align-items-center d-flex mb-0">
                                                NEW
                                            </span>
                                        </a>
                                    </li>
                                    <li><a class="dropdown-item" href="template-6.html">Template 6</a></li>
                                    <li><a class="dropdown-item" href="template-7.html">Template 7</a></li>
                                    <li><a class="dropdown-item" href="template-8.html">Template 8</a></li>
                                    <li><a class="dropdown-item" href="template-9.html">Template 9</a></li>
                                    <li><a class="dropdown-item" href="template-10.html">Template 10</a></li>
                                </ul> -->
                            </li>

                            <!-- Dropdown (Exchange) -->
                            <li class="nav-item profile_menu">
                                <a class="nav-link crypto-has-dropdown fw-medium" href="#trading" >
                                Trade
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg"  x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"></path>
                                    </svg> -->
                                </a>
                                <!-- <ul class="profile_menu dropdown-menu dropdown-menu-shows">
                                    <li><a class="dropdown-item" href="exchange-1.html">Exchange 1</a></li>
                                    <li><a class="dropdown-item" href="exchange-2.html">Exchange 2</a></li>
                                    <li><a class="dropdown-item" href="exchange-3.html">Exchange 3</a></li>
                                    <li><a class="dropdown-item" href="exchange-4.html">Exchange 4</a></li>
                                    <li><a class="dropdown-item" href="exchange-5.html">Exchange 5</a></li>
                                </ul> -->
                            </li>

                            <!-- Dropdown (Markets) -->
                            <li class="nav-item profile_menu">
                                <a class="nav-link crypto-has-dropdown fw-medium" href="#services" >
                                Services
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg"  x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"></path>
                                    </svg> -->
                                </a>
                                <!-- <ul class="profile_menu dropdown-menu dropdown-menu-shows">
                                    <li><a class="dropdown-item" href="market.html">All Market</a></li>
                                    <li><a class="dropdown-item" href="price.html">Coin Overview</a></li>
                                    <li><a class="dropdown-item" href="highlights.html">Crypto Highlights</a></li>
                                    <li><a class="dropdown-item" href="marketcap.html">Market Cap</a></li>
                                    <li><a class="dropdown-item" href="symbols.html">Symbols</a></li>
                                </ul> -->
                            </li>

                            <!-- Dropdown (Blog) -->
                            <li class="nav-item profile_menu">
                                <a class="nav-link crypto-has-dropdown fw-medium" href="#Faqs" >
                                    FAQs
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg"  x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"></path>
                                    </svg> -->
                                </a>
                                
                            </li>
                        </ul>

                        <div class="flex">
                            <a class="btn btn-editor btn-primary circle" href="{{ route('register') }}" >Register</a>
                        </div>

                    </div>
                </div>

                <!-- Navigation menu / Button -->
                <div class="col-auto d-flex flex-row align-items-center">
                    <div class="user-settings gap-2 gap-sm-3">

             
                        <!-- Hamburger Menu -->
                        <div id="mobile_menu" class="close">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M4 12H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M4 6H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </header>
        <!-- Offcanvas Navbar -->
        <nav class="navbar py-0 navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar">

                    <!-- header -->
                    <div class="offcanvas-header card-line">

                        <div class="d-flex align-items-center gap-3 crypt-grayscale-100 text-uppercase mb-0 fw-bold">
                            <div class="controller update text-bg-info">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                                    <style>@keyframes loader5{0%{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}</style>
                                    <g style="animation:loader5 1.5s linear infinite both;transform-origin:center center">
                                        <circle cx="12" cy="12" r="4" stroke="#0A0A30" stroke-width="1.5"/>
                                        <circle cx="17" cy="7" r="1" fill="#265BFF"/>
                                    </g>
                                </svg>
                            </div>
                            Crypt 2.0
                        </div>

                        <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="offcanvas" aria-label="Close">
                            <svg class="close-notify" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>

                    </div>

                    <!-- main menu -->
                    <div class="offcanvas-body">

                        <!-- Search -->
                        <form class="d-flex" role="search">
                            <input type="text" class="search search-input form-control form-control-lg text-sm" placeholder="Search coin">
                        </form>

                        <!-- Menu -->
                        <ul class="navbar-nav justify-content-end flex-grow-1 gap-2 mt-3 pb-3">

                            <!-- Dropdown (Landing Page) -->
                            <li class="nav-item dropdown crypto-has-dropdown">
                                <a class="nav-link" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Landing Page
                                    <svg class="fright mt-1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark g-2">
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-between align-content-center" href="template-1.html">
                                            Template 1
                                            <span class="verified alert align-items-center d-flex mb-0">
                                                NEW
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-between align-content-center" href="template-2.html">
                                            Template 2
                                            <span class="verified alert align-items-center d-flex mb-0">
                                                NEW
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-between align-content-center" href="template-3.html">
                                            Template 3
                                            <span class="verified alert align-items-center d-flex mb-0">
                                                NEW
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-between align-content-center" href="template-4.html">
                                            Template 4
                                            <span class="verified alert align-items-center d-flex mb-0">
                                                NEW
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex justify-content-between align-content-center" href="template-5.html">
                                            Template 5
                                            <span class="verified alert align-items-center d-flex mb-0">
                                                NEW
                                            </span>
                                        </a>
                                    </li>
                                    <li><a class="dropdown-item" href="template-6.html">Template 6</a></li>
                                    <li><a class="dropdown-item" href="template-7.html">Template 7</a></li>
                                    <li><a class="dropdown-item" href="template-8.html">Template 8</a></li>
                                    <li><a class="dropdown-item" href="template-9.html">Template 9</a></li>
                                    <li><a class="dropdown-item" href="template-10.html">Template 10</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown (Exchange) -->
                            <li class="nav-item dropdown crypto-has-dropdown">
                                <a class="nav-link" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Exchange
                                    <svg class="fright mt-1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="exchange-1.html">Exchange 1</a></li>
                                    <li><a class="dropdown-item" href="exchange-2.html">Exchange 2</a></li>
                                    <li><a class="dropdown-item" href="exchange-3.html">Exchange 3</a></li>
                                    <li><a class="dropdown-item" href="exchange-4.html">Exchange 4</a></li>
                                    <li><a class="dropdown-item" href="exchange-5.html">Exchange 5</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown (Markets) -->
                            <li class="nav-item dropdown crypto-has-dropdown">
                                <a class="nav-link" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Markets
                                    <svg class="fright mt-1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="market.html">All Market</a></li>
                                    <li><a class="dropdown-item" href="price.html">Coin Overview</a></li>
                                    <li><a class="dropdown-item" href="highlights.html">Crypto Highlights</a></li>
                                    <li><a class="dropdown-item" href="marketcap.html">Market Cap</a></li>
                                    <li><a class="dropdown-item" href="symbols.html">Symbols</a></li>
                                </ul>
                            </li>

                            <!-- Dropdown (Blog) -->
                            <li class="nav-item dropdown crypto-has-dropdown">
                                <a class="nav-link" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Blog
                                    <svg class="fright mt-1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m20.5 11.5-6 6-6-6"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="nav-link" href="blog.html">Blog Classic</a></li>
                                    <li><a class="nav-link" href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>

                        </ul>

                        <!-- Dropdown (Assets) -->
                        <div class="dropdown-menu-dark card-bs gd-bg p-2 pb-2">
                            <div class="d-flex flex-column card-bs-tabs p-2 mb-3">
                                <div class="d-flex gap-1">
                                    <p class="text-sm fw-bold crypt-grayscale-600 mb-0">Total Assets</p>
                                </div>
                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <div class="flex">
                                        <h4 class="fw-bold mb-0 encrypted">4.55</h4>
                                    </div>
                                    <div class="flex">
                                        <select class="form-select text-bg-bs2 crypt-grayscale-600">
                                            <option selected>BTC</option>
                                            <option value="1">ETH</option>
                                            <option value="2">BNB</option>
                                            <option value="3">USDT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex">
                                    <h6 class="text-sm crypt-grayscale-600 encrypted">≈ $99,738.50 USDT</h6>
                                </div>
                            </div>
                            <!-- Menu Item -->
                            <ul class="d-flex flex-column profile_menu gap-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="my-dashboard.html">
                                        <svg class="me-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M18.6699 2H16.7699C14.5899 2 13.4399 3.15 13.4399 5.33V7.23C13.4399 9.41 14.5899 10.56 16.7699 10.56H18.6699C20.8499 10.56 21.9999 9.41 21.9999 7.23V5.33C21.9999 3.15 20.8499 2 18.6699 2Z" fill="currentColor"/>
                                            <path opacity="0.4" d="M7.24 13.4301H5.34C3.15 13.4301 2 14.5801 2 16.7601V18.6601C2 20.8501 3.15 22.0001 5.33 22.0001H7.23C9.41 22.0001 10.56 20.8501 10.56 18.6701V16.7701C10.57 14.5801 9.42 13.4301 7.24 13.4301Z" fill="currentColor"/>
                                            <path d="M6.29 10.58C8.6593 10.58 10.58 8.6593 10.58 6.29C10.58 3.9207 8.6593 2 6.29 2C3.9207 2 2 3.9207 2 6.29C2 8.6593 3.9207 10.58 6.29 10.58Z" fill="currentColor"/>
                                            <path d="M17.7099 22C20.0792 22 21.9999 20.0793 21.9999 17.71C21.9999 15.3407 20.0792 13.42 17.7099 13.42C15.3406 13.42 13.4199 15.3407 13.4199 17.71C13.4199 20.0793 15.3406 22 17.7099 22Z" fill="currentColor"/>
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="marketplace.html"> 
                                        <svg class="me-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.9597 17.84L19.3297 18.39C18.8797 18.54 18.5197 18.89 18.3697 19.35L17.8197 20.98C17.3497 22.39 15.3697 22.36 14.9297 20.95L13.0797 15C12.7197 13.82 13.8097 12.72 14.9797 13.09L20.9397 14.94C22.3397 15.38 22.3597 17.37 20.9597 17.84Z" fill="currentColor"/>
                                            <path opacity="0.4" d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" fill="currentColor"/>
                                        </svg>
                                        Marketplace
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="my-asset.html"> 
                                        <svg class="me-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.0602 11.8201L20.9002 11.6001C20.6202 11.2601 20.2902 10.9901 19.9102 10.7901C19.4002 10.5001 18.8202 10.3501 18.2202 10.3501H5.7702C5.1702 10.3501 4.6002 10.5001 4.0802 10.7901C3.6902 11.0001 3.3402 11.2901 3.0502 11.6501C2.4802 12.3801 2.2102 13.2801 2.3002 14.1801L2.6702 18.8501C2.8002 20.2601 2.9702 22.0001 6.1402 22.0001H17.8602C21.0302 22.0001 21.1902 20.2601 21.3302 18.8401L21.7002 14.1901C21.7902 13.3501 21.5702 12.5101 21.0602 11.8201ZM14.3902 17.3401H9.6002C9.2102 17.3401 8.9002 17.0201 8.9002 16.6401C8.9002 16.2601 9.2102 15.9401 9.6002 15.9401H14.3902C14.7802 15.9401 15.0902 16.2601 15.0902 16.6401C15.0902 17.0301 14.7802 17.3401 14.3902 17.3401Z" fill="currentColor"/>
                                            <path opacity="0.4" d="M3.37988 11.31C3.59988 11.11 3.81988 10.93 4.07988 10.79C4.58988 10.5 5.16988 10.35 5.76988 10.35H18.2299C18.8299 10.35 19.3999 10.5 19.9199 10.79C20.1799 10.93 20.4099 11.11 20.6199 11.32V10.79V9.82C20.6199 6.25 19.5299 5.16 15.9599 5.16H13.5799C13.1399 5.16 13.1299 5.15 12.8699 4.81L11.6699 3.2C11.0999 2.46 10.6499 2 9.21988 2H8.03988C4.46988 2 3.37988 3.09 3.37988 6.66V10.8V11.31Z" fill="currentColor"/>
                                        </svg>
                                        My Asset
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="order-history.html"> 
                                        <svg class="me-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M6.73049 19.7C7.55049 18.82 8.80049 18.89 9.52049 19.85L10.5305 21.2C11.3405 22.27 12.6505 22.27 13.4605 21.2L14.4705 19.85C15.1905 18.89 16.4405 18.82 17.2605 19.7C19.0405 21.6 20.4905 20.97 20.4905 18.31V7.04C20.5005 3.01 19.5605 2 15.7805 2H8.22049C4.44049 2 3.50049 3.01 3.50049 7.04V18.3C3.50049 20.97 4.96049 21.59 6.73049 19.7Z" fill="currentColor"></path>
                                            <path d="M16.2305 11.75H10.7305C10.3205 11.75 9.98047 11.41 9.98047 11C9.98047 10.59 10.3205 10.25 10.7305 10.25H16.2305C16.6405 10.25 16.9805 10.59 16.9805 11C16.9805 11.41 16.6405 11.75 16.2305 11.75Z" fill="currentColor"></path>
                                            <path d="M16.2305 7.75H10.7305C10.3205 7.75 9.98047 7.41 9.98047 7C9.98047 6.59 10.3205 6.25 10.7305 6.25H16.2305C16.6405 6.25 16.9805 6.59 16.9805 7C16.9805 7.41 16.6405 7.75 16.2305 7.75Z" fill="currentColor"></path>
                                            <path d="M7.78027 8C7.23027 8 6.78027 7.55 6.78027 7C6.78027 6.45 7.23027 6 7.78027 6C8.33027 6 8.78027 6.45 8.78027 7C8.78027 7.55 8.33027 8 7.78027 8Z" fill="currentColor"></path>
                                            <path d="M7.78027 12C7.23027 12 6.78027 11.55 6.78027 11C6.78027 10.45 7.23027 10 7.78027 10C8.33027 10 8.78027 10.45 8.78027 11C8.78027 11.55 8.33027 12 7.78027 12Z" fill="currentColor"></path>
                                        </svg>
                                        Order History
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="exchange.html"> 
                                        <svg class="me-1" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 15.5C15 19.09 12.09 22 8.5 22C4.91 22 2 19.09 2 15.5C2 11.91 4.91 9 8.5 9C8.67 9 8.84999 9.01 9.01999 9.02C12.19 9.27 14.73 11.81 14.98 14.98C14.99 15.15 15 15.33 15 15.5Z" fill="currentColor"></path>
                                            <path opacity="0.4" d="M22 8.5C22 12.09 19.09 15 15.5 15C15.33 15 15.15 14.99 14.98 14.98C14.73 11.81 12.19 9.27 9.01999 9.02C9.00999 8.85 9 8.67 9 8.5C9 4.91 11.91 2 15.5 2C19.09 2 22 4.91 22 8.5Z" fill="currentColor"></path>
                                            <path d="M5.59 2H3C2.45 2 2 2.45 2 3V5.59C2 6.48 3.07999 6.93 3.70999 6.3L6.29999 3.71001C6.91999 3.08001 6.48 2 5.59 2Z" fill="currentColor"></path>
                                            <path d="M18.41 22H21C21.55 22 22 21.55 22 21V18.41C22 17.52 20.92 17.07 20.29 17.7L17.7 20.29C17.08 20.92 17.52 22 18.41 22Z" fill="currentColor"></path>
                                        </svg>
                                        Exchange
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Call to Action -->
                        <span class="d-grid">
                            <a class="btn btn-editor btn-primary" href="#!" data-bs-toggle="modal" data-bs-target="#buyCrypto">Add Funds</a>
                        </span>
                        <!-- Carousel Slider -->
                        <div id="RewardCarousel" class="carousel slide card-bs mt-4" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#RewardCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label=""></button>
                                <button type="button" data-bs-target="#RewardCarousel" data-bs-slide-to="1" aria-label=""></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="col-12 p-3 reward-bg2 pb-5">
                                        <h4 class="fw-medium text-white mb-1">Invite Friends for Rewards</h4>
                                        <p class="text-white mb-3">Invite friends and get 20% commissions.</p>
                                        <a class="btn btn-editor btn-info mt-2" href="#!" data-bs-toggle="modal" data-bs-target="#RewardCrypto">Invite friends</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-12 p-3 reward-bg3 pb-5">
                                        <h4 class="fw-medium text-white text-white mb-1">Crypt Affiliate Programs</h4>
                                        <p class="text-white mb-3">Apply and earn up to 60% commission!</p>
                                        <a class="btn btn-editor btn-success mt-2" href="#!" data-bs-toggle="modal" data-bs-target="#RewardCrypto">Apply now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>

    <!-- Main Content -->
    <div class="container-fluid hero-wrapper align-items-center animation-element">
        {{ $slot }}
    </div>

    <!-- Control Panel -->
   

    <!-- Footer -->
    <footer class="container-fluid text-left text-lg-start crypt-footer mt-5 animation-element">
        <div class="container mt-5 in-view">
            <div class="row mt-5 pt-3">
                <div class="col-12 col-sm-12 col-lg-12 pb-5 text-center">
                    <!-- Content -->
                    <div class="mb-4">
                        <!-- Logo -->
                        <div class="crypt-logo dark">
                            <a href="template-1.html">
                                <img src="images/logo-dark.svg" alt="">
                            </a>
                        </div>
                        <div class="crypt-logo light">
                            <a href="template-1.html">
                                <!-- <img src="images/logo.svg" alt=""> -->
                            </a>
                        </div>
                        <p class="card-text mt-2">Cryptocurrency Will Make You Feel Better.<br>- It's Like Heaven!</p>
                    </div>
                    <div class=" mt-4">
                        <a href="#" rel="nofollow" target="_blank">
                            <img src="images/social/x.svg" alt="" width="24">
                        </a>
                        <a href="#" rel="nofollow" target="_blank">
                            <img src="images/social/facebook.svg" alt="" width="24">
                        </a>
                        <a href="#" rel="nofollow" target="_blank">
                            <img src="images/social/instagram.svg" alt=""  width="24">
                        </a>
                        <a href="#" rel="nofollow" target="_blank">
                            <img src="images/social/tiktok.svg"  alt="" width="24">
                        </a>
                    </div>
                </div>
             
            </div>
            <!-- Copyright -->
            <div class="text-center p-4 mt-4 crypt-footer-copyright">
                Copyright © 2025 - Made by UBAID KHAN
            </div>
        </div>
    
    </footer>

    <!-- Main Content End -->

    <script src="{{ asset('ajax/libs/jquery/3.7.1/jquery.min.js') }}"></script>
    <script src="{{ asset('ajax/libs/popper.js/2.11.8/umd/popper.min.js') }}"></script>
    <script src="{{ asset('js/particle-canvas.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/main.js') }} "></script>

<script>
document.getElementById("pass_form").addEventListener("submit", function(e) {
    e.preventDefault();

    let form = this;
    let formData = new FormData(form);

    fetch(form.action, {
        method: "POST",
        headers: { "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value },
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        let res = data[0];
        if (res.res === "success") {
            // Fill modal data
            document.getElementById("modalUserName").innerText = res.user_name;
            document.getElementById("modalRefCode").innerText = res.refcode;
            document.getElementById("modalPassword").innerText = res.password;

            // Show modal
            let myModal = new bootstrap.Modal(document.getElementById('registerSuccessModal'));
            myModal.show();

            // Reset form
            form.reset();
        } else {
            alert(res.msg);
        }
    })
    .catch(err => console.error(err));
});
</script>
<script>
   $('#referral_code').on('keyup', function () {
        let code = $(this).val().trim();

        if (code.length < 3) {
            $('#referral_status').html('');
            return;
        }

        $.ajax({
            url: '/website-check-referral',
            type: 'GET',
            data: { code: code },
            success: function (data) {
                if (data.success) {
                    $('#referral_status').html(
                        `<strong class="text-success">✔ Verified: ${data.name}</strong>`
                    );
                } else {
                    $('#referral_status').html(
                        `<strong class="text-danger">✖ Not Found</strong>`
                    );
                }
            }
        });
   });
</script>
</body>

</html>