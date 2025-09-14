<x-user>

 <!-- User Profile -->
        <div class="row g-2 animation-element">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card-bs p-3 h-100">
                    <!-- Profile -->
                    <div class="row align-items-center p-2">
                        <div class="col-12 col-md-12 col-xl-10">
                            <div class="d-flex gap-3">
                                <div class="pb-2 ">
                                    <img class="user-profile " src="images/social/user.jpg" alt="">
                                </div>
                                <div class="pb-2 ">
                                    <div class="d-flex flex-wrap align-items-center gap-2 ">
                                    <h4 class="crypt-grayscale-100 fw-bold">Hello, {{ Auth::user()->name}}</h4>
                                    <!-- <div class="pb-2">
                                        <a href="#!" class="btn btn-editor-sm btn-warning" role="button">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 9H14.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                            <path d="M9 3.75V14.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        </svg>
                                        Follow
                                        </a>
                                    </div> -->
                                    </div>
                                    <div class="pb-2 text-sm">
                                    <a href="#" class="crypt-grayscale-600 link-light" role="button">Last Login: 12-15-2024 16:13:15
                                        <span class="text-sm fw-bold">USA</span>
                                    </a>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center gap-3">
                                    <div class="verified gd-bg px-0">
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
                                    <div class="social d-flex">
                                        <a href="#!" rel="nofollow"><img src="images/social/x.svg" alt="" width="22"></a>
                                        <a href="#!" rel="nofollow"><img src="images/social/facebook.svg" alt="" width="22"></a>
                                        <a href="#!" rel="nofollow"><img src="images/social/instagram.svg" alt="" width="22"></a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-xl-2">
                            <div class="row mt-3">
                                <div class="col-12 col-md-4 pb-4 ">
                                <div class="d-flex flex-sm-wrap justify-content-between gap-4">
                                    <p class="crypt-grayscale-600 mb-0">Identification</p>
                                    <a class="verified alert align-items-center d-flex mb-0 gap-2" href="#!" role="button">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.401 0.794778C10.7011 0.396626 11.2989 0.396625 11.599 0.794778L12.9886 2.6388C13.1879 2.90318 13.5369 3.00566 13.8474 2.89097L16.0135 2.091C16.4812 1.91827 16.9841 2.24147 17.0212 2.73864L17.1934 5.04126C17.218 5.37139 17.4562 5.64629 17.7795 5.7177L20.0342 6.21577C20.521 6.32331 20.7693 6.86709 20.5318 7.30543L19.4317 9.33557C19.274 9.62663 19.3258 9.98668 19.5591 10.2215L21.1866 11.8595C21.538 12.2132 21.4529 12.8049 21.0161 13.0452L18.9931 14.1583C18.703 14.3179 18.5519 14.6488 18.6213 14.9725L19.1048 17.2303C19.2092 17.7178 18.8178 18.1696 18.3204 18.1357L16.0167 17.9783C15.6864 17.9558 15.3804 18.1524 15.2637 18.4622L14.4498 20.6231C14.2741 21.0897 13.7005 21.2581 13.3004 20.9606L11.4475 19.5828C11.1819 19.3852 10.8181 19.3852 10.5525 19.5828L8.69955 20.9606C8.29948 21.2581 7.72589 21.0897 7.55016 20.6231L6.73628 18.4622C6.6196 18.1524 6.3136 17.9558 5.98332 17.9783L3.67964 18.1357C3.18224 18.1696 2.79076 17.7178 2.89517 17.2303L3.37874 14.9725C3.44807 14.6488 3.29697 14.3179 3.00692 14.1583L0.983894 13.0452C0.547091 12.8049 0.462014 12.2132 0.813412 11.8595L2.44089 10.2215C2.67423 9.98668 2.72599 9.62664 2.56827 9.33557L1.46819 7.30543C1.23066 6.86709 1.479 6.32331 1.96582 6.21577L4.2205 5.7177C4.54376 5.64629 4.78196 5.37139 4.80664 5.04126L4.97876 2.73864C5.01593 2.24147 5.51884 1.91827 5.98652 2.091L8.15255 2.89097C8.4631 3.00566 8.81211 2.90318 9.01135 2.6388L10.401 0.794778Z"
                                            fill="currentColor" />
                                        <path opacity="0.9"
                                            d="M6.46921 10.1359C6.94653 9.65862 7.72039 9.65862 8.19771 10.1359L9.77791 11.7161L13.8026 7.69147C14.2798 7.21417 15.0537 7.21417 15.531 7.69147C16.0083 8.16879 16.0083 8.94265 15.531 9.41996L10.6421 14.3088C10.1648 14.7861 9.39097 14.7861 8.91366 14.3088L6.46921 11.8644C5.99191 11.3871 5.99191 10.6132 6.46921 10.1359Z"
                                            fill="#000" />
                                        </svg>
                                        Verified
                                    </a>
                                </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- Total Assets -->
                    <div class="card-bs-tabs p-3 p-sm-4 mt-3">
                        <div class="row">
                            <!-- Asset Info -->
                            <div class="col-12 col-lg-6 ">
                                <div class="d-flex gap-1 ">
                                    <h5>Total Amount</h5>
                                    <a href="#!" class="link-secondary" id="encrypt">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M21.25 9.15005C18.94 5.52005 15.56 3.43005 12 3.43005C10.22 3.43005 8.49 3.95005 6.91 4.92005C5.33 5.90005 3.91 7.33005 2.75 9.15005C1.75 10.7201 1.75 13.2701 2.75 14.8401C5.06 18.4801 8.44 20.5601 12 20.5601C13.78 20.5601 15.51 20.0401 17.09 19.0701C18.67 18.0901 20.09 16.6601 21.25 14.8401C22.25 13.2801 22.25 10.7201 21.25 9.15005ZM12 16.0401C9.76 16.0401 7.96 14.2301 7.96 12.0001C7.96 9.77005 9.76 7.96005 12 7.96005C14.24 7.96005 16.04 9.77005 16.04 12.0001C16.04 14.2301 14.24 16.0401 12 16.0401Z" fill="currentColor"/>
                                            <path d="M12.0004 9.14001C10.4304 9.14001 9.15039 10.42 9.15039 12C9.15039 13.57 10.4304 14.85 12.0004 14.85C13.5704 14.85 14.8604 13.57 14.8604 12C14.8604 10.43 13.5704 9.14001 12.0004 9.14001Z" fill="currentColor"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <h2 class="fw-bold encrypted mb-0">4.55</h2>
                                    <!-- <div>
                                        <select class="form-select text-bg-dark">
                                        <option selected>BTC</option>
                                        <option value="1">ETH</option>
                                        <option value="2">BNB</option>
                                        <option value="3">USDT</option>
                                        </select>
                                    </div> -->
                                </div>
                                <!-- <h6 class="crypt-grayscale-700">≈ $0.00</h6> -->
                                <div class="d-sm-flex gap-2 align-items-center mt-3 mb-3">
                                    <h6 class="fw-bold crypt-grayscale-400 mb-0">Today‘s PnL</h6>
                                    <h6 class="crypt-grayscale-600 encrypted mb-0">+ $0.00(0.00%)</h6>
                                    <a href="#" class="badge bg-info text-dark col-auto">PnL analysis →</a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <!-- Button -->
                                <div class="d-sm-flex flex-row justify-content-end gap-2 ">

                                    <a class="btn btn-editor btn-primary mb-2" href="#!" data-bs-toggle="modal" data-bs-target="#buyCrypto">Add Plan</a>

                                    <a class="btn btn-editor btn-info mb-2" href="#!" role="button">Withdraw</a>
                                    <a class="btn btn-editor btn-danger mb-2" href="#!" data-bs-toggle="modal" data-bs-target="#transferCrypto">Support</a>
                                </div>
                                <!-- Chart -->
                                <div class="flex mt-2">
                                    <div class="chart-area"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Account -->
        <div class="row g-2 mt-1 animation-element">
            <h5 class="crypt-grayscale-100 mb-2 mt-4 fw-bold">Account</h5>
            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 col-md-6">
            <div class="card-bs p-3 d-sm-flex flex-row align-items-center">
                <div class="card-body ">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                    <p class="crypt-grayscale-500">Daily Staking Bonus</p>
                    <div class="d-flex pb-3">
                        <h3 class="fw-bold encrypted mb-0">0.00</h3>
                        <!-- <select class="form-select text-bg-bs" id="inputGroupSpotCoin">
                        <option selected>BTC</option>
                        <option value="1">ETH</option>
                        <option value="2">BNB</option>
                        <option value="3">USDT</option>
                        </select> -->
                    </div>
                    <!-- <p class="crypt-grayscale-700 encrypted">≈ 0.00 USD</p> -->
                    </div>
                    <img alt="" style="width:60px;" src="images/icon/spot.svg">
                </div>
                </div>
            </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 col-md-6">
            <div class="card-bs p-3 d-sm-flex flex-row align-items-center">
                <div class="card-body ">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                    <p class="crypt-grayscale-500">Referral Bonus</p>
                    <div class="d-flex pb-3">
                        <h3 class="fw-bold encrypted mb-0">0.00</h3>
                        <!-- <select class="form-select text-bg-bs" id="inputGroupMarginCoin">
                        <option selected>BNB</option>
                        <option value="1">ETH</option>
                        <option value="2">BTC</option>
                        <option value="3">USDT</option>
                        </select> -->
                    </div>
                    <!-- <p class="crypt-grayscale-700 encrypted">≈ 0.00 USD</p> -->
                    </div>
                    <img alt="" style="width:60px;" src="images/icon/margin.svg">
                </div>
                </div>
            </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 col-md-6">
            <div class="card-bs p-3 d-sm-flex flex-row align-items-center">
                <div class="card-body ">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                    <p class="crypt-grayscale-500">Level Staking Bonus</p>
                    <div class="d-flex pb-3">
                        <h3 class="fw-bold encrypted mb-0">0.00</h3>
                        <!-- <select class="form-select text-bg-bs" id="inputGroupFuturesCoin">
                        <option selected>ETH</option>
                        <option value="1">BNB</option>
                        <option value="2">BTC</option>
                        <option value="3">USDT</option>
                        </select> -->
                    </div>
                    <!-- <p class="crypt-grayscale-700 encrypted">≈ 0.00 USD</p> -->
                    </div>
                    <img alt="" style="width:60px;" src="images/icon/funding.svg">
                </div>
                </div>
            </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-4 col-xxl-3 col-md-6">
            <div class="card-bs p-3 d-sm-flex flex-row align-items-center">
                <div class="card-body ">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                    <p class="crypt-grayscale-500">Rank Bonus</p>
                    <div class="d-flex pb-3">
                        <h3 class="fw-bold encrypted mb-0">0.45200</h3>
                        <!-- <select class="form-select text-bg-bs" id="inputGroupEarnCoin">
                        <option selected>USDT</option>
                        <option value="1">ETH</option>
                        <option value="2">BTC</option>
                        <option value="3">BNB</option>
                        </select> -->
                    </div>
                    <!-- <p class="crypt-grayscale-700 encrypted">≈ 0.00 USD</p> -->
                    </div>
                    <img alt="" style="width:60px;" src="images/icon/earn.svg">
                </div>
                </div>
            </div>
            </div>
        </div>


        <!-- TradingView Ticker -->
        <div class="container-fluid tradingview-widget-container__widget mt-2 card-bs animation-element">
            <script  src="../../s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [
                {
                    "proName": "FOREXCOM:SPXUSD",
                    "title": "S&P 500 Index"
                },
                {
                    "proName": "FOREXCOM:NSXUSD",
                    "title": "US 100 Cash CFD"
                },
                {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR to USD"
                },
                {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "Bitcoin"
                },
                {
                    "proName": "BITSTAMP:ETHUSD",
                    "title": "Ethereum"
                }
                ],
                "showSymbolLogo": true,
                "isTransparent": true,
                "displayMode": "adaptive",
                "colorTheme": "dark",
                "locale": "en"
            }
            </script>
        </div>

    </div>

    <!-- Create Futures Grid -->
    <div class="modal fade" id="createFuturesGrid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">Create Futures Grid</h5>
                    <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
                        <svg class="close-notify" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Create Form -->
                    <div class="card-bs p-2 bg-5">
                        <div class="input-group mt-2">
                            <label class="form-label fw-bold crypt-grayscale-300">1. Price Range
                                <span class="badge text-warning bg-warning bg-gradient bg-opacity-25">Trailing</span>
                            </label>
                        </div>
                        <div class="d-flex flex-row gap-2 align-items-center">
                            <div class="input-group">
                                <input class="form-control text-sm" type="text" placeholder="Lower">
                            </div>
                            <div class="mt-3">
                                <p class="crypt-grayscale-600">-</p>
                            </div>
                            <div class="input-group">
                                <input class="form-control text-sm" type="text" placeholder="Upper">
                            </div>
                        </div>
                        <div class="input-group mt-2">
                            <label class="form-label fw-bold crypt-grayscale-300">2. Number of Grids</label>
                        </div>
                        <div class="input-group d-flex">
                            <input type="email" class="form-control text-sm" placeholder="2-169">
                            <div class="input-group-append input-group-text p-1">
                                <select class="form-select text-sm crypt-grayscale-400">
                                    <option selected>Arithmetic</option>
                                    <option value="1">Geometric</option>
                                </select>
                            </div>
                        </div>
                        <label class="form-label crypt-grayscale-600 mt-1">Profit/grid(fees deducted): --</label>
                        <div class="input-group mt-2">
                            <label class="form-label fw-bold crypt-grayscale-300">3. Investment</label>
                            <label class="form-label ms-auto crypt-grayscale-600">Avbl <span class="text-primary">0.00 USDT</span></label>
                        </div>
                        <div class="input-group d-flex">
                            <input type="email" class="form-control text-sm" placeholder="USDT">
                            <div class="input-group-append input-group-text p-1">
                                <select class="form-select text-sm crypt-grayscale-400">
                                    <option selected>5x</option>
                                    <option value="1">1x</option>
                                    <option value="1">2x</option>
                                    <option value="1">3x</option>
                                    <option value="1">4x</option>
                                    <option value="1">5x</option>
                                    <option value="1">6x</option>
                                    <option value="1">7x</option>
                                    <option value="1">8x</option>
                                    <option value="1">9x</option>
                                    <option value="1">10x</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 text-sm">
                        <div class="d-flex flex-row justify-content-between">
                            <p class="crypt-grayscale-500">Qty/Order</p>
                            <p class="crypt-grayscale-500">0 USDT</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <p class="crypt-grayscale-500">Total Investment</p>
                            <p class="crypt-grayscale-500">0.00 USDT</p>
                        </div>
                    </div>
                    <div class="d-grid mt-5 mb-3">
                        <a class="btn btn-warning" href="#!" role="button">Create (Neutral)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Buy/Sell Modal -->
    <div class="modal fade" id="buyCrypto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">Fast Trade</h5>
                    <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
                        <svg class="close-notify" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Tab -->
                    <div class="tab-content table-responsive justify-content-between mb-4 p-0">
                        <div class="d-flex flex-row nav nav-pills nav-justified card-bs-tabs p-1">
                            <button class="nav-link active fs-6" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy-tab-pane" type="button" aria-controls="buy-tab-pane">Buy</button>
                            <button class="nav-link fs-6" id="sell-tab" data-bs-toggle="tab" data-bs-target="#sell-tab-pane" type="button" aria-controls="sell-tab-pane">Sell</button>
                        </div>
                        <!--Buy Tabs -->
                        <div class="tab-pane fade show active pt-4" id="buy-tab-pane" role="tabpanel" aria-labelledby="buy-tab" tabindex="0">
                            <div class="input-group mb-3 P-1">
                                <div class="input-group-prepend input-group-text">Spend ≈</div>
                                <input class="form-control placeholder-text" type="text" placeholder="Enter amount">
                                <div class="input-group-append input-group-text p-1">
                                    <select class="form-select text-sm crypt-grayscale-500">
                                        <option selected>USD</option>
                                        <option value="1">AED</option>
                                        <option value="2">AMD</option>
                                        <option value="3">AUD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group mb-3 p-1">
                                <div class="input-group-prepend input-group-text">Receive</div>
                                <input class="form-control placeholder-text" type="text" placeholder="0">
                                <div class="input-group-append input-group-text p-1">
                                    <select class="form-select text-sm crypt-grayscale-500">
                                        <option selected>USDT</option>
                                        <option value="1">BTC</option>
                                        <option value="2">BNB</option>
                                        <option value="3">ETH</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-2 text-sm card-border p-2">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="crypt-grayscale-500">Subtotal:</p>
                                    <p class="crypt-grayscale-600">0.00 USDT</p>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="crypt-grayscale-500">Trade Fee: <span class="crypt-grayscale-500">(0.1%)</span></p>
                                    <p class="crypt-grayscale-600">0.00 USDT</p>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="crypt-grayscale-500">Gas Fee:</p>
                                    <p class="crypt-blue">Free</p>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="crypt-grayscale-500 mb-0">Total:</p>
                                    <p class="crypt-grayscale-600 mb-0">0.00 USDT</p>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 text-sm">
                                <div class="d-flex flex-row">
                                    <label class="form-label text-light">Payment Method</label>
                                </div>
                                <a class="btn btn-editor btn-outline-primary d-flex flex-row align-items-center justify-content-between card-border p-2" href="#!" data-bs-toggle="" data-bs-target="">
                                    <div class="d-flex flex-row align-items-center crypt-grayscale-300 gap-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 15C4.06 15 3.19 15.33 2.5 15.88C1.58 16.61 1 17.74 1 19C1 19.75 1.21 20.46 1.58 21.06C2.27 22.22 3.54 23 5 23C6.01 23 6.93001 22.63 7.63 22C7.94 21.74 8.21 21.42 8.42 21.06C8.79 20.46 9 19.75 9 19C9 16.79 7.21 15 5 15ZM7.07001 18.57L4.94 20.54C4.8 20.67 4.60999 20.74 4.42999 20.74C4.23999 20.74 4.04999 20.67 3.89999 20.52L2.91 19.53C2.62 19.24 2.62 18.76 2.91 18.47C3.2 18.18 3.68 18.18 3.97 18.47L4.45 18.95L6.05 17.47C6.35 17.19 6.83 17.21 7.11 17.51C7.39 17.81 7.37001 18.29 7.07001 18.57Z" fill="currentColor"/>
                                            <path opacity="0.4" d="M19.48 12.95H21.5V11.51C21.5 9.44001 19.81 7.75 17.74 7.75H6.25999C4.18999 7.75 2.5 9.44001 2.5 11.51V15.88C3.19 15.33 4.06 15 5 15C7.21 15 9 16.79 9 19C9 19.75 8.79 20.46 8.42 21.06C8.21 21.42 7.94 21.74 7.63 22H17.74C19.81 22 21.5 20.31 21.5 18.24V17.05H19.6C18.52 17.05 17.53 16.26 17.44 15.18C17.38 14.55 17.62 13.96 18.04 13.55C18.41 13.17 18.92 12.95 19.48 12.95Z" fill="currentColor"/>
                                            <path d="M14.85 3.95012V7.75011H6.25999C4.18999 7.75011 2.5 9.44012 2.5 11.5101V7.84014C2.5 6.65014 3.23 5.59009 4.34 5.17009L12.28 2.17009C13.52 1.71009 14.85 2.62012 14.85 3.95012Z" fill="currentColor"/>
                                            <path d="M22.5598 13.9702V16.0302C22.5598 16.5802 22.1198 17.0302 21.5598 17.0502H19.5998C18.5198 17.0502 17.5298 16.2602 17.4398 15.1802C17.3798 14.5502 17.6198 13.9602 18.0398 13.5502C18.4098 13.1702 18.9198 12.9502 19.4798 12.9502H21.5598C22.1198 12.9702 22.5598 13.4202 22.5598 13.9702Z" fill="currentColor"/>
                                            <path d="M14 12.75H7C6.59 12.75 6.25 12.41 6.25 12C6.25 11.59 6.59 11.25 7 11.25H14C14.41 11.25 14.75 11.59 14.75 12C14.75 12.41 14.41 12.75 14 12.75Z" fill="currentColor"/>
                                        </svg>
                                        Pay with new card
                                        <svg width="50" height="17" viewBox="0 0 50 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9289 16.0671L19.5488 0.834256H23.6709L19.0508 16.0671H14.9289ZM13.0862 0.838415L9.37817 7.29564C8.43424 8.98682 7.88249 9.84103 7.61717 10.9098H7.56072C7.62638 9.55491 7.43741 7.89165 7.41959 6.95158L7.01016 0.838415H0.0713081L0 1.24814C1.7827 1.24814 2.83984 2.14365 3.13071 3.97537L4.48319 16.0671H8.75364L17.3884 0.838415H13.0862ZM45.1423 16.0671L45.0285 13.8016L39.8813 13.7974L38.8286 16.0668H34.3535L42.468 0.863076H47.9611L49.3353 16.0668H45.1423V16.0671ZM44.6696 7.08172C44.6239 5.95594 44.5856 4.42787 44.6622 3.50325H44.6013C44.3505 4.25941 43.2729 6.53027 42.799 7.64713L41.2653 10.9861H44.8794L44.6696 7.08172ZM27.9984 16.5C25.0882 16.5 23.1569 15.5769 21.778 14.7538L23.7417 11.7551C24.9794 12.4473 25.9513 13.2463 28.1874 13.2463C28.9064 13.2463 29.5993 13.0594 29.9927 12.3781C30.5661 11.3872 29.8605 10.8542 28.2501 9.94265L27.455 9.42567C25.068 7.7945 24.0355 6.24533 25.1592 3.54098C25.8782 1.81117 27.7747 0.5 30.9034 0.5C33.061 0.5 35.0838 1.43324 36.2624 2.34509L34.0049 4.99269C32.8548 4.06242 31.9014 3.59179 30.8104 3.59179C29.9404 3.59179 29.2796 3.92723 29.0514 4.37974C28.6221 5.23039 29.1902 5.81036 30.4446 6.5891L31.39 7.19046C34.2881 9.01832 34.9786 10.935 34.2522 12.7269C33.0031 15.8113 30.5572 16.5 27.9984 16.5Z" fill="#1434CB"/>
                                        </svg>
                                        <svg width="30" height="19" viewBox="0 0 30 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.8324 16.5755H10.9585V2.42493H18.8325L18.8324 16.5755Z" fill="#FF5F00" />
                                            <path d="M11.4577 9.49945C11.4577 6.62901 12.8017 4.07201 14.8946 2.42417C13.3104 1.175 11.3509 0.497029 9.33348 0.50001C4.36375 0.50001 0.335205 4.52914 0.335205 9.49945C0.335205 14.4698 4.36375 18.4989 9.33348 18.4989C11.351 18.5019 13.3105 17.8239 14.8947 16.5747C12.802 14.9272 11.4577 12.37 11.4577 9.49945Z"
                                                fill="#EB001B" />
                                            <path d="M29.4553 9.50067C29.4553 14.471 25.4268 18.5001 20.457 18.5001C18.4393 18.5031 16.4796 17.8251 14.895 16.576C16.9885 14.9281 18.3325 12.3713 18.3325 9.50067C18.3325 6.63009 16.9885 4.07323 14.895 2.42539C16.4795 1.17625 18.4392 0.498302 20.4569 0.50123C25.4266 0.50123 29.4552 4.53036 29.4552 9.50067"
                                                fill="#F79E1B" />
                                        </svg>
                                    </div>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.75 13.5L11.25 9L6.75 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="d-flex flex-row justify-content-between text-sm">
                                <p class="crypt-grayscale-500">Reference Price</p>
                                <p class="crypt-grayscale-300">1 USDT ≈ 1.05 USD</p>
                            </div>
                            <div class="d-grid">
                                <a class="btn btn-up" href="login.html" role="button">Buy USDT</a>
                            </div>
                        </div>
                        <!--Sell Tabs -->
                        <div class="tab-pane fade pt-4" id="sell-tab-pane" role="tabpanel" aria-labelledby="sell-tab" tabindex="0">
                            <div class="d-flex flex-row align-items-center justify-content-between px-1">
                                <label class="form-label text-sm text-light">I Want to Sell</label>
                                <label class="form-label text-sm crypt-grayscale-600">Funding Balance:
                                    <span class="crypt-grayscale-300">0.00 USDT</span>
                                </label>
                            </div>
                            <div class="input-group d-flex p-1">
                                <input type="email" class="form-control text-sm" placeholder="Enter amount">
                                <div class="input-group-append input-group-text p-1">
                                    <select class="form-select text-sm crypt-grayscale-500">
                                        <option selected>USDT</option>
                                        <option value="1">BTC</option>
                                        <option value="2">BNB</option>
                                        <option value="3">ETH</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-row mt-4">
                                <label class="form-label text-sm text-light px-1">I Will Receive</label>
                            </div>
                            <div class="input-group d-flex p-1">
                                <input type="email" class="form-control text-sm" placeholder="0">
                                <div class="input-group-append input-group-text p-1">
                                    <select class="form-select text-sm crypt-grayscale-500">
                                        <option selected>USD</option>
                                        <option value="1">AMD</option>
                                        <option value="2">AFN</option>
                                        <option value="3">AUD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-4 text-sm card-border p-2">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="crypt-grayscale-500">Subtotal:</p>
                                    <p class="crypt-grayscale-600">0.00 USDT</p>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="crypt-grayscale-500">Gas Fee:</p>
                                    <p class="crypt-blue">Free</p>
                                </div>
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="crypt-grayscale-500 mb-0">Total:</p>
                                    <p class="crypt-grayscale-600 mb-0">0.00 USDT</p>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 text-sm">
                                <div class="d-flex flex-row">
                                    <label class="form-label text-light">Receive Method</label>
                                </div>
                                <a class="btn btn-editor btn-secondary d-flex flex-row align-items-center justify-content-between card-border p-2" href="#!" data-bs-toggle="" data-bs-target="">
                                    <div class="crypt-grayscale-300">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 15C4.06 15 3.19 15.33 2.5 15.88C1.58 16.61 1 17.74 1 19C1 19.75 1.21 20.46 1.58 21.06C2.27 22.22 3.54 23 5 23C6.01 23 6.93001 22.63 7.63 22C7.94 21.74 8.21 21.42 8.42 21.06C8.79 20.46 9 19.75 9 19C9 16.79 7.21 15 5 15ZM7.07001 18.57L4.94 20.54C4.8 20.67 4.60999 20.74 4.42999 20.74C4.23999 20.74 4.04999 20.67 3.89999 20.52L2.91 19.53C2.62 19.24 2.62 18.76 2.91 18.47C3.2 18.18 3.68 18.18 3.97 18.47L4.45 18.95L6.05 17.47C6.35 17.19 6.83 17.21 7.11 17.51C7.39 17.81 7.37001 18.29 7.07001 18.57Z" fill="currentColor"/>
                                            <path opacity="0.4" d="M19.48 12.95H21.5V11.51C21.5 9.44001 19.81 7.75 17.74 7.75H6.25999C4.18999 7.75 2.5 9.44001 2.5 11.51V15.88C3.19 15.33 4.06 15 5 15C7.21 15 9 16.79 9 19C9 19.75 8.79 20.46 8.42 21.06C8.21 21.42 7.94 21.74 7.63 22H17.74C19.81 22 21.5 20.31 21.5 18.24V17.05H19.6C18.52 17.05 17.53 16.26 17.44 15.18C17.38 14.55 17.62 13.96 18.04 13.55C18.41 13.17 18.92 12.95 19.48 12.95Z" fill="currentColor"/>
                                            <path d="M14.85 3.95012V7.75011H6.25999C4.18999 7.75011 2.5 9.44012 2.5 11.5101V7.84014C2.5 6.65014 3.23 5.59009 4.34 5.17009L12.28 2.17009C13.52 1.71009 14.85 2.62012 14.85 3.95012Z" fill="currentColor"/>
                                            <path d="M22.5598 13.9702V16.0302C22.5598 16.5802 22.1198 17.0302 21.5598 17.0502H19.5998C18.5198 17.0502 17.5298 16.2602 17.4398 15.1802C17.3798 14.5502 17.6198 13.9602 18.0398 13.5502C18.4098 13.1702 18.9198 12.9502 19.4798 12.9502H21.5598C22.1198 12.9702 22.5598 13.4202 22.5598 13.9702Z" fill="currentColor"/>
                                            <path d="M14 12.75H7C6.59 12.75 6.25 12.41 6.25 12C6.25 11.59 6.59 11.25 7 11.25H14C14.41 11.25 14.75 11.59 14.75 12C14.75 12.41 14.41 12.75 14 12.75Z" fill="currentColor"/>
                                        </svg>
                                        Enter Amount and select payment
                                    </div>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.75 13.5L11.25 9L6.75 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="d-grid">
                                <a class="btn btn-down" href="login.html" role="button">Sell USDT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offcanvas Notifications -->
    <div class="offcanvas offcanvas-end" tabindex="0" id="offcanvasNotify">
        <div class="offcanvas-header card-line">
            <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">Notifications <span class="crypt-grayscale-500 text-sm mb-0">3</span></h5>
            <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg class="close-notify" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        <div class="offcanvas-body">
          <h6 class="crypt-grayscale-400">Today</h6>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p class="crypt-grayscale-600 text-sm mb-0">30 min ago</p>
            <a class="text-dark fs-6 fw-bold text-link" href="#!">🔐 Account Login</a>
            <p class="mt-2"><strong>Hollo John! </strong>You have logged in your account from Windows Chrome 130.</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <p class="crypt-grayscale-600 text-sm mb-0">1 hours ago</p>
            <a class="text-dark fs-6 fw-bold text-link" href="#!">📢 Announcement</a>
            <p class="mt-2">Notice on New Trading Pairs and Trading Bots Services.</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <p class="crypt-grayscale-600 text-sm mb-0">2 hours ago</p>
            <a class="text-dark fs-6 fw-bold text-link" href="#!">🔖 Coupon Expire Soon</a>
            <p class="mt-2"><strong>Hollo John!</strong> Your Margin Interest-Free Coupon will expire in 9 hour(s).</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </div>
    </div>
    <!-- Transfer Modal -->
    <div class="modal fade" id="transferCrypto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">Transfer</h5>
                    <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
                        <svg class="close-notify" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Transfer Form -->
                    <div class="d-flex flex-column">
                        <label class="form-label text-sm text-light">Internal transfers are free on Crypt.</label>
                        <div class="card-bs p-2 bg-5">
                            <div class="input-group">
                                <label class="input-group-text">From</label>
                                <select class="form-select text-sm crypt-grayscale-300">
                                    <option disabled>Options</option>
                                    <option selected>Fiat and Spot</option>
                                    <option value="1">Funding</option>
                                    <option value="2">Isolated Margin</option>
                                    <option value="3">COIN-M Futures</option>
                                </select>
                            </div>
                            <div class="input-group justify-content-between p-2">
                                <img alt="" style="width:20px;" src="images/icon/arrow-down.svg">
                                <a href="#!">
                                  <img alt="" style="width:24px;" src="images/icon/switch.svg">
                                </a>
                            </div>
                            <div class="input-group">
                                <label class="input-group-text">To</label>
                                <select class="form-select text-sm crypt-grayscale-300">
                                    <option disabled>Options</option>
                                    <option selected>Cross Margin</option>
                                    <option value="1">USDⓈ-M Futures</option>
                                    <option value="2">Fiat and Spot</option>
                                    <option value="3">COIN-M Futures</option>
                                </select>
                            </div>
                        </div>
                        <label class="form-label text-sm text-light mt-4">Coin</label>
                        <div class="input-group mb-3">
                            <select class="form-select crypt-grayscale-300">
                                <option selected>1INCH</option>
                                <option value="1">USDT</option>
                                <option value="2">AAVE</option>
                                <option value="3">ACE</option>
                                <option value="4">ALGO</option>
                                <option value="5">APE</option>
                                <option value="6">CELO</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend input-group-text">Amount ≈</div>
                            <input class="form-control placeholder-text" type="text" placeholder="Enter the transfer amount">
                            <a href="#" class="input-group-append input-group-text text-warning">MAX</a>
                        </div>
                        <div class="mt-2 text-sm">
                            <div class="d-flex flex-row justify-content-between">
                                <p class="crypt-grayscale-500">Max Transferrable:</p>
                                <p class="crypt-grayscale-600">0.00000000 USDT</p>
                            </div>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="crypt-grayscale-500">Avaliable:</p>
                                <p class="crypt-grayscale-600">0.00000000 USDT</p>
                            </div>
                        </div>
                        <div class="d-grid mt-5 mb-3">
                          <a class="btn btn-warning" href="#!" role="button">Confirm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Convert Modal -->
    <div class="modal fade" id="convertCrypto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">Convert</h5>
                    <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
                        <svg class="close-notify" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Convert Form -->
                    <div class="input-group d-flex mb-1">
                        <label class="form-label text-sm text-light">Wallet.</label>
                        <div class="d-flex gap-3 align-items-center ms-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <label class="form-check-label text-light">
                                Spot
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label text-light">
                                Funding
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-bs p-2 bg-5">
                        <div class="input-group">
                            <label class="form-label crypt-grayscale-600">From</label>
                            <label class="form-label ms-auto crypt-grayscale-600">Balance : <span class="text-primary">0 ADA</span></label>
                        </div>
                        <div class="input-group d-flex">
                            <input type="email" class="form-control text-sm" placeholder="0.00">
                            <div class="input-group-append input-group-text p-1">
                                <select class="form-select text-sm crypt-grayscale-500">
                                    <option selected>ADA</option>
                                    <option value="1">BTC</option>
                                    <option value="2">BNB</option>
                                    <option value="3">ETH</option>
                                </select>
                            </div>
                        </div>
                        <label class="form-label crypt-grayscale-600 mt-1">≈ $0.0</label>
                    </div>
                    <div class="input-group justify-content-center p-3">
                        <img alt="" style="width:32px;" src="images/icon/switch.svg">
                    </div>
                    <div class="card-bs p-2 bg-5">
                        <div class="input-group">
                            <label class="form-label crypt-grayscale-600">To</label>
                            <label class="form-label ms-auto crypt-grayscale-600">Balance : <span class="text-primary">0 USDT</span></label>
                        </div>
                        <div class="input-group d-flex">
                            <input type="email" class="form-control text-sm" placeholder="0.01 - 310000">
                            <div class="input-group-append input-group-text p-1">
                                <select class="form-select text-sm crypt-grayscale-500">
                                    <option selected>USDT</option>
                                    <option value="1">BTC</option>
                                    <option value="2">BNB</option>
                                    <option value="3">ETH</option>
                                </select>
                            </div>
                        </div>
                        <label class="form-label crypt-grayscale-600 mt-1">≈ $0.0</label>
                    </div>
                    <div class="mt-2 text-sm">
                        <div class="d-flex flex-row justify-content-between">
                            <p class="crypt-grayscale-500">Rate: </p>
                            <p class="crypt-grayscale-500">1 ADA ≈ 0.728877 USDT</p>
                        </div>
                    </div>
                    <div class="d-grid mt-5 mb-3">
                        <a class="btn btn-info" href="#!" role="button">Preview</a>
                    </div>
                </div>
          </div>
      </div>
    </div>
    <!-- Offcanvas Convert -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header card-line">
            <div class="d-flex flex-row gap-3">
                <div>
                    <img alt="" style="width:32px;" src="images/coin/btc.svg">
                </div>
                <h5 class="crypt-grayscale-300">Bitcoin <span class="crypt-grayscale-600">BTC</span></h5>
            </div>
            <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg class="close-notify" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="d-flex flex-column">
                <h3 class="fw-bold crypt-grayscale-300">0.000000</h3>
                <h6 class="crypt-grayscale-600">≈ $0.00</h6>
                <a class="btn btn-editor btn-info mb-2" href="#" data-bs-toggle="modal" data-bs-target="#convertCrypto">Convert</a>
                <h6 class="fw-bold crypt-grayscale-400 mt-4">Asset Distribution</h6>
                <div class="row g-2 mt-1">
                    <div class="col-6">
                        <div class="card-bs card-border p-3 d-sm-flex flex-row align-items-center">
                            <div class="row justify-content-between">
                                <div class="d-flex flex-row gap-2">
                                    <div>
                                        <img alt="" style="width:20px;" src="images/icon/spot.svg">
                                    </div>
                                    <p class="crypt-grayscale-300">Spot</p>
                                </div>
                                <h6 class="fw-bold crypt-grayscale-100">BTC/USDT</h6>
                                <div class="d-flex flex-row gap-2">
                                    <p class="crypt-grayscale-400">89259.95</p>
                                    <p class="text-down">-2.30%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-bs card-border p-3 d-sm-flex flex-row align-items-center">
                            <div class="row justify-content-between">
                                <div class="d-flex flex-row gap-2">
                                    <div>
                                        <img alt="" style="width:20px;" src="images/icon/earn.svg">
                                    </div>
                                    <p class="crypt-grayscale-300">Earn</p>
                                </div>
                                <h6 class="fw-bold crypt-grayscale-100">BTC</h6>
                                <div class="d-flex flex-row gap-2">
                                    <p class="crypt-grayscale-400">APR up to</p>
                                    <p class="text-up">211.39%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- History -->
                <div class="table-responsive mt-1">
                    <h6 class="fw-bold crypt-grayscale-300 mt-4">History</h6>
                    <table class="table table-dark crypt-tab">
                        <tbody>
                            <tr>
                                <td class="no-orders text-center">
                                    <img src="images/empty.svg" alt="no-orders">
                                    <p class="crypt-grayscale-600 pb-4 ">Data of last 6 months</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Stake Modal -->
    <div class="modal fade" id="stakeCrypto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">Stake ETH</h5>
                    <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
                        <svg class="close-notify" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Stake Form -->
                    <div class="input-group justify-content-center mb-4">
                        <div class="d-flex flex-row align-items-center gap-2 circles gd-bg px-3 py-1">
                            <label class="form-label text-light mb-0">1 ETH ≈ 0.94773528 WBETH</label>
                            <img alt="" width="24" src="images/icon/stake-change.svg">
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="form-label crypt-grayscale-600">Stake Amount</label>
                        <label class="form-label ms-auto crypt-grayscale-600">Balance : <span class="text-primary">0 ETH</span></label>
                    </div>
                    <div class="input-group d-flex">
                        <input type="email" class="form-control text-sm" placeholder="Min 0.0001">
                        <div class="input-group-append input-group-text p-1">
                            <select class="form-select text-sm crypt-grayscale-500">
                                <option selected>ETH</option>
                                <option value="1">BTC</option>
                                <option value="2">BNB</option>
                                <option value="3">USDT</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group justify-content-center p-3">
                        <img alt="" style="width:32px;" src="images/icon/stake-down.svg">
                    </div>
                    <div class="card-bs p-2 bg-5">
                        <div class="input-group">
                            <label class="form-label crypt-grayscale-600">Receive</label>
                        </div>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="--" disabled readonly>
                            <span class="input-group-text fw-bold text-info">WBETH</span>
                        </div>
                    </div>
                    <div class="alert alert-warning d-flex mt-3 mb-4 p-2" role="alert">
                        <svg class="flex-shrink-0 me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"/>
                            <path d="M12 13.75C12.41 13.75 12.75 13.41 12.75 13V8C12.75 7.59 12.41 7.25 12 7.25C11.59 7.25 11.25 7.59 11.25 8V13C11.25 13.41 11.59 13.75 12 13.75Z" fill="currentColor"/>
                            <path d="M12.92 15.6199C12.87 15.4999 12.8 15.3899 12.71 15.2899C12.61 15.1999 12.5 15.1299 12.38 15.0799C12.14 14.9799 11.86 14.9799 11.62 15.0799C11.5 15.1299 11.39 15.1999 11.29 15.2899C11.2 15.3899 11.13 15.4999 11.08 15.6199C11.03 15.7399 11 15.8699 11 15.9999C11 16.1299 11.03 16.2599 11.08 16.3799C11.13 16.5099 11.2 16.6099 11.29 16.7099C11.39 16.7999 11.5 16.8699 11.62 16.9199C11.74 16.9699 11.87 16.9999 12 16.9999C12.13 16.9999 12.26 16.9699 12.38 16.9199C12.5 16.8699 12.61 16.7999 12.71 16.7099C12.8 16.6099 12.87 16.5099 12.92 16.3799C12.97 16.2599 13 16.1299 13 15.9999C13 15.8699 12.97 15.7399 12.92 15.6199Z" fill="currentColor"/>
                        </svg>
                        <p class="mb-0">
                            WBETH’s value increases over time as staking rewards accrue after launch. You will get back your initial ETH and earned rewards.
                        </p>
                    </div>
                    <div class="mt-2 text-sm card-border p-2">
                        <div class="d-flex flex-row justify-content-between">
                            <p class="crypt-grayscale-500">Conversion Ratio</p>
                            <p class="crypt-grayscale-500">1 ETH ≈ 0.94773528 WBETH</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <p class="crypt-grayscale-500">Reference APR</p>
                            <p class="crypt-grayscale-500">2.82%</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <p class="crypt-grayscale-500">Monthly Est. Reward</p>
                            <p class="text-up">0 ETH</p>
                        </div>
                    </div>
                    <div class="d-grid mt-5 mb-3">
                        <a class="btn btn-warning" href="#" role="button">Stake</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
</x-user>
