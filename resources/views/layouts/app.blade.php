<!DOCTYPE html>
<html lang="en">
<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->
    <link rel="shortcut icon" href="/images/logo/png/white_logo_transparent_background_favicon.png" type="image/x-icon">
    <!-- #title -->
    <title>@yield('title') | Student AI Tools</title>
    <!-- #keywords -->
    <meta name="keywords" content="student ai tools, student ai, student artificial intelligence, SAT">
    <!-- #description -->
    <meta name="description" content="Student AI Tools is a A directory of all the tools you'll ever need as student. Subscribe to our newsletter for weekly updates on the latest tools to save you time.">
    <!-- ==== css dependencies start ==== -->
    <!-- bootstrap five css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- bootstrap icons css -->
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    <!-- material icons css -->
    <link rel="stylesheet" href="/css/materialicons.css">
    <!-- font awesome six css -->
    <link rel="stylesheet" href="/css/all.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <!-- slick css -->
    <link rel="stylesheet" href="/css/slick.css">
    <!-- odometer css -->
    <link rel="stylesheet" href="/css/odometer.css">
    <!-- ==== / css dependencies end ==== -->
    <!-- main css -->
    <link rel="stylesheet" href="/css/main.css">

    @yield('styles')
</head>
<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <div class="my-app">
        <!-- ==== preloader start ==== -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="L" class="letters-loading">
                            L
                        </span>
                        <span data-text-preloader="O" class="letters-loading">
                            O
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="D" class="letters-loading">
                            D
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                        <span data-text-preloader="N" class="letters-loading">
                            N
                        </span>
                        <span data-text-preloader="G" class="letters-loading">
                            G
                        </span>
                    </div>
                </div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
        <!-- ==== / preloader end ==== -->
        <!-- ==== mouse cursor drag start ==== -->
        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner">
            <span>Drag</span>
        </div>
        <!-- ==== / mouse cursor drag end ==== -->

        <!-- ==== header start ==== -->
        <header class="header">
            <div class="primary-navbar">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav class="navbar p-0">
                                <div class="navbar__logo">
                                    <a href="/" aria-label="home page" title="logo">
                                        <img src="/images/logo/png/white_logo_transparent_background.png" alt="Image" width="250">
                                    </a>
                                </div>
                                {{-- <div class="navbar__menu">
                                    <ul class="navbar__list">
                                        <li class="navbar__item navbar__item--has-children nav-fade">
                                            <button aria-label="dropdown menu" class="navbar__dropdown-label">Home</button>
                                            <ul class="navbar__sub-menu">
                                                <li>
                                                    <a href="/">Ai Solution</a>
                                                </li>
                                                <li>
                                                    <a href="index-two.html">Ai Chatbot</a>
                                                </li>
                                                <li>
                                                    <a href="index-three.html">Ai Gaming</a>
                                                </li>
                                                <li>
                                                    <a href="index-four.html">Ai Prompts</a>
                                                </li>
                                                <li>
                                                    <a href="index-five.html">Ai Portfolio</a>
                                                </li>
                                                <li>
                                                    <a href="index-six.html">Ai News</a>
                                                </li>
                                                <li>
                                                    <a href="index-seven.html">Ai Agency</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navbar__item nav-fade">
                                            <a href="about-us.html">About Us</a>
                                        </li>
                                        <li class="navbar__item navbar__item--has-children nav-fade">
                                            <button aria-label="dropdown menu" class="navbar__dropdown-label">Shop</button>
                                            <ul class="navbar__sub-menu">
                                                <li>
                                                    <a href="shop.html">Shop</a>
                                                </li>
                                                <li>
                                                    <a href="product-single.html">Product Details</a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">Checkout</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navbar__item navbar__item--has-children nav-fade">
                                            <button aria-label="dropdown menu" class="navbar__dropdown-label">Pages</button>
                                            <ul class="navbar__sub-menu">
                                                <li>
                                                    <a href="404.html">Error</a>
                                                </li>
                                                <li>
                                                    <a href="about-us.html">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="sign-in.html">Sign In</a>
                                                </li>
                                                <li>
                                                    <a href="sign-up.html">Create Account</a>
                                                </li>
                                                <li class="navbar__item navbar__item--has-children">
                                                    <button aria-label="dropdown menu" class="navbar__dropdown-label navbar__dropdown-label-sub">Services</button>
                                                    <ul class="navbar__sub-menu navbar__sub-menu__nested">
                                                        <li>
                                                            <a href="services.html">Our Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-single.html">Service Details</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="navbar__item navbar__item--has-children">
                                                    <button aria-label="dropdown menu" class="navbar__dropdown-label navbar__dropdown-label-sub">Case Study</button>
                                                    <ul class="navbar__sub-menu navbar__sub-menu__nested">
                                                        <li>
                                                            <a href="case-study.html">Case Study</a>
                                                        </li>
                                                        <li>
                                                            <a href="case-study-single.html">Case Study Details</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="contact-us.html">Contact Us</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navbar__item navbar__item--has-children nav-fade">
                                            <button aria-label="dropdown menu" class="navbar__dropdown-label">Blog</button>
                                            <ul class="navbar__sub-menu">
                                                <li>
                                                    <a href="blog.html">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="blog-single.html">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navbar__item nav-fade">
                                            <a href="contact-us.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </div> --}}
                                <div class="navbar__options">
                                    <div class="navbar__mobile-options">
                                        {{-- <button class="open-cart" aria-label="selected products" title="see cart items">
                                            <i class="bi bi-bag-plus"></i>
                                        </button> --}}
                                        <button class="submit-tool" aria-label="submit tool" title="submit tool" onclick="window.location.href='{{ route('tools.create') }}'">
                                            <i class="bi bi-patch-plus"></i>
                                        </button>
                                        <button class="open-search" aria-label="search products" title="open search box">
                                            <i class="bi bi-search"></i>
                                        </button>
                                        <button class="open-offcanvas" aria-label="open offcanvas" title="open offcanvas">
                                            <i class="bi bi-grid-3x3-gap"></i>
                                        </button>
                                    </div>
                                    <button class="open-mobile-menu d-flex d-xl-none" aria-label="toggle mobile menu" title="open mobile menu">
                                        <i class="material-symbols-outlined">
                                            menu_open
                                        </i>
                                    </button>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- ==== mobile menu start ==== -->
                <div class="mobile-menu d-block d-xl-none">
                    <nav class="mobile-menu__wrapper">
                        <div class="mobile-menu__header nav-fade">
                            <div class="logo">
                                <a href="/" aria-label="home page" title="logo">
                                    <img src="/images/logo/png/white_logo_transparent_background.png" alt="Image">
                                </a>
                            </div>
                            <button aria-label="close mobile menu" class="close-mobile-menu">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </div>
                        <div class="mobile-menu__list"></div>
                        <div class="mobile-menu__social social nav-fade">
                            <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook" title="facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="https://www.twitter.com/" target="_blank" aria-label="share us on twitter" title="twitter">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on pinterest" title="linkedin">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" aria-label="share us on instagram" title="instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                    </nav>
                </div>
                <div class="mobile-menu__backdrop"></div>
                <!-- ==== / mobile menu end ==== -->
            </div>
        </header>
        <!-- ==== / header end ==== -->

        <!-- ==== offcanvas cart start ==== -->
        <div class="sidebar-cart">
            <div class="sidebar-cart__inner">
                <button class="close-cart">
                    <i class="bi bi-x-lg close-icon"></i>
                </button>
                <h2>
                    Shopping Bag
                    <span class="count-item"></span>
                </h2>
                <div class="cart-items">
                    <div class="cart-item-single">
                        <div class="cart-item-thumb">
                            <a href="product-single.html">
                                <img src="/images/cart.png" alt="Image">
                            </a>
                        </div>
                        <div class="cart-item-content">
                            <h6 class="title-anim">
                                <a href="product-single.html">Adv Prompts</a>
                            </h6>
                            <p class="price">
                                $
                                <span class="item-price">34.99</span>
                            </p>
                            <div class="measure">
                                <button aria-label="decrease item" class="quantity-decrease">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <span class="item-quantity">0</span>
                                <button aria-label="add item" class="quantity-increase">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <button aria-label="delete item" class="delete-item">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                    <div class="cart-item-single">
                        <div class="cart-item-thumb">
                            <a href="product-single.html">
                                <img src="/images/cart-two.png" alt="Image">
                            </a>
                        </div>
                        <div class="cart-item-content">
                            <h6 class="title-anim">
                                <a href="product-single.html">Creative Design</a>
                            </h6>
                            <p class="price">
                                $
                                <span class="item-price">67.32</span>
                            </p>
                            <div class="measure">
                                <button aria-label="decrease item" class="quantity-decrease">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <span class="item-quantity">0</span>
                                <button aria-label="add item" class="quantity-increase">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <button aria-label="delete item" class="delete-item">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                    <div class="cart-item-single">
                        <div class="cart-item-thumb">
                            <a href="product-single.html">
                                <img src="/images/cart.png" alt="Image">
                            </a>
                        </div>
                        <div class="cart-item-content">
                            <h6 class="title-anim">
                                <a href="product-single.html">Ai Prompts</a>
                            </h6>
                            <p class="price">
                                $
                                <span class="item-price">24.00</span>
                            </p>
                            <div class="measure">
                                <button aria-label="decrease item" class="quantity-decrease">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <span class="item-quantity">0</span>
                                <button aria-label="add item" class="quantity-increase">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <button aria-label="delete item" class="delete-item">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="empty-cart">
                    <h5>Your cart is empty</h5>
                    <a href="shop.html">Add Products</a>
                </div>
                <div class="totals">
                    <div class="subtotal">
                        <span class="label">Subtotal:</span>
                        <span class="amount ">
                            $
                            <span class="total-price">0.00</span>
                        </span>
                    </div>
                </div>
                <div class="action-buttons">
                    <a class="view-cart-button" href="cart.html" aria-label="go to cart">Cart</a>
                    <a class="checkout-button" href="checkout.html" aria-label="go to checkout">
                        Checkout
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="cart-backdrop"></div>
        <!-- ==== / offcanvas cart end ==== -->

        <!-- ==== search popup start ==== -->
        <div class="search-popup">
            <button class="close-search" aria-label="close search box" title="close search box">
                <i class="bi bi-x-lg"></i>
            </button>
            <form action="#" method="post">
                <div class="search-popup__group">
                    <input type="text" name="search-field" id="searchField" placeholder="Enter Product Name" required="">
                    <button type="submit" aria-label="search products" title="search products">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <!-- ==== / search popup end ==== -->

        <!-- ==== offcanvas info start ==== -->
        <div class="offcanvas-info">
            <div class="offcanvas-info__inner">
                <div class="offcanvas-info__intro">
                    <div class="offcanvas-info__logo">
                        <a href="/">
                            <img src="/images/logo/png/white_logo_transparent_background_favicon.png" alt="Image">
                        </a>
                    </div>
                    <h4>Intelligent Conversations Made Simple</h4>
                </div>
                <div class="offcanvas-info__content">
                    <h5>Contact Us</h5>
                    <ul>
                        <li>
                            <a href="/cdn-cgi/l/email-protection#4f0e26242a3a0f2a372e223f232a612c2022"><span class="__cf_email__" data-cfemail="8fcee6e4eafacfeaf7eee2ffe3eaa1ece0e2">[email&nbsp;protected]</span></a>
                        </li>
                        <li>
                            <a href="tel:1880-480-555-0103">+1 880 (480) 555-0103</a>
                        </li>
                        <li>
                            <a href="https://www.google.com/maps/place/Kentucky,+USA/@37.8172108,-87.087054,8z/data=!3m1!4b1!4m6!3m5!1s0x8842734c8b1953c9:0x771f6f4ec5ccdffc!8m2!3d37.8393332!4d-84.2700179!16zL20vMDQ5OHk?entry=ttu" target="_blank">4517 Washington Ave. Manchester, Kentucky 39495</a>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas-info__form">
                    <h5>Subscribe to newsletter</h5>
                    <form action="#" method="post" autocomplete="off">
                        <div class="subscribe-form">
                            <input type="email" name="subscribe-newsletter" id="subscribeNewsletter" placeholder="Email" required="">
                            <button type="submit" aria-label="subscribe newsletter" title="subscribe newsletter">
                                <i class="material-symbols-outlined">
                                    send
                                </i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="offcanvas-info__footer">
                    <p class="tertiary-text">Follow Us :</p>
                    <div class="social">
                        <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook" title="facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.twitter.com/" target="_blank" aria-label="share us on twitter" title="twitter">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on pinterest" title="linkedin">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" aria-label="share us on instagram" title="instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <button class="close-offcanvas-info" aria-label="close offcanvas info">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
        <div class="offcanvas-info-backdrop"></div>
        <!-- ==== / offcanvas info end ==== -->

        <div id="particles-js"></div>

        <div id="smooth-wrapper">
            <div id="smooth-content">
                <!-- ==== main start ==== -->
                @yield('content')
                <!-- ==== / main end ==== -->
                <!-- ==== footer start ==== -->
                <footer class="footer-cmn">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="footer-cmn__cta text-center appear-down">
                                    <h2 class="title fw-7 title-animation">Join Us Today</h2>
                                    <div class="section__content-cta">
                                        <a href="sign-in.html" class="btn btn--primary">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="footer-cmn__inner section ">
                                    <div class="row  gaper">
                                        <div class="col-12 col-lg-7 col-xl-8">
                                            <div class="footer-cmn__left text-center text-lg-start">
                                                <a href="/" class="logo">
                                                    <img src="/images/logo/png/white_logo_transparent_background.png" alt="Image" width="250">
                                                </a>
                                                <div class="footer__nav-list">
                                                    <ul class="justify-content-center justify-content-lg-start">
                                                        <li>
                                                            <a href="/">Home</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('about-us') }}">About Us</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop.html">Shop</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog.html">Blog</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('about-us') }}">Contact Us</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-5 col-xl-4">
                                            <div class="offcanvas-info__form">
                                                <h5 class="text-white text-center text-lg-start">Subscribe to newsletter</h5>
                                                <form action="#" method="post" autocomplete="off">
                                                    <div class="subscribe-form">
                                                        <input type="email" name="subscribe-newsletter" id="subscribeNewsletterTwo" placeholder="Email" required="">
                                                        <button type="submit" aria-label="subscribe newsletter" title="subscribe newsletter">
                                                            <i class="material-symbols-outlined">
                                                                send
                                                            </i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__copyright">
                        <div class="container">
                            <div class="row gaper">
                                <div class="col-12 col-lg-6">
                                    <div class="footer__copyright-content text-center text-lg-start">
                                        <p>
                                            Copyright ©
                                            <span id="copyrightYear"></span>
                                            <a href="/">Aikeu</a>
                                            . All Rights Reserved
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="footer__copyright-social justify-content-center justify-content-lg-end">
                                        <p class="tertiary-text d-none d-lg-block">Follow Us :</p>
                                        <div class="social">
                                            <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook" title="facebook">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a href="https://www.twitter.com/" target="_blank" aria-label="share us on twitter" title="twitter">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                            <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on pinterest" title="linkedin">
                                                <i class="bi bi-linkedin"></i>
                                            </a>
                                            <a href="https://www.instagram.com/" target="_blank" aria-label="share us on instagram" title="instagram">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- ==== / footer end ==== -->
            </div>
        </div>

        <!-- ==== scroll to top start ==== -->
        <button class="progress-wrap" aria-label="scroll indicator" title="go to top">
            <span></span>
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
        </button>
        <!-- ==== / scroll to top end ==== -->
    </div>
    <!-- ==== js dependencies start ==== -->
    <!-- jquery -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/js/jquery-3.7.0.min.js"></script>
    <!-- bootstrap five js -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- magnific popup js -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <!-- jquery ui js -->
    <script src="/js/jquery-ui.min.js"></script>
    <!-- slick js -->
    <script src="/js/slick.min.js"></script>
    <!-- odometer js -->
    <script src="/js/odometer.min.js"></script>
    <!-- image loaded js -->
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope js -->
    <script src="/js/isotope.pkgd.min.js"></script>
    <!-- packery js -->
    <script src="/js/packery.pkgd.min.js"></script>
    <!-- splittext js -->
    <script src="/js/SplitText.min.js"></script>
    <!-- scrollsmoother js -->
    <script src="/js/ScrollSmoother.min.js"></script>
    <!-- scrollto js -->
    <script src="/js/ScrollToPlugin.min.js"></script>
    <!-- scrolltrigger js -->
    <script src="/js/ScrollTrigger.min.js"></script>
    <!-- gsap js -->
    <script src="/js/gsap.min.js"></script>
    <!-- viewport js -->
    <script src="/js/viewport.jquery.js"></script>
    <!-- vanilla tilt js -->
    <script src="/js/tilt.jquery.js"></script>
    <!-- particle js -->
    <script src="/js/particles.min.js"></script>
    <!-- ==== / js dependencies end ==== -->
    <!-- plugins js -->
    <script src="/js/plugins.js"></script>
    <!-- main js -->
    <script src="/js/main.js"></script>

    @yield('scripts')
</body>
</html>
