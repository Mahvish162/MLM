
<x-website>
    <div class="row">
                <canvas id="particleCanvas"></canvas>
                <div class="object-circle disable-sm-screen z-0">
                    <img  class="infinite-rotate" src="images/slider/circle-1.png" alt="" width="100">
                </div>
                <div class="bs5-hero text-center mt-5 pt-5 pb-5 z-1">
                    <div class="highlights crypt-grayscale-100 d-inline-block badge bg-success bg-opacity-25 text-uppercase fw-normal mt-5 mb-4">
                        Trusted by ❇️ 10,000 users worldwide
                    </div>
                    <h1 class="crypt-grayscale-100"> 
                        <span class="text-span-orange text-dark mt-4">Buy/Sell</span>,
                        <span class="text-span-2 text-dark">Exchange</span> Crypto 
                    </h1>
                    <h1 class="gd-text">Secure and Hassle-free</h1>
                    <p class="fs-5 crypt-grayscale-300 mt-4">Unleash Crypto Freedom: Limitless, Trustworthy, and Sign-Up Free</p>
                    <div class="d-sm-flex justify-content-center gap-3 pt-5">
                        <a href="{{ route('register') }}" class="btn btn-primary btn-lg text-dark mb-3"><span>Register</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 7L13.5 15.5L8.5 10.5L2 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 7H22V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="{{ route('login') }}">
                        <button class="btn btn-secondary btn-lg btn-dark mb-3">Login</button>
                        </a>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center gap-5">
                    <div class="meta">
                        <h4 class="crypt-blue-200">$12.46B+</h4>
                        <p class="mt-2">24h Trading Volume</p>
                    </div>
                    <div class="meta">
                        <h4 class="crypt-blue-200">2600+</h4>
                        <p class="mt-2">Cryptocurrencies</p>
                    </div>
                    <div class="meta">
                        <h4 class="crypt-blue-200">150%</h4>
                        <p class="mt-2">Simple Earn APR</p>
                    </div>
                </div>
            </div>
            <!-- TradingView Ticker -->
            <div class="mt-5 pb-2 animation-element">
                <div class="tradingview-widget-container__widget">
                    <script src="../../s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
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
        </div>

    </section>
    <!-- Features -->
    <section class="container mt-5">
        <!-- Card -->
        <div class="row mt-5 pt-2">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                <div class="card reward-bg d-sm-flex flex-sm-row gap-3 animation-element p-4 pb-5">
                    <div class="in-view">
                        <h3 class="text-white fw-medium mb-3">Faster trading, better assets</h3>
                        <p class="col-md-7 text-white">
                            The purpose of lorem ipsum is to create a natural looking block of text sentence, paragraph, page, etc.
                        </p>
                        <button class="btn btn-link text-link text-white underline fw-medium text-sm p-0" type="button">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                <div class="card reward-bg3 d-sm-flex flex-sm-row gap-3 animation-element p-4 pb-5">
                    <div class="in-view">
                        <h3 class="text-white fw-medium mb-3">Crypt earn</h3>
                        <p class="col-md-7 text-white">
                            The purpose of lorem ipsum is to create a natural looking block of text sentence, paragraph, page, etc.
                        </p>
                        <button class="btn btn-link text-link text-white underline fw-medium text-sm p-0" type="button">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Crypto highlights -->
    <section class="container animation-element mt-5 pb-4 g-2">
        <div class="d-flex justify-content-between align-items-center">
            <h3>🌈 Crypto highlights</h3>
            <div class="col-auto">
                <a href="market.html" class="btn btn-dark btn-block" tabindex="-1" role="button">All Market</a>
            </div>
        </div>
        <div class="row mt-4 g-2">
            <div class="col-md-8">
                <!-- TradingView Symbol Overview -->
                <div class="tradingview-widget-container card">
                    <div class="tradingview-widget-container__widget">
                        <script  src="../../s3.tradingview.com/external-embedding/embed-widget-symbol-overview.js" async>
                        {
                        "symbols": [
                        [
                        "BINANCE:ETHUSDT|1M"
                        ],
                        [
                        "BINANCE:NEARUSDT|1M"
                        ],
                        [
                        "BINANCE:BTCUSDT|1M"
                        ],
                        [
                        "BINANCE:LINKUSDT|1M"
                        ],
                        [
                        "BINANCE:BNBUSDT|1M"
                        ],
                        [
                        "BINANCE:DOGEUSDT|1M"
                        ],
                        [
                        "BINANCE:SUIUSDT|1M"
                        ],
                        [
                        "BINANCE:FTMUSDT|1M"
                        ],
                        [
                        "BINANCE:SOLUSDT|1M"
                        ]
                        ],
                        "chartOnly": false,
                        "width": "100%",
                        "height": "373",
                        "locale": "en",
                        "colorTheme": "dark",
                        "autosize": true,
                        "showVolume": true,
                        "showMA": true,
                        "hideDateRanges": false,
                        "hideMarketStatus": false,
                        "hideSymbolLogo": false,
                        "scalePosition": "right",
                        "scaleMode": "Normal",
                        "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                        "fontSize": "14",
                        "noTimeScale": false,
                        "valuesTracking": "3",
                        "changeMode": "price-and-percent",
                        "chartType": "area",
                        "maLineColor": "#2962FF",
                        "maLineWidth": 1,
                        "maLength": 9,
                        "headerFontSize": "medium",
                        "backgroundColor": "rgba(19, 23, 34, 0)",
                        "lineType": 0,
                        "dateRanges": [
                        "1d|1",
                        "5d|5",
                        "1m|30",
                        "1D|1D",
                        "60m|1W",
                        "all|1M"
                        ],
                        "upColor": "#22ab94",
                        "downColor": "#f7525f",
                        "borderUpColor": "#22ab94",
                        "borderDownColor": "#f7525f",
                        "wickUpColor": "#22ab94",
                        "wickDownColor": "#f7525f"
                    }
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row g-2">
                    <div class="col-6">
                        <!-- Single Ticker Widget -->
                            <div class="tradingview-widget-container card">
                                <div class="tradingview-widget-container__widget"></div>
                                <script  src="../../s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                                {
                                "symbol": "BINANCE:FTMUSD",
                                "width": "100%",
                                "isTransparent": true,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                                </script>
                            </div>
                    </div>
                    <div class="col-6">
                        <!-- Single Ticker Widget -->
                            <div class="tradingview-widget-container card">
                                <div class="tradingview-widget-container__widget"></div>
                                <script  src="../../s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                                {
                                "symbol": "BINANCE:BTCUSD",
                                "width": "100%",
                                "isTransparent": true,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                                </script>
                            </div>
                    </div>
                    <div class="col-6">
                        <!-- Single Ticker Widget -->
                            <div class="tradingview-widget-container card">
                                <div class="tradingview-widget-container__widget"></div>
                                <script  src="../../s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                                {
                                "symbol": "BINANCE:NEARUSD",
                                "width": "100%",
                                "isTransparent": true,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                                </script>
                            </div>
                    </div>
                    <div class="col-6">
                        <!-- Single Ticker Widget -->
                            <div class="tradingview-widget-container card">
                                <div class="tradingview-widget-container__widget"></div>
                                <script  src="../../s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                                {
                                "symbol": "BINANCE:FTMUSD",
                                "width": "100%",
                                "isTransparent": true,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                                </script>
                            </div>
                    </div>
                    <div class="col-6">
                        <!-- Single Ticker Widget -->
                            <div class="tradingview-widget-container card">
                                <div class="tradingview-widget-container__widget"></div>
                                <script  src="../../s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                                {
                                "symbol": "BINANCE:BNBUSD",
                                "width": "100%",
                                "isTransparent": true,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                                </script>
                            </div>
                    </div>
                    <div class="col-6" id="services">
                        <!-- Single Ticker Widget -->
                            <div class="tradingview-widget-container card">
                                <div class="tradingview-widget-container__widget"></div>
                                <script  src="../../s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                                {
                                "symbol": "BINANCE:DOGEUSD",
                                "width": "100%",
                                "isTransparent": true,
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                                </script>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products & Services -->
    <section class="container mt-5">
        <div class="row mt-5 pt-2 animation-element">
            <div class="text-center in-view">
                <h2>Explore Crypt <span class="gd-text">Products & Services</span></h2>
            </div>
        </div>
        <div class="row mt-5 pt-2">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                <div class="card d-sm-flex flex-sm-row gap-3 animation-element p-4">
                    <div class="in-view">
                        <h4 class="card-title fw-medium mb-3">Spot Trading</h4>
                        <p class="card-text">The purpose of lorem ipsum is to create a natural looking block of text sentence, paragraph, page, etc.</p>
                    </div>
                    <img class="mt-4" alt="" width="140" src="images/icon/spot.svg">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                <div class="card d-sm-flex flex-sm-row gap-3 animation-element p-4">
                    <div class="in-view">
                        <h4 class="card-title fw-medium mb-3">Buy Crypto</h4>
                        <p class="card-text">The purpose of lorem ipsum is to create a natural looking block of text sentence, paragraph, page, etc.</p>
                    </div>
                    <img class="mt-4" alt="" width="140" src="images/icon/funding.svg">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                <div class="card d-sm-flex flex-sm-row gap-3 animation-element p-4">
                    <div class="in-view">
                        <h4 class="card-title fw-medium mb-3">Trading Bot</h4>
                        <p class="card-text">The purpose of lorem ipsum is to create a natural looking block of text sentence, paragraph, page, etc.</p>
                    </div>
                    <img class="mt-4" alt="" width="140" src="images/icon/bot.svg">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                <div class="card d-sm-flex flex-sm-row gap-3 animation-element p-4">
                    <div class="in-view">
                        <h4 class="card-title fw-medium mb-3">Crypt Earn</h4>
                        <p class="card-text">The purpose of lorem ipsum is to create a natural looking block of text.</p>
                    </div>
                    <img class="mt-4 grayscale-item" alt="" width="140" src="images/icon/icon-20.svg">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                <div class="card d-sm-flex flex-sm-row gap-3 animation-element p-4">
                    <div class="in-view">
                        <h4 class="card-title fw-medium mb-3">Margin Trading</h4>
                        <p class="card-text">The purpose of lorem ipsum is to create a natural looking block of text.</p>
                    </div>
                    <img class="mt-4 grayscale-item" alt="" width="140" src="images/icon/icon-23.svg">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                <div class="card d-sm-flex flex-sm-row gap-3 animation-element p-4">
                    <div class="in-view">
                        <h4 class="card-title fw-medium mb-3">Futures Trading</h4>
                        <p class="card-text">The purpose of lorem ipsum is to create a natural looking block of text.</p>
                    </div>
                    <img class="mt-4 grayscale-item" alt="" width="140" src="images/icon/icon-21.svg">
                </div>
            </div>
        </div>
    </section>
    <!-- Scan QR Code -->
    <section class="container animation-element pt-4" id="trading">
        <div class="d-flex flex-row card card-border card-blur pb-0">
            <div class="col-12 col-sm-8 col-md-8 col-lg-7 p-4 pe-5">
                <h2 class="gd-text fw-bold">Trade anytime, anywhere</h2>
                <p class="card-text mb-4">Trade, deposit, and withdraw crypto on the move with our mobile app.</p>
                <div class="d-sm-flex justify-content-between align-items-center card-border animation-element p-4">
                    <div class="in-view">
                        <h4 class="crypt-grayscale-100 fw-medium mb-3">Scan QR Code</h4>
                        <div class="crypto-has-dropdown fw-medium crypt-grayscale-400 mt-3" role="button">
                            <svg width="24" height="24" viewBox="0 0 1024 1024" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M213.344 170.656c-23.552 0-42.656 19.104-42.656 42.656v106.656a42.656 42.656 0 01-85.312 0V213.312a128 128 0 01128-128h106.656a42.656 42.656 0 010 85.312H213.376zM128 661.344c23.552 0 42.656 19.104 42.656 42.656v106.656c0 23.552 19.104 42.656 42.656 42.656h106.656a42.656 42.656 0 010 85.312H213.312a128 128 0 01-128-128V703.968c0-23.552 19.104-42.656 42.656-42.656zM938.656 704a42.656 42.656 0 00-85.312 0v106.656c0 23.552-19.104 42.656-42.656 42.656H704.032a42.656 42.656 0 000 85.312h106.656a128 128 0 00128-128V703.968zM661.344 128c0-23.552 19.104-42.656 42.656-42.656h106.656a128 128 0 01128 128V320a42.656 42.656 0 01-85.312 0V213.344c0-23.552-19.104-42.656-42.656-42.656H704.032a42.656 42.656 0 01-42.656-42.656zm-448 341.344a42.656 42.656 0 000 85.312h597.344a42.656 42.656 0 000-85.312H213.344z"></path>
                            </svg>
                            Scan the QR code to log in or Open Crypt app.
                        </div>
                        <div class="mt-3">
                            <p class="crypt-grayscale-500">Don't have an account? <a href="signup.html" class="link-primary fw-bold">Sign up</a></p>
                        </div>
                    </div>
                    <div class="d-inline-block card text-bg-light in-view">
                        <img alt="" width="140" src="images/features/qr.svg">
                    </div>
                </div>
                <p class="crypt-grayscale-500 mt-4">Download now</p>
                <div class="d-sm-flex gap-3 mt-2 mb-2 text-center">
                    <a href="#!" class="d-flex btn btn-outline-secondary text-light card-border justify-content-between align-items-center py-2 gap-4 mb-2" data-bs-toggle="button">App Store
                        <img alt="" width="32" src="images/icon/app-store.svg">
                    </a>
                    <a href="#!" class="d-flex btn btn-outline-secondary text-light card-border justify-content-between align-items-center py-2 gap-4 mb-2" data-bs-toggle="button">Google Play
                        <img alt="" width="32" src="images/icon/google-play.svg">
                    </a>
                    <a href="#!" class="d-flex btn btn-outline-secondary text-light card-border justify-content-between align-items-center py-2 gap-4 mb-2" data-bs-toggle="button">Android APK
                        <img alt="" width="32" src="images/icon/andorid.svg">
                    </a>
                </div>
                <div class="card card-border gd-bg p-3">
                    <div class="d-sm-flex gap-2 align-items-center text-center">
                        <span class="text-span-1 text-dark">BEP-20</span>
                        <span class="text-span-grape text-dark">ERC-20</span> 
                        <span class="text-span-2 text-dark">ERC-721</span>
                        <span class="text-span-orange text-dark">ERC-1155</span>
                    </div>
                    <div class="crypt-scroll mt-3">
                        <div class="crypt-scrolling">
                            <div><img  style="width:48px;" src="images/coin/btc.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/eth.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/sol.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/tron.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/avax.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/apex.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/link.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/arb.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/stx.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/near.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/bnb.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/op.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/mnt.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/pepe.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/dot.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/ada.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/kas.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/sui.svg" alt=""></div>
                            <div><img  style="width:48px;" src="images/coin/wld.svg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-5 align-self-end">
                <img  class="pt-4" style="width:100%;" src="images/features/f-18.png" alt="">
            </div>
        </div>
    </section>
    <!-- Instant swap -->
    <section class="container animation-element mt-5 pt-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img class="grayscale-item" style="width:100%;" src="images/slider/crypt02.png" alt="">
            </div>
            <div class="col-md-6 p-5">
                <div class="text-left">
                    <h2 class="heading">Instant swap with <br>cashback</h2>
                    <p class="crypt-grayscale-400 mt-3">
                        Lorem ipsum dolor enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur, excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
                <div class="d-flex flex-row gap-2 align-items-center">
                    <img class="grayscale-item" style="width:26px;" src="images/icon/check-fill.svg" alt="">
                    <h6 class="lh-lg">Buy, sell, and store hundreds of cryptocurrencies</h6>
                </div>
                <div class="d-flex flex-row gap-2 align-items-center">
                    <img class="grayscale-item" style="width:26px;" src="images/icon/check-fill.svg" alt="">
                    <h6 class="lh-lg">Powerful tools, designed for the advanced trader</h6>
                </div>
                <div class="d-flex flex-row gap-2 align-items-center mb-4">
                    <img class="grayscale-item" style="width:26px;" src="images/icon/check-fill.svg" alt="">
                    <h6 class="lh-lg">Deposit crypto easily from exchanges</h6>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <a class="btn btn-editor btn-info" href="trading-bots.html" role="button">Start Copy Trading</a>
                    <button class="btn btn-link text-link underline crypt-grayscale-600 fw-medium text-sm" type="button">Learn more</button>
                </div>
            </div>
        </div>
    </section>
    <!-- See your crypto -->
    <section class="container animation-element mt-5">
        <!-- Benefits -->
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-7 p-5">
                <div class="text-left">
                    <h2>See your crypto and collectibles in one place</h2>
                    <p class="crypt-grayscale-400 mt-3">You can receive your payments in your digital wallet in crypto or 
                        <br>in your bank account in fiat — it’s your choice.</p>
                </div>
                <div class="d-flex flex-row gap-2 align-items-center">
                    <img class="grayscale-item" alt="" style="width:26px;" src="images/icon/check-fill.svg">
                    <h6 class="lh-lg">80% reward for LPs</h6>
                </div>
                <div class="d-flex flex-row gap-2 align-items-center">
                    <img class="grayscale-item" alt="" style="width:26px;" src="images/icon/check-fill.svg">
                    <h6 class="lh-lg">Flexible trading & low slippage</h6>
                </div>
                <div class="d-flex flex-row gap-2 align-items-center">
                    <img class="grayscale-item" alt="" style="width:26px;" src="images/icon/check-fill.svg">
                    <h6 class="lh-lg">Limit orders with 0% fee</h6>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title mb-2">One account. Over <span class="badge text-bg-warning text-dark fs-6 fw-bold">300+</span> partners.</h5>
                        <p class="card-text">The purpose of lorem ipsum is to create a natural looking block of text sentence, paragraph, page, etc.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card gd-bg">
                            <h3 class="crypt-red-500">50+</h3>
                            <p class="card-text">Cryptocurrencies</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card gd-bg">
                            <h3 class="crypt-blue-500">$48.51B</h3>
                            <p class="card-text">Total volume</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card gd-bg">
                            <h3 class="crypt-cyan-500">923K+</h3>
                            <p class="card-text">User accounts</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-5">
                <img  alt="" style="width:100%;" src="images/slider/rewards.svg">
            </div>
        </div>
        <!-- Trusted by industry leaders -->
        <div class="row mt-3 animation-element">
            <h5 class="gd-text text-center text-uppercase">Trusted by industry leaders</h5>
            <div class="partner grayscale-item crypt-scroll in-view">
                <div class="crypt-scrolling scroll-right">
                    <div><img alt="" style="width:200px;" src="images/partner/logo-3.svg"></div>
                    <div><img alt="" style="width:200px;" src="images/partner/logo-2.svg"></div>
                    <div><img alt="" style="width:200px;" src="images/partner/logo-4.svg"></div>
                    <div><img alt="" style="width:200px;" src="images/partner/logo-9.svg"></div>
                    <div><img alt="" style="width:200px;" src="images/partner/logo-10.svg"></div>
                    <div><img alt="" style="width:200px;" src="images/partner/logo-5.svg"></div>
                    <div><img alt="" style="width:200px;" src="images/partner/logo-3.svg"></div>
                    <div><img alt="" style="width:200px;" src="images/partner/logo-2.svg"></div>
                    <div><img alt="" style="width:200px;" src="images/partner/logo-4.svg"></div>
                    <div><img alt="" style="width:200px;" src="images/partner/logo-9.svg"></div>
                    <div><img alt="" style="width:200px;" src="images/partner/logo-10.svg"></div>
                    <div><img alt="" style="width:200px;" src="images/partner/logo-5.svg"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Benefits -->
    <section class="container animation-element mt-5 pt-4">
        <div class="text-center">
            <h2>Benefits of <br>buying crypto with <span class="gd-text">Swaps</span></h2>
            <p class="card-text crypt-grayscale-500 mt-3">All your tokens, DeFi positions, NFT collections, and transaction <br>history across all major networks.
             </p>
        </div>
        <div class="row pt-5">
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card-lg-3 bg-1">
                    <h3 class="text-dark">Crypto Swap</h3>
                    <p class="card-text mt-2 text-dark">Seamless crypto exchanges across multiple blockchains without limits.</p>
                    <div class="mt-5">
                        <img alt="" style="width:100%;" src="images/features/f-1.png">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card-lg-3 bg-2">
                    <h3 class="text-dark">Buy/Sell</h3>
                    <p class="card-text mt-2 text-dark">Trading alerts were never this powerful, flexible and easy to use.</p>
                    <div class="mt-5">
                        <img class="" alt="" style="width:100%;" src="images/features/f-23.png">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card-lg-3 bg-3">
                    <h3 class="text-dark">Trading Crypto</h3>
                    <p class="card-text mt-2 text-dark">Test ready-made or self-written strategies in real-time based on historical data.</p>
                    <div class="mt-5 ">
                        <img alt="" style="width:100%;" src="images/features/f-20.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews -->
    <section class="container animation-element mt-5 pt-5 section-wrapper-2">
        <h2 class="text-center">Trusted by millions</h2>
        <div class="row mt-5">
            <div class="col-md-6 col-xl-4 mb-4">
                <div class="testimonial">
                    <img style="width:32px;" src="images/icon/quote.svg" alt="">
                    <p class="fs-5 mt-4">"We like how Onramper consistently matches our users with the best option for their needs. Transactions are smooth, and extensive APM support means we can serve a global audience."</p>
                    <div class="d-flex flex-row align-items-center gap-3">
                        <img class="avater" src="images/blog/tv.jpg"  alt="">
                        <div class="card-text">
                            <h5 class="card-title">Benjamin Usinger</h5>
                            <p class="card-title">TradingView</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mb-4">
                <div class="testimonial">
                    <img style="width:32px;" src="images/icon/quote.svg" alt="">
                    <p class="fs-5 mt-4">"We like how Onramper consistently matches our users with the best option for their needs. Transactions are smooth, and extensive APM support means we can serve a global audience."</p>
                    <div class="d-flex flex-row align-items-center gap-3">
                        <img class="avater" src="images/blog/tv.jpg"  alt="">
                        <div class="card-text">
                            <h5 class="card-title">Benjamin Usinger</h5>
                            <p class="card-title">TradingView</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mb-4">
                <div class="testimonial">
                    <img style="width:32px;" src="images/icon/quote.svg" alt="">
                    <p class="fs-5 mt-4">"We like how Onramper consistently matches our users with the best option for their needs. Transactions are smooth, and extensive APM support means we can serve a global audience."</p>
                    <div class="d-flex flex-row align-items-center gap-3">
                        <img class="avater" src="images/blog/tv.jpg"  alt="">
                        <div class="card-text">
                            <h5 class="card-title">Benjamin Usinger</h5>
                            <p class="card-title">TradingView</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="container animation-element mt-4 mt-sm-5 pt-0 pt-sm-4">
        <div class="text-center">
            <h2>Stay Updated with Our Blog</h2>
        </div>
        <div class="row pt-5">
            <div class="col-12 col-md-4 mb-4">
                <a href="blog-single.html" class="blog-card">
                    <div class="thumb" style="background-image: url(images/blog/blog-12.jpg);"></div>
                    <div class="meta p-3">
                        <span class="badge badge text-uppercase text-bg-success">Metaverse</span>
                        <h5 class="title-link">FOMC holds rates steady, Bitcoin and Ethereum price decline</h5>
                        <p class="crypt-grayscale-600">2 mins read / updated on Tue Dec 29 2024</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <a href="blog-single.html" class="blog-card">
                    <div class="thumb" style="background-image: url(images/blog/blog-13.jpg);"></div>
                    <div class="meta p-3">
                        <span class="badge badge text-uppercase text-bg-info">Ethereum</span>
                        <h5 class="title-link">Restaking with ETHx | Boosted reward programs</h5>
                        <p class="crypt-grayscale-600">4 mins read / updated on Fri Oct 15 2024</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <a href="blog-single.html" class="blog-card">
                    <div class="thumb" style="background-image: url(images/blog/blog-14.jpg);"></div>
                    <div class="meta p-3" id="Faqs">
                        <span class="badge badge text-uppercase text-bg-warning">Trading</span>
                        <h5 class="title-link">Wrapping tokens enables broader across the Web3 ecosystem</h5>
                        <p class="crypt-grayscale-600">5 mins read / updated on Sat May 22 2024</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- FAQ -->
    <section class="container animation-element faqs mt-5 pt-4">
        <h2 class="text-center">FAQ</h2>
        <div class="accordion pt-5 pb-4" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What are the benefits of staking?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        The passage experienced today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What is a blockchain API?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How do I get blockchain API?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        The passage experienced a surge in popularity during the 1980s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web on templates, websites, and stock designs.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How do nodes work?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        The placeholder text, beginning with the line “Lorem ipsum dolor sit amet, consectetur adipiscing elit”, looks like Latin because in its youth, centuries ago, it was Latin.
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                <a class="btn btn-up" href="#" role="button">Buy USDT</a>
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
    <!-- Modal (Connect Wallet) -->
    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <div>
                        <h5 class="crypt-grayscale-100 fw-bold mb-0">Connect a wallet</h5>
                        <p class="crypt-grayscale-500 mb-0">Choose your favourite wallet to log in.</p>
                    </div>
                    <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
                        <svg class="close-notify" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <small class="crypt-grayscale-500">Popular wallet</small>
                    <div class="flex mt-2">
                        <a class="btn btn-dark d-flex justify-content-between align-items-center mb-2" href="#!">
                            Metamask 
                            <img src="images/icon/metamask.svg" alt="" width="32">
                        </a>
                        <a class="btn btn-dark d-flex justify-content-between align-items-center mb-2" href="#!">
                            WalletConnect 
                            <img src="images/icon/walletconnect.svg" alt="" width="32">
                        </a>
                        <a class="btn btn-dark d-flex justify-content-between align-items-center mb-2" href="#!">
                            Phantom 
                            <img src="images/icon/phantom.svg" alt="" width="32">
                        </a>
                        <a class="btn btn-dark d-flex justify-content-between align-items-center mb-2" href="#!">
                            Coinbase Wallet 
                            <img src="images/icon/coinbase.svg" alt="" width="32">
                        </a>
                        <a class="btn btn-dark d-flex justify-content-between align-items-center mb-2" href="#!">
                            Rainbow 
                            <img src="images/icon/rainbow.svg" alt="" width="32">
                        </a>
                    </div>
                    <div class="text-center mt-4 mb-4">
                        <a class="text-link fs-6 crypt-grayscale-500 fw-medium " href="login.html">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.5 10.5V14.5H17.5C16.9696 14.5 16.4609 14.2893 16.0858 13.9142C15.7107 13.5391 15.5 13.0304 15.5 12.5C15.5 11.9696 15.7107 11.4609 16.0858 11.0858C16.4609 10.7107 16.9696 10.5 17.5 10.5H21.5ZM18 12.69C18.0149 12.6275 18.0149 12.5625 18 12.5C18.0008 12.4344 17.9879 12.3694 17.962 12.3091C17.9362 12.2489 17.898 12.1946 17.85 12.15C17.7565 12.0584 17.6309 12.0071 17.5 12.0071C17.3691 12.0071 17.2435 12.0584 17.15 12.15C17.102 12.1946 17.0638 12.2489 17.038 12.3091C17.0121 12.3694 16.9992 12.4344 17 12.5C16.9979 12.5658 17.0102 12.6312 17.0362 12.6916C17.0621 12.7521 17.1009 12.8062 17.15 12.85C17.1949 12.8978 17.2491 12.936 17.3093 12.962C17.3695 12.9881 17.4344 13.0015 17.5 13.0015C17.5656 13.0015 17.6305 12.9881 17.6907 12.962C17.7509 12.936 17.8051 12.8978 17.85 12.85C17.9154 12.8136 17.9679 12.7576 18 12.69Z" fill="#facc15"/>
                                <path d="M18 12.5C18.0149 12.5625 18.0149 12.6275 18 12.69C17.9787 12.7524 17.9407 12.8078 17.89 12.85C17.8451 12.8978 17.7909 12.936 17.7307 12.962C17.6705 12.9881 17.6056 13.0015 17.54 13.0015C17.4744 13.0015 17.4095 12.9881 17.3493 12.962C17.2891 12.936 17.2349 12.8978 17.19 12.85C17.1336 12.8102 17.0872 12.7579 17.0542 12.6972C17.0213 12.6365 17.0027 12.569 17 12.5C16.9992 12.4344 17.0122 12.3694 17.038 12.3091C17.0638 12.2489 17.102 12.1947 17.15 12.15C17.2435 12.0584 17.3692 12.0071 17.5 12.0071C17.6309 12.0071 17.7566 12.0584 17.85 12.15C17.8981 12.1947 17.9362 12.2489 17.9621 12.3091C17.9879 12.3694 18.0008 12.4344 18 12.5Z" fill="currentColor"/>
                                <path d="M18.5 20H5.5C4.83696 20 4.20107 19.7366 3.73223 19.2678C3.26339 18.7989 3 18.163 3 17.5V7.5C3 6.83696 3.26339 6.20107 3.73223 5.73223C4.20107 5.26339 4.83696 5 5.5 5H18.5C19.163 5 19.7989 5.26339 20.2678 5.73223C20.7366 6.20107 21 6.83696 21 7.5V10.5C21 10.6326 20.9473 10.7598 20.8536 10.8536C20.7598 10.9473 20.6326 11 20.5 11C20.3674 11 20.2402 10.9473 20.1464 10.8536C20.0527 10.7598 20 10.6326 20 10.5V7.5C20 7.10218 19.842 6.72064 19.5607 6.43934C19.2794 6.15804 18.8978 6 18.5 6H5.5C5.10218 6 4.72064 6.15804 4.43934 6.43934C4.15804 6.72064 4 7.10218 4 7.5V17.5C4 17.8978 4.15804 18.2794 4.43934 18.5607C4.72064 18.842 5.10218 19 5.5 19H18.5C18.8978 19 19.2794 18.842 19.5607 18.5607C19.842 18.2794 20 17.8978 20 17.5V14.5C20 14.3674 20.0527 14.2402 20.1464 14.1464C20.2402 14.0527 20.3674 14 20.5 14C20.6326 14 20.7598 14.0527 20.8536 14.1464C20.9473 14.2402 21 14.3674 21 14.5V17.5C21 18.163 20.7366 18.7989 20.2678 19.2678C19.7989 19.7366 19.163 20 18.5 20Z" fill="currentColor"/>
                                <path d="M21.5 15.0001H17.5C16.837 15.0001 16.2011 14.7367 15.7323 14.2679C15.2634 13.799 15 13.1632 15 12.5001C14.9985 12.1706 15.0633 11.8441 15.1904 11.54C15.3175 11.2359 15.5044 10.9605 15.74 10.7301C15.9691 10.4961 16.243 10.3109 16.5455 10.1854C16.8479 10.06 17.1726 9.99694 17.5 10.0001H21.5C21.6326 10.0001 21.7598 10.0528 21.8536 10.1466C21.9473 10.2403 22 10.3675 22 10.5001V14.5001C22 14.6327 21.9473 14.7599 21.8536 14.8537C21.7598 14.9474 21.6326 15.0001 21.5 15.0001ZM17.5 11.0001C17.1038 11.0053 16.7253 11.165 16.4451 11.4452C16.1649 11.7254 16.0052 12.1039 16 12.5001C16 12.8979 16.1581 13.2795 16.4394 13.5608C16.7207 13.8421 17.1022 14.0001 17.5 14.0001H21V11.0001H17.5Z" fill="currentColor"/>
                            </svg>
                            I don't have a wallet
                        </a>
                    </div>
                </div>
                <div class="modal-footer d-flex flex-column justify-content-center">
                    <p class="text-sm crypt-grayscale-400">By connecting your wallet you agree to the</p>
                    <a href="#" class="text-sm">Terms of Service</a>
                </div>
            </div>
      </div>
    </div>

    <!-- Demos -->
    <div class="offcanvas offcanvas-end" tabindex="0" id="offcanvasDemos">

        <!-- offcanvas header -->
        <div class="offcanvas-header card-line">
            <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 fw-bold mb-0">35+ Pre-Made Demos</h5>
            <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg class="close-notify" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>

        <!-- offcanvas body -->
        <div class="offcanvas-body">
            <div class="row g-3">

                <!-- Demo-1 -->
                <div class="card">
                    <img src="images/demos/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-between">
                        <h5 class="card-title fw-bold">✴ Template 1</h5>
                        <a href="template-1.html" class="meme-perspective-btn snork text-sm my-1 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <style>
                                  .eye-1 {
                                    animation: eye 2.4s infinite;
                                  }
                              
                                  .eye-2 {
                                    animation: squeeze 2.4s infinite;
                                  }
                              
                                  @keyframes eye {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(15px) scaleY(0)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                              
                                  @keyframes squeeze {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(3px) scaleY(0.8)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                                </style>
                                <path class="eye-1" stroke="#fff" stroke-width="1.5"
                                  d="M19.195 11.31c.325.41.325.97 0 1.38-1.114 1.4-3.916 4.45-7.195 4.45-3.28 0-6.08-3.05-7.195-4.45a1.097 1.097 0 010-1.38C5.92 9.91 8.721 6.86 12 6.86c3.28 0 6.08 3.05 7.195 4.45z" />
                                <circle class="eye-2" cx="12" cy="12" r="1.972" stroke="#fff" stroke-width="1.5" />
                            </svg>
                            View
                        </a>
                    </div>
                </div>
                <!-- Demo-2 -->
                <div class="card">
                    <img src="images/demos/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-between">
                        <h5 class="card-title fw-bold">✴ Template 2</h5>
                        <a href="template-2.html" class="meme-perspective-btn snork text-sm my-1 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <style>
                                  .eye-1 {
                                    animation: eye 2.4s infinite;
                                  }
                              
                                  .eye-2 {
                                    animation: squeeze 2.4s infinite;
                                  }
                              
                                  @keyframes eye {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(15px) scaleY(0)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                              
                                  @keyframes squeeze {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(3px) scaleY(0.8)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                                </style>
                                <path class="eye-1" stroke="#fff" stroke-width="1.5"
                                  d="M19.195 11.31c.325.41.325.97 0 1.38-1.114 1.4-3.916 4.45-7.195 4.45-3.28 0-6.08-3.05-7.195-4.45a1.097 1.097 0 010-1.38C5.92 9.91 8.721 6.86 12 6.86c3.28 0 6.08 3.05 7.195 4.45z" />
                                <circle class="eye-2" cx="12" cy="12" r="1.972" stroke="#fff" stroke-width="1.5" />
                            </svg>
                            View
                        </a>
                    </div>
                </div>
                <!-- Demo-3 -->
                <div class="card">
                    <img src="images/demos/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-between">
                        <h5 class="card-title fw-bold">✴ Template 3</h5>
                        <a href="template-3.html" class="meme-perspective-btn snork text-sm my-1 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <style>
                                  .eye-1 {
                                    animation: eye 2.4s infinite;
                                  }
                              
                                  .eye-2 {
                                    animation: squeeze 2.4s infinite;
                                  }
                              
                                  @keyframes eye {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(15px) scaleY(0)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                              
                                  @keyframes squeeze {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(3px) scaleY(0.8)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                                </style>
                                <path class="eye-1" stroke="#fff" stroke-width="1.5"
                                  d="M19.195 11.31c.325.41.325.97 0 1.38-1.114 1.4-3.916 4.45-7.195 4.45-3.28 0-6.08-3.05-7.195-4.45a1.097 1.097 0 010-1.38C5.92 9.91 8.721 6.86 12 6.86c3.28 0 6.08 3.05 7.195 4.45z" />
                                <circle class="eye-2" cx="12" cy="12" r="1.972" stroke="#fff" stroke-width="1.5" />
                            </svg>
                            View
                        </a>
                    </div>
                </div>
                <!-- Demo-4 -->
                <div class="card">
                    <img src="images/demos/4.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-between">
                        <h5 class="card-title fw-bold">✴ Template 4</h5>
                        <a href="template-4.html" class="meme-perspective-btn snork text-sm my-1 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <style>
                                  .eye-1 {
                                    animation: eye 2.4s infinite;
                                  }
                              
                                  .eye-2 {
                                    animation: squeeze 2.4s infinite;
                                  }
                              
                                  @keyframes eye {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(15px) scaleY(0)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                              
                                  @keyframes squeeze {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(3px) scaleY(0.8)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                                </style>
                                <path class="eye-1" stroke="#fff" stroke-width="1.5"
                                  d="M19.195 11.31c.325.41.325.97 0 1.38-1.114 1.4-3.916 4.45-7.195 4.45-3.28 0-6.08-3.05-7.195-4.45a1.097 1.097 0 010-1.38C5.92 9.91 8.721 6.86 12 6.86c3.28 0 6.08 3.05 7.195 4.45z" />
                                <circle class="eye-2" cx="12" cy="12" r="1.972" stroke="#fff" stroke-width="1.5" />
                            </svg>
                            View
                        </a>
                    </div>
                </div>
                <!-- Demo-5 -->
                <div class="card">
                    <img src="images/demos/5.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-between">
                        <h5 class="card-title fw-bold">✴ Template 5</h5>
                        <a href="template-5.html" class="meme-perspective-btn snork text-sm my-1 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <style>
                                  .eye-1 {
                                    animation: eye 2.4s infinite;
                                  }
                              
                                  .eye-2 {
                                    animation: squeeze 2.4s infinite;
                                  }
                              
                                  @keyframes eye {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(15px) scaleY(0)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                              
                                  @keyframes squeeze {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(3px) scaleY(0.8)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                                </style>
                                <path class="eye-1" stroke="#fff" stroke-width="1.5"
                                  d="M19.195 11.31c.325.41.325.97 0 1.38-1.114 1.4-3.916 4.45-7.195 4.45-3.28 0-6.08-3.05-7.195-4.45a1.097 1.097 0 010-1.38C5.92 9.91 8.721 6.86 12 6.86c3.28 0 6.08 3.05 7.195 4.45z" />
                                <circle class="eye-2" cx="12" cy="12" r="1.972" stroke="#fff" stroke-width="1.5" />
                            </svg>
                            View
                        </a>
                    </div>
                </div>
                <!-- Demo-6 -->
                <div class="card">
                    <img src="images/demos/6.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-between">
                        <h5 class="card-title fw-bold">✴ Template 6</h5>
                        <a href="template-6.html" class="meme-perspective-btn snork text-sm my-1 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <style>
                                  .eye-1 {
                                    animation: eye 2.4s infinite;
                                  }
                              
                                  .eye-2 {
                                    animation: squeeze 2.4s infinite;
                                  }
                              
                                  @keyframes eye {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(15px) scaleY(0)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                              
                                  @keyframes squeeze {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(3px) scaleY(0.8)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                                </style>
                                <path class="eye-1" stroke="#fff" stroke-width="1.5"
                                  d="M19.195 11.31c.325.41.325.97 0 1.38-1.114 1.4-3.916 4.45-7.195 4.45-3.28 0-6.08-3.05-7.195-4.45a1.097 1.097 0 010-1.38C5.92 9.91 8.721 6.86 12 6.86c3.28 0 6.08 3.05 7.195 4.45z" />
                                <circle class="eye-2" cx="12" cy="12" r="1.972" stroke="#fff" stroke-width="1.5" />
                            </svg>
                            View
                        </a>
                    </div>
                </div>
                <!-- Demo-7 -->
                <div class="card">
                    <img src="images/demos/7.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-between">
                        <h5 class="card-title fw-bold">✴ Template 7</h5>
                        <a href="template-7.html" class="meme-perspective-btn snork text-sm my-1 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <style>
                                  .eye-1 {
                                    animation: eye 2.4s infinite;
                                  }
                              
                                  .eye-2 {
                                    animation: squeeze 2.4s infinite;
                                  }
                              
                                  @keyframes eye {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(15px) scaleY(0)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                              
                                  @keyframes squeeze {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(3px) scaleY(0.8)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                                </style>
                                <path class="eye-1" stroke="#fff" stroke-width="1.5"
                                  d="M19.195 11.31c.325.41.325.97 0 1.38-1.114 1.4-3.916 4.45-7.195 4.45-3.28 0-6.08-3.05-7.195-4.45a1.097 1.097 0 010-1.38C5.92 9.91 8.721 6.86 12 6.86c3.28 0 6.08 3.05 7.195 4.45z" />
                                <circle class="eye-2" cx="12" cy="12" r="1.972" stroke="#fff" stroke-width="1.5" />
                            </svg>
                            View
                        </a>
                    </div>
                </div>
                <!-- Demo-8 -->
                <div class="card">
                    <img src="images/demos/8.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-between">
                        <h5 class="card-title fw-bold">✴ Template 8</h5>
                        <a href="template-8.html" class="meme-perspective-btn snork text-sm my-1 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <style>
                                  .eye-1 {
                                    animation: eye 2.4s infinite;
                                  }
                              
                                  .eye-2 {
                                    animation: squeeze 2.4s infinite;
                                  }
                              
                                  @keyframes eye {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(15px) scaleY(0)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                              
                                  @keyframes squeeze {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(3px) scaleY(0.8)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                                </style>
                                <path class="eye-1" stroke="#fff" stroke-width="1.5"
                                  d="M19.195 11.31c.325.41.325.97 0 1.38-1.114 1.4-3.916 4.45-7.195 4.45-3.28 0-6.08-3.05-7.195-4.45a1.097 1.097 0 010-1.38C5.92 9.91 8.721 6.86 12 6.86c3.28 0 6.08 3.05 7.195 4.45z" />
                                <circle class="eye-2" cx="12" cy="12" r="1.972" stroke="#fff" stroke-width="1.5" />
                            </svg>
                            View
                        </a>
                    </div>
                </div>
                <!-- Demo-9 -->
                <div class="card">
                    <img src="images/demos/9.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-between">
                        <h5 class="card-title fw-bold">✴ Template 9</h5>
                        <a href="template-9.html" class="meme-perspective-btn snork text-sm my-1 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <style>
                                  .eye-1 {
                                    animation: eye 2.4s infinite;
                                  }
                              
                                  .eye-2 {
                                    animation: squeeze 2.4s infinite;
                                  }
                              
                                  @keyframes eye {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(15px) scaleY(0)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                              
                                  @keyframes squeeze {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(3px) scaleY(0.8)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                                </style>
                                <path class="eye-1" stroke="#fff" stroke-width="1.5"
                                  d="M19.195 11.31c.325.41.325.97 0 1.38-1.114 1.4-3.916 4.45-7.195 4.45-3.28 0-6.08-3.05-7.195-4.45a1.097 1.097 0 010-1.38C5.92 9.91 8.721 6.86 12 6.86c3.28 0 6.08 3.05 7.195 4.45z" />
                                <circle class="eye-2" cx="12" cy="12" r="1.972" stroke="#fff" stroke-width="1.5" />
                            </svg>
                            View
                        </a>
                    </div>
                </div>
                <!-- Demo-10 -->
                <div class="card">
                    <img src="images/demos/10.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-between">
                        <h5 class="card-title fw-bold">✴ Template 10</h5>
                        <a href="template-10.html" class="meme-perspective-btn snork text-sm my-1 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <style>
                                  .eye-1 {
                                    animation: eye 2.4s infinite;
                                  }
                              
                                  .eye-2 {
                                    animation: squeeze 2.4s infinite;
                                  }
                              
                                  @keyframes eye {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(15px) scaleY(0)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                              
                                  @keyframes squeeze {
                                    90% {
                                      transform: none;
                                      animation-timing-function: ease-in;
                                    }
                              
                                    93% {
                                      transform: translateY(3px) scaleY(0.8)
                                    }
                              
                                    100% {
                                      animation-timing-function: ease-out;
                                    }
                                  }
                                </style>
                                <path class="eye-1" stroke="#fff" stroke-width="1.5"
                                  d="M19.195 11.31c.325.41.325.97 0 1.38-1.114 1.4-3.916 4.45-7.195 4.45-3.28 0-6.08-3.05-7.195-4.45a1.097 1.097 0 010-1.38C5.92 9.91 8.721 6.86 12 6.86c3.28 0 6.08 3.05 7.195 4.45z" />
                                <circle class="eye-2" cx="12" cy="12" r="1.972" stroke="#fff" stroke-width="1.5" />
                            </svg>
                            View
                        </a>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
    <!-- Appearance Drawer -->
    <div class="container-fluid">
        <div class="drawer" popover="auto" id="drawer">
            <div class="drawer__scroller">
                <div class="drawer__slide">
                    <div class="drawer__anchors">
                        <div class="drawer__anchor"></div>
                        <div class="drawer__anchor"></div>
                    </div>
                    <!-- Acts like a backdrop button so you don't body click -->
                    <div class="drawer__content">
                        <button autofocus class="drawer__drag border-line pb-5" popovertarget="drawer">
                            <span class="pb-1"></span>
                            <span class="mt-2">No Bullshit. It’s that simple. Just enjoy!</span>
                        </button>
                        <div class="content p-4 mt-4">
                            <!-- Preferences -->
                            <h4 class="crypt-grayscale-100 fw-bold mb-4 mt-3">Preferences</h4>
                            <!-- Style Settings -->
                            <div class="row align-items-center justify-content-between mb-4 mb-sm-3">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex align-items-center gap-2 text-primary">
                                        <div class="flex mb-3">
                                            <svg class="text-primary" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4" d="M22 16.5V19.5C22 21 21 22 19.5 22H6C6.41 22 6.83 21.94 7.22 21.81C7.33 21.77 7.43999 21.73 7.54999 21.68C7.89999 21.54 8.24001 21.34 8.54001 21.08C8.63001 21.01 8.73001 20.92 8.82001 20.83L8.85999 20.79L15.66 14H19.5C21 14 22 15 22 16.5Z" fill="currentColor"/>
                                                <path opacity="0.6" d="M18.3699 11.29L15.6599 14L8.85986 20.79C9.55986 20.07 9.99988 19.08 9.99988 18V8.33996L12.7099 5.62996C13.7699 4.56996 15.1899 4.56996 16.2499 5.62996L18.3699 7.74996C19.4299 8.80996 19.4299 10.23 18.3699 11.29Z" fill="currentColor"/>
                                                <path d="M7.5 2H4.5C3 2 2 3 2 4.5V18C2 18.27 2.02999 18.54 2.07999 18.8C2.10999 18.93 2.13999 19.06 2.17999 19.19C2.22999 19.34 2.28 19.49 2.34 19.63C2.35 19.64 2.35001 19.65 2.35001 19.65C2.36001 19.65 2.36001 19.65 2.35001 19.66C2.49001 19.94 2.65 20.21 2.84 20.46C2.95 20.59 3.06001 20.71 3.17001 20.83C3.28001 20.95 3.4 21.05 3.53 21.15L3.54001 21.16C3.79001 21.35 4.06 21.51 4.34 21.65C4.35 21.64 4.35001 21.64 4.35001 21.65C4.50001 21.72 4.65 21.77 4.81 21.82C4.94 21.86 5.07001 21.89 5.20001 21.92C5.46001 21.97 5.73 22 6 22C6.41 22 6.83 21.94 7.22 21.81C7.33 21.77 7.43999 21.73 7.54999 21.68C7.89999 21.54 8.24001 21.34 8.54001 21.08C8.63001 21.01 8.73001 20.92 8.82001 20.83L8.85999 20.79C9.55999 20.07 10 19.08 10 18V4.5C10 3 9 2 7.5 2ZM6 19.5C5.17 19.5 4.5 18.83 4.5 18C4.5 17.17 5.17 16.5 6 16.5C6.83 16.5 7.5 17.17 7.5 18C7.5 18.83 6.83 19.5 6 19.5Z" fill="currentColor"/>
                                            </svg>
                                        </div>
                                        <div class="flex">
                                            <div class="d-flex align-items-center gap-2">
                                                <h6 class="text-light fs-6 fw-bold">Style Settings</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex justify-content-sm-end align-items-center gap-2 text-primary">
                                        <div class="d-flex flex-row gap-2 align-items-center">
                                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#facc15" title="Choose your color">
                                            <label class="crypt-grayscale-300">Fresh</label>
                                        </div>
                                        <a href="#!" class="btn btn-editor btn-dark text-sm ms-2" role="button">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <!-- UTC Time Zone -->
                            <div class="row align-items-center justify-content-between mb-4 mb-sm-3">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex align-items-center gap-2 text-primary">
                                        <div class="flex mb-3">
                                            <svg class="text-info" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4" d="M18.35 19.68C17.8 21.09 16.46 22 14.95 22H9.04998C7.52998 22 6.19998 21.09 5.64998 19.68C5.09998 18.26 5.47998 16.69 6.59998 15.67L10.65 12H13.36L17.4 15.67C18.52 16.69 18.89 18.26 18.35 19.68Z" fill="currentColor"/>
                                                <path d="M13.82 18.14H10.18C9.8 18.14 9.5 17.83 9.5 17.46C9.5 17.08 9.81 16.78 10.18 16.78H13.82C14.2 16.78 14.5 17.09 14.5 17.46C14.5 17.83 14.19 18.14 13.82 18.14Z" fill="currentColor"/>
                                                <path d="M18.3499 4.32C17.7999 2.91 16.4599 2 14.9499 2H9.04992C7.53992 2 6.19992 2.91 5.64992 4.32C5.10992 5.74 5.47992 7.31 6.60992 8.33L10.6499 12H13.3599L17.3999 8.33C18.5199 7.31 18.8899 5.74 18.3499 4.32ZM13.8199 7.23H10.1799C9.79992 7.23 9.49992 6.92 9.49992 6.55C9.49992 6.18 9.80992 5.87 10.1799 5.87H13.8199C14.1999 5.87 14.4999 6.18 14.4999 6.55C14.4999 6.92 14.1899 7.23 13.8199 7.23Z" fill="currentColor"/>
                                            </svg>
                                        </div>
                                        <div class="flex">
                                            <div class="d-flex align-items-center gap-2">
                                                <h6 class="text-light fs-6 fw-bold">UTC Time Zone</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex justify-content-sm-end align-items-center gap-2 text-primary">
                                        <label class="crypt-grayscale-300">Last 24 hours</label>
                                        <a href="#!" class="btn btn-editor btn-dark text-sm ms-2" role="button">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Shortcuts -->
                            <div class="row align-items-center justify-content-between mb-4 mb-sm-3">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex align-items-center gap-2 text-primary">
                                        <div class="flex mb-3">
                                            <svg class="text-danger" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.5 10C7.433 10 9 8.433 9 6.5C9 4.567 7.433 3 5.5 3C3.567 3 2 4.567 2 6.5C2 8.433 3.567 10 5.5 10Z" fill="currentColor"/>
                                                <path d="M5.5 21C7.433 21 9 19.433 9 17.5C9 15.567 7.433 14 5.5 14C3.567 14 2 15.567 2 17.5C2 19.433 3.567 21 5.5 21Z" fill="currentColor"/>
                                                <path opacity="0.4" d="M15.2501 11.9798L22.4501 6.59978C22.7801 6.34978 22.8501 5.87978 22.6001 5.54978C22.3501 5.21978 21.8801 5.14978 21.5501 5.39978L14.0001 11.0498L8.45008 6.89978C8.12008 6.64978 7.65006 6.71978 7.40006 7.04978C7.15006 7.37978 7.22006 7.84978 7.55006 8.09978L12.7501 11.9898L6.85007 16.4098C6.52007 16.6598 6.45008 17.1298 6.70008 17.4598C6.85008 17.6598 7.07006 17.7598 7.30006 17.7598C7.46006 17.7598 7.61007 17.7098 7.75007 17.6098L14.0101 12.9298L21.5601 18.5798C21.6901 18.6798 21.8501 18.7298 22.0101 18.7298C22.2401 18.7298 22.4601 18.6298 22.6101 18.4298C22.8601 18.0998 22.7901 17.6298 22.4601 17.3798L15.2501 11.9798Z" fill="currentColor"/>
                                            </svg>
                                        </div>
                                        <div class="flex">
                                            <div class="d-flex align-items-center gap-2">
                                                <h6 class="text-light fs-6 fw-bold">Shortcuts</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex justify-content-sm-end align-items-center gap-2 text-primary">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" checked>
                                        </div>
                                        <a href="#!" class="btn btn-editor btn-dark text-sm ms-2" role="button">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Security Checkup -->
                            <div class="crypt-card color1 p-3 p-sm-4">
                                <h4 class="crypt-grayscale-100 fw-bold">Security Checkup</h4>
                                <div class="row gap-4 mt-4">
                                    <div class="d-flex gap-2 mb-2">
                                        <svg width="24" height="24" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z" fill="#0d6efd" />
                                            <path d="M6.75 9L8.25 10.5L11.25 7.5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h6 class="crypt-grayscale-300 mb-0">Two-Factor Authentication (2FA)</h6>
                                    </div>
                                    <div class="d-flex gap-2 mb-2">
                                        <svg width="24" height="24" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z" fill="#0d6efd" />
                                            <path d="M6.75 9L8.25 10.5L11.25 7.5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h6 class="crypt-grayscale-300 mb-0">Identity Verification</h6>
                                    </div>
                                    <div class="d-flex gap-2 mb-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-7.233 0l3.006 3.005-1.768 1.768L12 13.767l-3.005 3.005-1.768-1.768 3.005-3.005-3.005-3.005 1.768-1.767L12 10.23l3.005-3.005 1.768 1.767L13.767 12z" fill="currentColor"></path>
                                        </svg>
                                        <a class="text-link crypt-grayscale-600 mb-0" href="#!">Withdrawal Whitelist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Control Panel -->
   

    </x-website>