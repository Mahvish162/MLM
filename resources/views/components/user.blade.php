<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from crypt.tophivetheme.com/demo/my-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Aug 2025 10:07:25 GMT -->
<head class="crypt-dark">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>DeltaBiz</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('css/button.css') }}">
  <link rel="stylesheet" href="{{ asset('releases/8.13.0/css/anychart-ui.minb094.css?hcode=a0c21fc77e1449cc86299c5faa067dc4') }}">
  <link rel="icon" type="image/svg" href="{{ asset('images/DELTABIZ-LOGO3.png') }}">
  <style>
    .crypt-logo img{
    width: 111px;
    height: 20px !important;
    left: 12px;
    top: 20px;
    }
    .arrow-icon {
    border: solid currentColor;
    border-width: 0 2px 2px 0;
    display: inline-block;
    padding: 3px;
    transform: rotate(45deg); /* down */
    transition: transform 0.3s ease;
}

.sidebar-link[aria-expanded="true"] .arrow-icon {
    transform: rotate(-135deg); /* up */
}

  </style>
</head>

<body class="crypt-dark">
  <section class="container-fluid d-sm-flex flex-row fixed-sidebar">

    <!-- Sidebar -->
    <aside class="sidebar">
        <!-- Brand Logo -->
        <div class="d-flex align-items-center justify-content-between">
            <div class="justify-content-between disable-sm-screen mt-3">
                <!-- Logo -->
                <div class="crypt-logo dark">
                    <a href="/dashboad">
                        <img src="{{ asset('images/DELTABIZ.png') }}" alt="">
                    </a>
                </div>
                <div class="crypt-logo light">
                    <a href="/dashboard">
                        <img src="{{ asset('images/DELTABIZ.png') }}" alt="">
                    </a>
                </div>
                <!-- Logo sm -->
                <div class="crypt-logo logo-sm dark">
                    <a href="template-1.html">
                        <img src="{{ asset('images/DELTABIZ.png') }}" alt="">
                    </a>
                </div>
                <div class="crypt-logo logo-sm light">
                    <a href="#">
                        <img src="{{ asset('images/DELTABIZ.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- Menu -->
        <div class="side-wrapper">
            <div class="side-title"></div>
            <div class="side-menu mt-2">
                <a class="sidebar-link is-active" href="{{ route('dashboard') }}" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Dashboard">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M18.6699 2H16.7699C14.5899 2 13.4399 3.15 13.4399 5.33V7.23C13.4399 9.41 14.5899 10.56 16.7699 10.56H18.6699C20.8499 10.56 21.9999 9.41 21.9999 7.23V5.33C21.9999 3.15 20.8499 2 18.6699 2Z" fill="currentColor"/>
                        <path opacity="0.4" d="M7.24 13.4301H5.34C3.15 13.4301 2 14.5801 2 16.7601V18.6601C2 20.8501 3.15 22.0001 5.33 22.0001H7.23C9.41 22.0001 10.56 20.8501 10.56 18.6701V16.7701C10.57 14.5801 9.42 13.4301 7.24 13.4301Z" fill="currentColor"/>
                        <path d="M6.29 10.58C8.6593 10.58 10.58 8.6593 10.58 6.29C10.58 3.9207 8.6593 2 6.29 2C3.9207 2 2 3.9207 2 6.29C2 8.6593 3.9207 10.58 6.29 10.58Z" fill="currentColor"/>
                        <path d="M17.7099 22C20.0792 22 21.9999 20.0793 21.9999 17.71C21.9999 15.3407 20.0792 13.42 17.7099 13.42C15.3406 13.42 13.4199 15.3407 13.4199 17.71C13.4199 20.0793 15.3406 22 17.7099 22Z" fill="currentColor"/>
                    </svg>
                    <span> Dashboard </span>
                </a>
                <a class="sidebar-link" href="{{ route('plans') }}" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Marketplace">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.9597 17.84L19.3297 18.39C18.8797 18.54 18.5197 18.89 18.3697 19.35L17.8197 20.98C17.3497 22.39 15.3697 22.36 14.9297 20.95L13.0797 15C12.7197 13.82 13.8097 12.72 14.9797 13.09L20.9397 14.94C22.3397 15.38 22.3597 17.37 20.9597 17.84Z" fill="currentColor"/>
                        <path opacity="0.4" d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" fill="currentColor"/>
                    </svg>
                    <span> Profile </span>
                </a>
                <a class="sidebar-link" href="exchange.html" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Exchange">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 15.5C15 19.09 12.09 22 8.5 22C4.91 22 2 19.09 2 15.5C2 11.91 4.91 9 8.5 9C8.67 9 8.84999 9.01 9.01999 9.02C12.19 9.27 14.73 11.81 14.98 14.98C14.99 15.15 15 15.33 15 15.5Z" fill="currentColor"></path>
                        <path opacity="0.4" d="M22 8.5C22 12.09 19.09 15 15.5 15C15.33 15 15.15 14.99 14.98 14.98C14.73 11.81 12.19 9.27 9.01999 9.02C9.00999 8.85 9 8.67 9 8.5C9 4.91 11.91 2 15.5 2C19.09 2 22 4.91 22 8.5Z" fill="currentColor"></path>
                        <path d="M5.59 2H3C2.45 2 2 2.45 2 3V5.59C2 6.48 3.07999 6.93 3.70999 6.3L6.29999 3.71001C6.91999 3.08001 6.48 2 5.59 2Z" fill="currentColor"></path>
                        <path d="M18.41 22H21C21.55 22 22 21.55 22 21V18.41C22 17.52 20.92 17.07 20.29 17.7L17.7 20.29C17.08 20.92 17.52 22 18.41 22Z" fill="currentColor"></path>
                    </svg>
                    <span> My Network </span>
                </a>
                <a class="sidebar-link trending" href="{{ route('plans') }}" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="My Asset">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0602 11.8201L20.9002 11.6001C20.6202 11.2601 20.2902 10.9901 19.9102 10.7901C19.4002 10.5001 18.8202 10.3501 18.2202 10.3501H5.7702C5.1702 10.3501 4.6002 10.5001 4.0802 10.7901C3.6902 11.0001 3.3402 11.2901 3.0502 11.6501C2.4802 12.3801 2.2102 13.2801 2.3002 14.1801L2.6702 18.8501C2.8002 20.2601 2.9702 22.0001 6.1402 22.0001H17.8602C21.0302 22.0001 21.1902 20.2601 21.3302 18.8401L21.7002 14.1901C21.7902 13.3501 21.5702 12.5101 21.0602 11.8201ZM14.3902 17.3401H9.6002C9.2102 17.3401 8.9002 17.0201 8.9002 16.6401C8.9002 16.2601 9.2102 15.9401 9.6002 15.9401H14.3902C14.7802 15.9401 15.0902 16.2601 15.0902 16.6401C15.0902 17.0301 14.7802 17.3401 14.3902 17.3401Z" fill="currentColor"/>
                        <path opacity="0.4" d="M3.37988 11.31C3.59988 11.11 3.81988 10.93 4.07988 10.79C4.58988 10.5 5.16988 10.35 5.76988 10.35H18.2299C18.8299 10.35 19.3999 10.5 19.9199 10.79C20.1799 10.93 20.4099 11.11 20.6199 11.32V10.79V9.82C20.6199 6.25 19.5299 5.16 15.9599 5.16H13.5799C13.1399 5.16 13.1299 5.15 12.8699 4.81L11.6699 3.2C11.0999 2.46 10.6499 2 9.21988 2H8.03988C4.46988 2 3.37988 3.09 3.37988 6.66V10.8V11.31Z" fill="currentColor"/>
                    </svg>
                    <span> Activation </span>
                </a>
                <a class="sidebar-link trending" href="my-asset.html" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="My Asset">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0602 11.8201L20.9002 11.6001C20.6202 11.2601 20.2902 10.9901 19.9102 10.7901C19.4002 10.5001 18.8202 10.3501 18.2202 10.3501H5.7702C5.1702 10.3501 4.6002 10.5001 4.0802 10.7901C3.6902 11.0001 3.3402 11.2901 3.0502 11.6501C2.4802 12.3801 2.2102 13.2801 2.3002 14.1801L2.6702 18.8501C2.8002 20.2601 2.9702 22.0001 6.1402 22.0001H17.8602C21.0302 22.0001 21.1902 20.2601 21.3302 18.8401L21.7002 14.1901C21.7902 13.3501 21.5702 12.5101 21.0602 11.8201ZM14.3902 17.3401H9.6002C9.2102 17.3401 8.9002 17.0201 8.9002 16.6401C8.9002 16.2601 9.2102 15.9401 9.6002 15.9401H14.3902C14.7802 15.9401 15.0902 16.2601 15.0902 16.6401C15.0902 17.0301 14.7802 17.3401 14.3902 17.3401Z" fill="currentColor"/>
                        <path opacity="0.4" d="M3.37988 11.31C3.59988 11.11 3.81988 10.93 4.07988 10.79C4.58988 10.5 5.16988 10.35 5.76988 10.35H18.2299C18.8299 10.35 19.3999 10.5 19.9199 10.79C20.1799 10.93 20.4099 11.11 20.6199 11.32V10.79V9.82C20.6199 6.25 19.5299 5.16 15.9599 5.16H13.5799C13.1399 5.16 13.1299 5.15 12.8699 4.81L11.6699 3.2C11.0999 2.46 10.6499 2 9.21988 2H8.03988C4.46988 2 3.37988 3.09 3.37988 6.66V10.8V11.31Z" fill="currentColor"/>
                    </svg>
                    <span> Fund Management </span>
                </a>
                <ul class="nav-item list-group mt-4">
                    <a class="sidebar-link trending collapsed mb-4 d-flex justify-content-between align-items-center" 
                    href="#earningMenu" 
                    data-bs-toggle="collapse" 
                    role="button" 
                    aria-expanded="false" 
                    aria-controls="earningMenu">
                        
                        <div class="d-flex align-items-center">
                            <!-- your existing SVG -->
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.0602 11.8201L20.9002 11.6001C20.6202 11.2601 20.2902 10.9901 19.9102 10.7901C19.4002 10.5001 18.8202 10.3501 18.2202 10.3501H5.7702C5.1702 10.3501 4.6002 10.5001 4.0802 10.7901C3.6902 11.0001 3.3402 11.2901 3.0502 11.6501C2.4802 12.3801 2.2102 13.2801 2.3002 14.1801L2.6702 18.8501C2.8002 20.2601 2.9702 22.0001 6.1402 22.0001H17.8602C21.0302 22.0001 21.1902 20.2601 21.3302 18.8401L21.7002 14.1901C21.7902 13.3501 21.5702 12.5101 21.0602 11.8201ZM14.3902 17.3401H9.6002C9.2102 17.3401 8.9002 17.0201 8.9002 16.6401C8.9002 16.2601 9.2102 15.9401 9.6002 15.9401H14.3902C14.7802 15.9401 15.0902 16.2601 15.0902 16.6401C15.0902 17.0301 14.7802 17.3401 14.3902 17.3401Z" fill="currentColor"/>
                                <path opacity="0.4" d="M3.37988 11.31C3.59988 11.11 3.81988 10.93 4.07988 10.79C4.58988 10.5 5.16988 10.35 5.76988 10.35H18.2299C18.8299 10.35 19.3999 10.5 19.9199 10.79C20.1799 10.93 20.4099 11.11 20.6199 11.32V10.79V9.82C20.6199 6.25 19.5299 5.16 15.9599 5.16H13.5799C13.1399 5.16 13.1299 5.15 12.8699 4.81L11.6699 3.2C11.0999 2.46 10.6499 2 9.21988 2H8.03988C4.46988 2 3.37988 3.09 3.37988 6.66V10.8V11.31Z" fill="currentColor"/>
                            </svg>
                            <span class="ms-2">Earning</span>
                        </div>

                        <!-- arrow icon -->
                        <i class="arrow-icon ms-2"></i>
                    </a>

                    <div class="collapse" id="earningMenu">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{ route('direct-referral') }}" class="nav-link">Referral Bonus</a></li>
                            <li><a href="{{ route('daily-staking-bonus') }}" class="nav-link">Daily Staking Bonus</a></li>
                            <li><a href="{{ route('level-bonus') }}" class="nav-link">Daily Team Staking Bonus</a></li>
                            <li><a href="rank-reward.html" class="nav-link">Rank Reward</a></li>
                        </ul>
                    </div>
                </ul>

                <!-- </li> -->
   
                 <a class="sidebar-link trending" href="my-asset.html" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="My Asset">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0602 11.8201L20.9002 11.6001C20.6202 11.2601 20.2902 10.9901 19.9102 10.7901C19.4002 10.5001 18.8202 10.3501 18.2202 10.3501H5.7702C5.1702 10.3501 4.6002 10.5001 4.0802 10.7901C3.6902 11.0001 3.3402 11.2901 3.0502 11.6501C2.4802 12.3801 2.2102 13.2801 2.3002 14.1801L2.6702 18.8501C2.8002 20.2601 2.9702 22.0001 6.1402 22.0001H17.8602C21.0302 22.0001 21.1902 20.2601 21.3302 18.8401L21.7002 14.1901C21.7902 13.3501 21.5702 12.5101 21.0602 11.8201ZM14.3902 17.3401H9.6002C9.2102 17.3401 8.9002 17.0201 8.9002 16.6401C8.9002 16.2601 9.2102 15.9401 9.6002 15.9401H14.3902C14.7802 15.9401 15.0902 16.2601 15.0902 16.6401C15.0902 17.0301 14.7802 17.3401 14.3902 17.3401Z" fill="currentColor"/>
                        <path opacity="0.4" d="M3.37988 11.31C3.59988 11.11 3.81988 10.93 4.07988 10.79C4.58988 10.5 5.16988 10.35 5.76988 10.35H18.2299C18.8299 10.35 19.3999 10.5 19.9199 10.79C20.1799 10.93 20.4099 11.11 20.6199 11.32V10.79V9.82C20.6199 6.25 19.5299 5.16 15.9599 5.16H13.5799C13.1399 5.16 13.1299 5.15 12.8699 4.81L11.6699 3.2C11.0999 2.46 10.6499 2 9.21988 2H8.03988C4.46988 2 3.37988 3.09 3.37988 6.66V10.8V11.31Z" fill="currentColor"/>
                    </svg>
                    <span> Withdrawal </span>
                </a>    
                 <a class="sidebar-link trending" href="my-asset.html" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="My Asset">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0602 11.8201L20.9002 11.6001C20.6202 11.2601 20.2902 10.9901 19.9102 10.7901C19.4002 10.5001 18.8202 10.3501 18.2202 10.3501H5.7702C5.1702 10.3501 4.6002 10.5001 4.0802 10.7901C3.6902 11.0001 3.3402 11.2901 3.0502 11.6501C2.4802 12.3801 2.2102 13.2801 2.3002 14.1801L2.6702 18.8501C2.8002 20.2601 2.9702 22.0001 6.1402 22.0001H17.8602C21.0302 22.0001 21.1902 20.2601 21.3302 18.8401L21.7002 14.1901C21.7902 13.3501 21.5702 12.5101 21.0602 11.8201ZM14.3902 17.3401H9.6002C9.2102 17.3401 8.9002 17.0201 8.9002 16.6401C8.9002 16.2601 9.2102 15.9401 9.6002 15.9401H14.3902C14.7802 15.9401 15.0902 16.2601 15.0902 16.6401C15.0902 17.0301 14.7802 17.3401 14.3902 17.3401Z" fill="currentColor"/>
                        <path opacity="0.4" d="M3.37988 11.31C3.59988 11.11 3.81988 10.93 4.07988 10.79C4.58988 10.5 5.16988 10.35 5.76988 10.35H18.2299C18.8299 10.35 19.3999 10.5 19.9199 10.79C20.1799 10.93 20.4099 11.11 20.6199 11.32V10.79V9.82C20.6199 6.25 19.5299 5.16 15.9599 5.16H13.5799C13.1399 5.16 13.1299 5.15 12.8699 4.81L11.6699 3.2C11.0999 2.46 10.6499 2 9.21988 2H8.03988C4.46988 2 3.37988 3.09 3.37988 6.66V10.8V11.31Z" fill="currentColor"/>
                    </svg>
                    <span> Support </span>
                </a>                                            
                <a class="sidebar-link" href="{{ route('logout') }}" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Order History">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M6.73049 19.7C7.55049 18.82 8.80049 18.89 9.52049 19.85L10.5305 21.2C11.3405 22.27 12.6505 22.27 13.4605 21.2L14.4705 19.85C15.1905 18.89 16.4405 18.82 17.2605 19.7C19.0405 21.6 20.4905 20.97 20.4905 18.31V7.04C20.5005 3.01 19.5605 2 15.7805 2H8.22049C4.44049 2 3.50049 3.01 3.50049 7.04V18.3C3.50049 20.97 4.96049 21.59 6.73049 19.7Z" fill="currentColor"></path>
                        <path d="M16.2305 11.75H10.7305C10.3205 11.75 9.98047 11.41 9.98047 11C9.98047 10.59 10.3205 10.25 10.7305 10.25H16.2305C16.6405 10.25 16.9805 10.59 16.9805 11C16.9805 11.41 16.6405 11.75 16.2305 11.75Z" fill="currentColor"></path>
                        <path d="M16.2305 7.75H10.7305C10.3205 7.75 9.98047 7.41 9.98047 7C9.98047 6.59 10.3205 6.25 10.7305 6.25H16.2305C16.6405 6.25 16.9805 6.59 16.9805 7C16.9805 7.41 16.6405 7.75 16.2305 7.75Z" fill="currentColor"></path>
                        <path d="M7.78027 8C7.23027 8 6.78027 7.55 6.78027 7C6.78027 6.45 7.23027 6 7.78027 6C8.33027 6 8.78027 6.45 8.78027 7C8.78027 7.55 8.33027 8 7.78027 8Z" fill="currentColor"></path>
                        <path d="M7.78027 12C7.23027 12 6.78027 11.55 6.78027 11C6.78027 10.45 7.23027 10 7.78027 10C8.33027 10 8.78027 10.45 8.78027 11C8.78027 11.55 8.33027 12 7.78027 12Z" fill="currentColor"></path>
                    </svg>
                    <span> Log Out </span>
                </a>
            </div>
        </div>
        <!-- Divider -->
        <!-- <div class="nav-divider div-transparent mb-2 mt-2"></div> -->
        <!-- Menu 2 -->
        <!-- <div class="side-wrapper">
            <div class="side-title">Accounts</div>
            <div class="side-menu">
                <a class="sidebar-link" href="settings.html" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Settings">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M2 12.8801V11.1201C2 10.0801 2.85 9.22006 3.9 9.22006C5.71 9.22006 6.45 7.94006 5.54 6.37006C5.02 5.47006 5.33 4.30006 6.24 3.78006L7.97 2.79006C8.76 2.32006 9.78 2.60006 10.25 3.39006L10.36 3.58006C11.26 5.15006 12.74 5.15006 13.65 3.58006L13.76 3.39006C14.23 2.60006 15.25 2.32006 16.04 2.79006L17.77 3.78006C18.68 4.30006 18.99 5.47006 18.47 6.37006C17.56 7.94006 18.3 9.22006 20.11 9.22006C21.15 9.22006 22.01 10.0701 22.01 11.1201V12.8801C22.01 13.9201 21.16 14.7801 20.11 14.7801C18.3 14.7801 17.56 16.0601 18.47 17.6301C18.99 18.5401 18.68 19.7001 17.77 20.2201L16.04 21.2101C15.25 21.6801 14.23 21.4001 13.76 20.6101L13.65 20.4201C12.75 18.8501 11.27 18.8501 10.36 20.4201L10.25 20.6101C9.78 21.4001 8.76 21.6801 7.97 21.2101L6.24 20.2201C5.33 19.7001 5.02 18.5301 5.54 17.6301C6.45 16.0601 5.71 14.7801 3.9 14.7801C2.85 14.7801 2 13.9201 2 12.8801Z" fill="currentColor"/>
                        <path d="M12 15.25C13.7949 15.25 15.25 13.7949 15.25 12C15.25 10.2051 13.7949 8.75 12 8.75C10.2051 8.75 8.75 10.2051 8.75 12C8.75 13.7949 10.2051 15.25 12 15.25Z" fill="currentColor"/>
                    </svg>
                    <span> Settings </span>
                </a>
                <a class="sidebar-link" href="identification.html" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Identification">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 13C17.06 13 16.19 13.33 15.5 13.88C14.58 14.61 14 15.74 14 17C14 17.75 14.21 18.46 14.58 19.06C15.27 20.22 16.54 21 18 21C19.01 21 19.93 20.63 20.63 20C20.94 19.74 21.21 19.42 21.42 19.06C21.79 18.46 22 17.75 22 17C22 14.79 20.21 13 18 13ZM20.07 16.57L17.94 18.54C17.8 18.67 17.61 18.74 17.43 18.74C17.24 18.74 17.05 18.67 16.9 18.52L15.91 17.53C15.62 17.24 15.62 16.76 15.91 16.47C16.2 16.18 16.68 16.18 16.97 16.47L17.45 16.95L19.05 15.47C19.35 15.19 19.83 15.21 20.11 15.51C20.39 15.81 20.37 16.28 20.07 16.57Z" fill="currentColor"/>
                        <path opacity="0.4" d="M21.09 21.5C21.09 21.78 20.87 22 20.59 22H3.41003C3.13003 22 2.91003 21.78 2.91003 21.5C2.91003 17.36 6.99003 14 12 14C13.03 14 14.03 14.14 14.95 14.41C14.36 15.11 14 16.02 14 17C14 17.75 14.21 18.46 14.58 19.06C14.78 19.4 15.04 19.71 15.34 19.97C16.04 20.61 16.97 21 18 21C19.12 21 20.13 20.54 20.85 19.8C21.01 20.34 21.09 20.91 21.09 21.5Z" fill="currentColor"/>
                        <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" fill="currentColor"/>
                    </svg>
                    <span> Identification </span>
                </a>
                <a class="sidebar-link" href="security.html" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Security">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M20.91 11.12C20.91 16.01 17.36 20.59 12.51 21.93C12.18 22.02 11.82 22.02 11.49 21.93C6.63996 20.59 3.08997 16.01 3.08997 11.12V6.73006C3.08997 5.91006 3.70998 4.98007 4.47998 4.67007L10.05 2.39007C11.3 1.88007 12.71 1.88007 13.96 2.39007L19.53 4.67007C20.29 4.98007 20.92 5.91006 20.92 6.73006L20.91 11.12Z" fill="currentColor"/>
                        <path d="M14.5 10.5C14.5 9.12 13.38 8 12 8C10.62 8 9.5 9.12 9.5 10.5C9.5 11.62 10.24 12.55 11.25 12.87V15.5C11.25 15.91 11.59 16.25 12 16.25C12.41 16.25 12.75 15.91 12.75 15.5V12.87C13.76 12.55 14.5 11.62 14.5 10.5Z" fill="currentColor"/>
                    </svg>
                    <span> Security </span>
                </a>
                <a class="sidebar-link" href="export.html" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Export History">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M20.5 10.19H17.61C15.24 10.19 13.31 8.26 13.31 5.89V3C13.31 2.45 12.86 2 12.31 2H8.07C4.99 2 2.5 4 2.5 7.57V16.43C2.5 20 4.99 22 8.07 22H15.93C19.01 22 21.5 20 21.5 16.43V11.19C21.5 10.64 21.05 10.19 20.5 10.19Z" fill="currentColor"/>
                        <path d="M15.8 2.20999C15.39 1.79999 14.68 2.07999 14.68 2.64999V6.13999C14.68 7.59999 15.92 8.80999 17.43 8.80999C18.38 8.81999 19.7 8.81999 20.83 8.81999C21.4 8.81999 21.7 8.14999 21.3 7.74999C19.86 6.29999 17.28 3.68999 15.8 2.20999Z" fill="currentColor"/>
                        <path d="M12.28 14.72C11.99 14.43 11.51 14.43 11.22 14.72L10.5 15.44V11.25C10.5 10.84 10.16 10.5 9.75 10.5C9.34 10.5 9 10.84 9 11.25V15.44L8.28 14.72C7.99 14.43 7.51 14.43 7.22 14.72C6.93 15.01 6.93 15.49 7.22 15.78L9.22 17.78C9.23 17.79 9.24 17.79 9.24 17.8C9.3 17.86 9.38 17.91 9.46 17.95C9.56 17.98 9.65 18 9.75 18C9.85 18 9.94 17.98 10.03 17.94C10.12 17.9 10.2 17.85 10.28 17.78L12.28 15.78C12.57 15.49 12.57 15.01 12.28 14.72Z" fill="currentColor"/>
                    </svg>
                    <span> Export History </span>
                </a>
                <a class="sidebar-link" href="api.html" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="API Management">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 8H8V16H16V8Z" fill="currentColor"/>
                        <path opacity="0.4" d="M5 22C6.65 22 8 20.65 8 19V16H5C3.35 16 2 17.35 2 19C2 20.65 3.35 22 5 22Z" fill="currentColor"/>
                        <path opacity="0.4" d="M5 8H8V5C8 3.35 6.65 2 5 2C3.35 2 2 3.35 2 5C2 6.65 3.35 8 5 8Z" fill="currentColor"/>
                        <path opacity="0.4" d="M16 8H19C20.65 8 22 6.65 22 5C22 3.35 20.65 2 19 2C17.35 2 16 3.35 16 5V8Z" fill="currentColor"/>
                        <path opacity="0.4" d="M19 22C20.65 22 22 20.65 22 19C22 17.35 20.65 16 19 16H16V19C16 20.65 17.35 22 19 22Z" fill="currentColor"/>
                    </svg>
                    <span> API Management </span>
                </a>
                <a class="sidebar-link" href="rewards.html" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Rewards Hub">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M18 20.5H17V20.25C17 19.15 16.1 18.25 15 18.25H12.75V15.96C12.5 15.99 12.25 16 12 16C11.75 16 11.5 15.99 11.25 15.96V18.25H9C7.9 18.25 7 19.15 7 20.25V20.5H6C5.59 20.5 5.25 20.84 5.25 21.25C5.25 21.66 5.59 22 6 22H18C18.41 22 18.75 21.66 18.75 21.25C18.75 20.84 18.41 20.5 18 20.5Z" fill="currentColor"/>
                        <path opacity="0.4" d="M5.51979 11.64C4.85979 11.39 4.27979 10.98 3.81979 10.52C2.88979 9.49 2.27979 8.26 2.27979 6.82C2.27979 5.38 3.40979 4.25 4.84979 4.25H5.40979C5.14979 4.78 4.99979 5.37 4.99979 6V9C4.99979 9.94 5.17979 10.83 5.51979 11.64Z" fill="currentColor"/>
                        <path opacity="0.4" d="M21.72 6.82C21.72 8.26 21.11 9.49 20.18 10.52C19.72 10.98 19.14 11.39 18.48 11.64C18.82 10.83 19 9.94 19 9V6C19 5.37 18.85 4.78 18.59 4.25H19.15C20.59 4.25 21.72 5.38 21.72 6.82Z" fill="currentColor"/>
                        <path d="M15 2H9C6.79 2 5 3.79 5 6V9C5 12.87 8.13 16 12 16C15.87 16 19 12.87 19 9V6C19 3.79 17.21 2 15 2ZM14.84 8.45L14.22 9.21C14.12 9.32 14.05 9.54 14.06 9.69L14.12 10.67C14.16 11.27 13.73 11.58 13.17 11.36L12.26 11C12.12 10.95 11.88 10.95 11.74 11L10.83 11.36C10.27 11.58 9.84 11.27 9.88 10.67L9.94 9.69C9.95 9.54 9.88 9.32 9.78 9.21L9.16 8.45C8.77 7.99 8.94 7.48 9.52 7.33L10.47 7.09C10.62 7.05 10.8 6.91 10.88 6.78L11.41 5.96C11.74 5.45 12.26 5.45 12.59 5.96L13.12 6.78C13.2 6.91 13.38 7.05 13.53 7.09L14.48 7.33C15.06 7.48 15.23 7.99 14.84 8.45Z" fill="currentColor"/>
                        <path opacity="0.4" d="M14.8402 8.45014L14.2202 9.21014C14.1202 9.32014 14.0502 9.54014 14.0602 9.69014L14.1202 10.6701C14.1602 11.2701 13.7302 11.5801 13.1702 11.3601L12.2602 11.0001C12.1202 10.9501 11.8802 10.9501 11.7402 11.0001L10.8302 11.3601C10.2702 11.5801 9.84024 11.2701 9.88024 10.6701L9.94023 9.69014C9.95023 9.54014 9.88023 9.32014 9.78023 9.21014L9.16023 8.45014C8.77024 7.99014 8.94024 7.48014 9.52024 7.33014L10.4702 7.09014C10.6202 7.05014 10.8002 6.91014 10.8802 6.78014L11.4102 5.96014C11.7402 5.45014 12.2602 5.45014 12.5902 5.96014L13.1202 6.78014C13.2002 6.91014 13.3802 7.05014 13.5302 7.09014L14.4802 7.33014C15.0602 7.48014 15.2302 7.99014 14.8402 8.45014Z" fill="currentColor"/>
                    </svg>
                    <span> Rewards Hub </span>
                </a>
            </div>
        </div> -->
    </aside>

    <!-- Main Content -->
    <div class="wrapper pb-4">

        <!-- Header -->
        <div class="header d-flex align-items-center">

            <!-- Mobile Toggle Button -->
            <span id="sidebar-mobile-toggle">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.25 7.81V16.19C21.25 17.8608 20.7549 19.1045 19.9297 19.9297C19.1045 20.7549 17.8608 21.25 16.19 21.25H9.75V2.75H16.19C17.8608 2.75 19.1045 3.24514 19.9297 4.07033C20.7549 4.89552 21.25 6.13915 21.25 7.81Z" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M9 2V22H7.81C4.17 22 2 19.83 2 16.19V7.81C2 4.17 4.17 2 7.81 2H9Z" fill="currentColor"/>
                </svg>
            </span>

            <!-- Logo -->
            <div class="crypt-logo logo-m dark">
                <a href="template-1.html">
                    <img src="images/logo-dark.svg" alt="">
                </a>
            </div>
            <div class="crypt-logo logo-m light">
                <a href="template-1.html">
                    <img src="images/logo.svg" alt="">
                </a>
            </div>

            <!-- Collapse Button -->
            <div class="collapse-btn">
                <span id="sidebar-collapse">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.25 7.81V16.19C21.25 17.8608 20.7549 19.1045 19.9297 19.9297C19.1045 20.7549 17.8608 21.25 16.19 21.25H9.75V2.75H16.19C17.8608 2.75 19.1045 3.24514 19.9297 4.07033C20.7549 4.89552 21.25 6.13915 21.25 7.81Z" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M9 2V22H7.81C4.17 22 2 19.83 2 16.19V7.81C2 4.17 4.17 2 7.81 2H9Z" fill="currentColor"/>
                    </svg>
                </span>
            </div>

            <!-- Search -->
            <div class="col-md-3">
                <input type="text" class="search search-input form-control form-control-lg text-sm hidesmscreen circle" placeholder="Search">
            </div>

            <div class="user-settings gap-2 gap-sm-3">

                <!-- Dropdown (Assets) -->
               
                <!-- Dropdown (Orders) -->
             

                <!-- Call to Action -->
                <!-- <div class="flex disable-sm-screen">
                    <a class="btn btn-editor btn-primary" href="#!" data-bs-toggle="modal" data-bs-target="#buyCrypto">Add Funds</a>
                </div> -->

                <!-- Modal (Profile) -->
                <div class="profile_menu d-flex align-items-center">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle no-active d-flex align-items-center" type="button" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" aria-expanded="false">
                            <img alt="" src="images/social/user.png">
                        </button>
                        <ul class="dropdown-menu">
                            <li class="wallet align-items-center">
                                <img alt="" src="images/social/user.png">
                                <div class="d-grid">
                                    <h6 class="fw-bold crypt-grayscale-100 mb-0">jitendra@gmail.com</h6>
                                    <a class="d-flex gap-2 mb-2 verified mt-2" href="#!">
                                        <p class="crypt-grayscale-600 mb-0">UID:</p>
                                        <p class="crypt-grayscale-100 mb-0">35403204</p>
                                        <div class="crypt-grayscale-500" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.15556 5C6.8605 5 5 6.8605 5 9.15556V12.48C5 14.5149 6.46269 16.2083 8.39406 16.566C8.75174 18.4974 10.4451 19.96 12.48 19.96H15.8044C18.0995 19.96 19.96 18.0995 19.96 15.8044V12.48C19.96 10.4451 18.4974 8.75174 16.566 8.39406C16.2083 6.46269 14.5149 5 12.48 5H9.15556ZM14.8315 8.32444C14.4892 7.35604 13.5657 6.66222 12.48 6.66222H9.15556C7.77853 6.66222 6.66222 7.77853 6.66222 9.15556V12.48C6.66222 13.5657 7.35603 14.4892 8.32444 14.8315V12.48C8.32444 10.1849 10.1849 8.32444 12.48 8.32444H14.8315ZM9.98667 12.48C9.98667 11.103 11.103 9.98667 12.48 9.98667H15.8044C17.1814 9.98667 18.2978 11.103 18.2978 12.48V15.8044C18.2978 17.1814 17.1814 18.2978 15.8044 18.2978H12.48C11.103 18.2978 9.98667 17.1814 9.98667 15.8044V12.48Z"
                                                fill="currentColor" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="mt-2">
                            <a class="dropdown-item" href="my-dashboard.html">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M18.6699 2H16.7699C14.5899 2 13.4399 3.15 13.4399 5.33V7.23C13.4399 9.41 14.5899 10.56 16.7699 10.56H18.6699C20.8499 10.56 21.9999 9.41 21.9999 7.23V5.33C21.9999 3.15 20.8499 2 18.6699 2Z" fill="currentColor"/>
                                    <path opacity="0.4" d="M7.24 13.4301H5.34C3.15 13.4301 2 14.5801 2 16.7601V18.6601C2 20.8501 3.15 22.0001 5.33 22.0001H7.23C9.41 22.0001 10.56 20.8501 10.56 18.6701V16.7701C10.57 14.5801 9.42 13.4301 7.24 13.4301Z" fill="currentColor"/>
                                    <path d="M6.29 10.58C8.6593 10.58 10.58 8.6593 10.58 6.29C10.58 3.9207 8.6593 2 6.29 2C3.9207 2 2 3.9207 2 6.29C2 8.6593 3.9207 10.58 6.29 10.58Z" fill="currentColor"/>
                                    <path d="M17.7099 22C20.0792 22 21.9999 20.0793 21.9999 17.71C21.9999 15.3407 20.0792 13.42 17.7099 13.42C15.3406 13.42 13.4199 15.3407 13.4199 17.71C13.4199 20.0793 15.3406 22 17.7099 22Z" fill="currentColor"/>
                                </svg>
                                Dashboard
                            </a>
                            <a class="dropdown-item" href="my-asset.html"> 
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.0602 11.8201L20.9002 11.6001C20.6202 11.2601 20.2902 10.9901 19.9102 10.7901C19.4002 10.5001 18.8202 10.3501 18.2202 10.3501H5.7702C5.1702 10.3501 4.6002 10.5001 4.0802 10.7901C3.6902 11.0001 3.3402 11.2901 3.0502 11.6501C2.4802 12.3801 2.2102 13.2801 2.3002 14.1801L2.6702 18.8501C2.8002 20.2601 2.9702 22.0001 6.1402 22.0001H17.8602C21.0302 22.0001 21.1902 20.2601 21.3302 18.8401L21.7002 14.1901C21.7902 13.3501 21.5702 12.5101 21.0602 11.8201ZM14.3902 17.3401H9.6002C9.2102 17.3401 8.9002 17.0201 8.9002 16.6401C8.9002 16.2601 9.2102 15.9401 9.6002 15.9401H14.3902C14.7802 15.9401 15.0902 16.2601 15.0902 16.6401C15.0902 17.0301 14.7802 17.3401 14.3902 17.3401Z" fill="currentColor"/>
                                <path opacity="0.4" d="M3.37988 11.31C3.59988 11.11 3.81988 10.93 4.07988 10.79C4.58988 10.5 5.16988 10.35 5.76988 10.35H18.2299C18.8299 10.35 19.3999 10.5 19.9199 10.79C20.1799 10.93 20.4099 11.11 20.6199 11.32V10.79V9.82C20.6199 6.25 19.5299 5.16 15.9599 5.16H13.5799C13.1399 5.16 13.1299 5.15 12.8699 4.81L11.6699 3.2C11.0999 2.46 10.6499 2 9.21988 2H8.03988C4.46988 2 3.37988 3.09 3.37988 6.66V10.8V11.31Z" fill="currentColor"/>
                                </svg>
                                My Asset
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"> 
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M6.73049 19.7C7.55049 18.82 8.80049 18.89 9.52049 19.85L10.5305 21.2C11.3405 22.27 12.6505 22.27 13.4605 21.2L14.4705 19.85C15.1905 18.89 16.4405 18.82 17.2605 19.7C19.0405 21.6 20.4905 20.97 20.4905 18.31V7.04C20.5005 3.01 19.5605 2 15.7805 2H8.22049C4.44049 2 3.50049 3.01 3.50049 7.04V18.3C3.50049 20.97 4.96049 21.59 6.73049 19.7Z" fill="currentColor"/>
                                    <path d="M16.2305 11.75H10.7305C10.3205 11.75 9.98047 11.41 9.98047 11C9.98047 10.59 10.3205 10.25 10.7305 10.25H16.2305C16.6405 10.25 16.9805 10.59 16.9805 11C16.9805 11.41 16.6405 11.75 16.2305 11.75Z" fill="currentColor"/>
                                    <path d="M16.2305 7.75H10.7305C10.3205 7.75 9.98047 7.41 9.98047 7C9.98047 6.59 10.3205 6.25 10.7305 6.25H16.2305C16.6405 6.25 16.9805 6.59 16.9805 7C16.9805 7.41 16.6405 7.75 16.2305 7.75Z" fill="currentColor"/>
                                    <path d="M7.78027 8C7.23027 8 6.78027 7.55 6.78027 7C6.78027 6.45 7.23027 6 7.78027 6C8.33027 6 8.78027 6.45 8.78027 7C8.78027 7.55 8.33027 8 7.78027 8Z" fill="currentColor"/>
                                    <path d="M7.78027 12C7.23027 12 6.78027 11.55 6.78027 11C6.78027 10.45 7.23027 10 7.78027 10C8.33027 10 8.78027 10.45 8.78027 11C8.78027 11.55 8.33027 12 7.78027 12Z" fill="currentColor"/>
                                </svg>
                               Log Out
                            </a>

                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Notification -->
                <div class="controller">
                    <a href="#!" class="notify" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNotify">
                        <div class="notification"></div>
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M18.707 8.796c0 1.256.332 1.997 1.063 2.85.553.628.73 1.435.73 2.31 0 .874-.287 1.704-.863 2.378a4.537 4.537 0 01-2.9 1.413c-1.571.134-3.143.247-4.736.247-1.595 0-3.166-.068-4.737-.247a4.532 4.532 0 01-2.9-1.413 3.616 3.616 0 01-.864-2.378c0-.875.178-1.682.73-2.31.754-.854 1.064-1.594 1.064-2.85V8.37c0-1.682.42-2.781 1.283-3.858C7.861 2.942 9.919 2 11.956 2h.09c2.08 0 4.204.987 5.466 2.625.82 1.054 1.195 2.108 1.195 3.745v.426zM9.074 20.061c0-.504.462-.734.89-.833.5-.106 3.545-.106 4.045 0 .428.099.89.33.89.833-.025.48-.306.904-.695 1.174a3.635 3.635 0 01-1.713.731 3.795 3.795 0 01-1.008 0 3.618 3.618 0 01-1.714-.732c-.39-.269-.67-.694-.695-1.173z" />
                        </svg>
                    </a>
                </div>

                <!-- dark/light mode -->
                <div class="mode">
                    <button class="controller m-auto" id="darkMode">
                        <span class="dark-logo">
                            <svg viewBox="0 0 512 512" width="100" fill="currentColor">
                                <path d="M283.211 512c78.962 0 151.079-35.925 198.857-94.792 7.068-8.708-.639-21.43-11.562-19.35-124.203 23.654-238.262-71.576-238.262-196.954 0-72.222 38.662-138.635 101.498-174.394 9.686-5.512 7.25-20.197-3.756-22.23A258.156 258.156 0 0 0 283.211 0c-141.309 0-256 114.511-256 256 0 141.309 114.511 256 256 256z" />
                            </svg>
                        </span>
                        <span class="light-logo">
                            <svg viewBox="0 0 512 512" width="100" fill="currentColor">
                                <path d="M256 160c-52.9 0-96 43.1-96 96s43.1 96 96 96 96-43.1 96-96-43.1-96-96-96zm246.4 80.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.4-94.8c-6.4-12.8-24.6-12.8-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4c-12.8 6.4-12.8 24.6 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.4-33.5 47.3 94.7c6.4 12.8 24.6 12.8 31 0l47.3-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3c13-6.5 13-24.7.2-31.1zm-155.9 106c-49.9 49.9-131.1 49.9-181 0-49.9-49.9-49.9-131.1 0-181 49.9-49.9 131.1-49.9 181 0 49.9 49.9 49.9 131.1 0 181z" />
                            </svg>
                        </span>
                    </button>
                </div>

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
                                    <p class="text-sm fw-bold crypt-grayscale-600 mb-0">Total Amount</p>
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

       <section>
        {{ $slot }}
       </section>
  <!-- Main Content End -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>

  <script src="{{ asset('npm/apexcharts%403.41.0/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('ajax/libs/jquery/3.7.1/jquery.min.js') }}"></script>
  <script src="{{ asset('ajax/libs/popper.js/2.11.8/umd/popper.min.js') }}"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="{{ asset('js/main.js') }}"></script>
<script>
   $('#referral_code').on('keyup', function () {
        let code = $(this).val().trim();

        if (code.length < 3) {
            $('#referral_status').html('');
            return;
        }

        $.ajax({
            url: '/check-referral',
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

   function fireConfetti() {
    // bottom left
    confetti({
        particleCount: 100,
        angle: 60,
        spread: 55,
        origin: { x: 0, y: 1 }
    });
    // bottom right
    confetti({
        particleCount: 100,
        angle: 120,
        spread: 55,
        origin: { x: 1, y: 1 }
    });
}

$('#activatePlanForm').on('submit', function(e) {
    e.preventDefault();

    let plan = $('#plan_id').val();
    let amount = parseInt($('#plan_amount').val(), 10);

    const planRanges = {
        1: { min: 10, max: 199 },
        2: { min: 200, max: 499 },
        3: { min: 500, max: 999 },
        4: { min: 1000, max: null } // no upper limit
    };

    if (!plan || isNaN(amount)) {
        alert("Please select a plan and enter a valid amount.");
        return;
    }

    let range = planRanges[plan];
    if ((range.max && (amount < range.min || amount > range.max)) ||
        (!range.max && amount < range.min)) {
        $('#error').text(range.max 
            ? `Amount must be between $${range.min} and $${range.max}` 
            : `Amount must be $${range.min} or above`);
        return;
    }

    //  passed validation → continue with AJAX
    $.ajax({
        url: $(this).attr('action'),
        type: "POST",
        data: $(this).serialize(),
        success: function(response) {
            if (response.success) {
                $('#activatePlanModal').modal('hide');
                fireConfetti();
                // alert(response.message);
            }
        },
        error: function(xhr) {
            alert("Something went wrong!");
        }
    });
});

</script>

</body>
</html>
