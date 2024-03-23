<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF-TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="student ai tools, student ai, student artificial intelligence, SAT">
    <meta name="description" content="Student AI Tools is a A directory of all the tools you'll ever need as student. Subscribe to our newsletter for weekly updates on the latest tools to save you time.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Student AI Tools</title>

    <link rel="shortcut icon" href="/images/logo/png/white_logo_transparent_background_favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/nice-search-multiple.css">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @yield('styles')
</head>

<body>
    <!-- start preloader -->
    <div class="preloader align-items-center justify-content-center">
        <span class="loader"></span>
    </div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-lg-block"><i class="mat-icon fas fa-angle-double-up"></i></button>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section header-menu">
        <nav class="navbar navbar-expand-lg p-0">
            <div class="container">
                <nav class="navbar w-100 navbar-expand-lg justify-content-betweenm">
                    <a href="{{ route('index') }}" class="navbar-brand">
                        <img src="/images/logo/png/white_logo_transparent_background_favicon.png" class="logo" alt="logo" width="60" height="60">
                    </a>

                    <button class="button search-active d-block d-md-none">
                        <i class="d-center material-symbols-outlined fs-xxl mat-icon"> search </i>
                    </button>

                    <div class="search-form">
                        @php
                            $random_tool_name = \App\Models\Tool::inRandomOrder()->first()->name;
                        @endphp
                        <form action="{{ route('tools.search', $random_tool_name) }}" class="input-area d-flex align-items-center">
                            <i class="material-symbols-outlined mat-icon">search</i>
                            <input type="text" placeholder="Search AI Tools With AI" autocomplete="off">
                        </form>
                    </div>

                    <ul
                        class="navbar-nav feed flex-row gap-xl-20 gap-lg-10 gap-sm-7 gap-1 py-4 py-lg-0 m-lg-auto ms-auto ms-aut align-self-center">
                        <li>
                            <a href="{{ route('index') }}" class="nav-icon home active">
                                <i class="mat-icon fs-xxl material-symbols-outlined mat-icon">home</i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('newsfeed.index') }}" class="nav-icon feed"><i
                                    class="mat-icon fs-xxl material-symbols-outlined mat-icon">feed</i></a>
                        </li>
                        <li>
                            <a href="{{ route('tools.index') }}" class="nav-icon"><i
                                    class="mat-icon fs-xxl material-symbols-outlined mat-icon">integration_instructions</i></a>
                        </li>
                        {{-- <li>
                            <a href="videos.html" class="nav-icon"><i
                                    class="mat-icon fs-xxl material-symbols-outlined mat-icon">smart_display</i></a>
                        </li> --}}
                    </ul>

                    @auth
                    <div class="right-area position-relative d-flex gap-3 gap-xxl-6 align-items-center">
                        <div class="single-item d-none d-lg-block messages-area">
                            <div class="messages-btn cmn-head">
                                <div class="icon-area d-center position-relative">
                                    <i class="material-symbols-outlined mat-icon">mail</i>
                                    <span class="abs-area position-absolute d-center mdtxt">4</span>
                                </div>
                            </div>

                            <div class="main-area p-5 messages-content">
                                <h5 class="mb-8">Messages</h5>
                                <div class="single-box p-0 mb-7">
                                    <a href="{{ route('auth.messages') }}" class="d-flex gap-2 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="/images/avatar-7.png" alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <div class="title-area position-relative d-inline-flex align-items-center">
                                                <h6 class="m-0 d-inline-flex">Piter Maio</h6>
                                                <span class="abs-area position-absolute d-center mdtxt">3</span>
                                            </div>
                                            <p class="mdtxt sms">Amet minim mollit non....</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="/images/avatar-1.png" alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <h6 class="m-0 mb-1">Annette Black</h6>
                                            <p class="mdtxt">You: consequat sunt</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="/images/avatar-2.png" alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <h6 class="m-0 mb-1">Ralph Edwards</h6>
                                            <p class="mdtxt sms">Amet minim mollit non....</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="/images/avatar-3.png" alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <h6 class="m-0 mb-1">Darrell Steward</h6>
                                            <p class="mdtxt">You: consequat sunt</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="/images/avatar-4.png" alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <h6 class="m-0 mb-1">Wade Warren</h6>
                                            <p class="mdtxt">You: consequat sunt</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="/images/avatar-5.png" alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <h6 class="m-0 mb-1">Kathryn Murphy</h6>
                                            <p class="mdtxt">You: consequat sunt</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="/images/avatar-6.png" alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <h6 class="m-0 mb-1">Jacob Jones</h6>
                                            <p class="mdtxt">You: consequat sunt</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="btn-area">
                                    <a href="{{ route('auth.messages') }}">See all inbox</a>
                                </div>
                            </div>
                        </div>

                        @include('includes.notifications.desktop')

                        <div class="single-item d-none d-lg-block profile-area position-relative">
                            <div class="profile-pic d-flex align-items-center">
                                <span class="avatar cmn-head active-status">
                                    <img class="avatar-img max-un" src="{{ Auth::user()->avatar }}" width="48" height="48" alt="avatar">
                                </span>
                            </div>

                            <div class="main-area p-5 profile-content">
                                <div class="head-area">
                                    <div class="d-flex gap-3 align-items-center">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="{{ Auth::user()->avatar }}" width="50" height="50" alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <h6 class="m-0 mb-1">{{ Auth::user()->username }}</h6>
                                            {{-- <p class="mdtxt">Web Developer</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="view-profile my-2">
                                    <a href="{{ route('profile.show', Auth::user()->username) }}" class="mdtxt w-100 text-center py-2">View profile</a>
                                </div>
                                <ul>
                                    <li>
                                        <a href="profile-edit.html" class="mdtxt">
                                            <i class="material-symbols-outlined mat-icon"> settings </i>
                                            Settings &amp; Privacy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('auth.signout') }}" class="mdtxt">
                                            <i class="material-symbols-outlined mat-icon"> power_settings_new </i>
                                            Sign Out
                                        </a>
                                    </li>
                                </ul>
                                <div class="switch-wrapper mt-4 d-flex gap-1 align-items-center">
                                    <i class="mat-icon material-symbols-outlined sun icon"> light_mode </i>
                                    <label class="switch">
                                        <input type="checkbox" class="checkbox">
                                        <span class="slider"></span>
                                    </label>
                                    <i class="mat-icon material-symbols-outlined moon icon"> dark_mode </i>
                                    <span class="mdtxt ms-2">Dark mode</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="right-area position-relative d-flex d-none d-sm-block gap-2 gap-xxl-3 align-items-center">
                        <a href="{{ route('auth.signin') }}" class="cmn-btn">Sign in</a>
                        <a href="{{ route('auth.signup') }}" class="cmn-btn fourth alt">Sign Up</a>
                    </div>
                    @endauth
                </nav>
            </div>
        </nav>
    </header>
    <!-- header-section end -->

    @auth
    <!-- Bottom Menu start -->
    <div class="header-menu py-3 header-menu d-block d-lg-none position-fixed bottom-0 w-100 cus-z">
        <div class="right-area position-relative d-flex justify-content-around gap-3 gap-xxl-6 align-items-center">
            <div class="single-item messages-area">
                <div class="messages-btn cmn-head">
                    <div class="icon-area d-center position-relative">
                        <i class="material-symbols-outlined mat-icon">mail</i>
                        <span class="abs-area position-absolute d-center mdtxt">4</span>
                    </div>
                </div>
                <div class="main-area p-5 messages-content">
                    <h5 class="mb-8">Messages</h5>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img class="avatar-img max-un" src="/images/avatar-7.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <div class="title-area position-relative d-inline-flex align-items-center">
                                    <h6 class="m-0 d-inline-flex">Piter Maio</h6>
                                    <span class="abs-area position-absolute d-center mdtxt">3</span>
                                </div>
                                <p class="mdtxt sms">Amet minim mollit non....</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img class="avatar-img max-un" src="/images/avatar-1.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1">Annette Black</h6>
                                <p class="mdtxt">You: consequat sunt</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img class="avatar-img max-un" src="/images/avatar-2.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1">Ralph Edwards</h6>
                                <p class="mdtxt sms">Amet minim mollit non....</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img class="avatar-img max-un" src="/images/avatar-3.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1">Darrell Steward</h6>
                                <p class="mdtxt">You: consequat sunt</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img class="avatar-img max-un" src="/images/avatar-4.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1">Wade Warren</h6>
                                <p class="mdtxt">You: consequat sunt</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img class="avatar-img max-un" src="/images/avatar-5.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1">Kathryn Murphy</h6>
                                <p class="mdtxt">You: consequat sunt</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img class="avatar-img max-un" src="/images/avatar-6.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1">Jacob Jones</h6>
                                <p class="mdtxt">You: consequat sunt</p>
                            </div>
                        </a>
                    </div>
                    <div class="btn-area">
                        <a href="profile-chat.html">See all inbox</a>
                    </div>
                </div>
            </div>

            @include('includes.notifications.mobile')

            <div class="single-item profile-area position-relative">
                <div class="profile-pic d-flex align-items-center">
                    <span class="avatar cmn-head active-status">
                        <img class="avatar-img max-un" src="{{ Auth::user()->avatar }}" width="48" height="48" alt="avatar">
                    </span>
                </div>
                <div class="main-area p-5 profile-content">
                    <div class="head-area">
                        <div class="d-flex gap-3 align-items-center">
                            <div class="avatar-item">
                                <img class="avatar-img max-un" src="{{ Auth::user()->avatar }}" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1">{{ Auth::user()->username }}</h6>
                                {{-- <p class="mdtxt">Web Developer</p> --}}
                            </div>
                        </div>
                    </div>

                    <div class="view-profile my-2">
                        <a href="{{ route('profile.show', Auth::user()->username) }}" class="mdtxt w-100 text-center py-2">View profile</a>
                    </div>
                    
                    <ul>
                        <li>
                            <a href="{{ route('auth.settings') }}" class="mdtxt">
                                <i class="material-symbols-outlined mat-icon"> settings </i>
                                Settings &amp; Privacy
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('auth.signout') }}" class="mdtxt">
                                <i class="material-symbols-outlined mat-icon"> power_settings_new </i>
                                Sign Out
                            </a>
                        </li>
                    </ul>
                    <div class="switch-wrapper mt-4 d-flex gap-1 align-items-center">
                        <i class="mat-icon material-symbols-outlined sun icon"> light_mode </i>
                        <label class="switch">
                            <input type="checkbox" class="checkbox">
                            <span class="slider"></span>
                        </label>
                        <i class="mat-icon material-symbols-outlined moon icon"> dark_mode </i>
                        <span class="mdtxt ms-2">Dark mode</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Menu end -->
    @endauth

    <!-- Main Content start -->
    @yield('content')
    <!-- Main Content end -->

    @include('includes.popups')

    <!--==================================================================-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/slick.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/jquery.nice-select-with-search-multiple.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/plyr.js"></script>
    <script src="/js/apexcharts.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/plugin.js"></script>
    <script src="/js/main.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Main Scripts -->
    @yield('scripts')

    <!-- Include Additional Scripts -->
    @stack('incscripts')
</body>

</html>
