@extends('layouts.app')

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            @include('includes.sidebar')
            
            <div class="col-xl-9 col-lg-8">
                <section class="banner-section" id="top">
                    <div class="container">
                        <div class="section-header-3">
                            <span class="cate">Student AI Tools</span>
                            <h2 class="title mb-0">
                                <span class="d-block">Everything You Need For School In ONE PLACE</span>
                            </h2>
                        </div>
                        <div class="counter-area">
                            <div class="counter-item">
                                <div class="counters">
                                    <h2 class="title odometer odometer-auto-theme" data-odometer-final="{{ \App\Models\Tool::count() }}">
                                        <div class="odometer-inside">
                                            <span class="odometer-digit">
                                                <span class="odometer-digit-spacer">{{ \App\Models\Tool::count() }}</span>
                                            </span>
                                        </div>
                                    </h2>
                                    
                                    <h2 class="title">+</h2>
                                </div>
                                <span class="name">
                                    AI Tools
                                </span>
                            </div>

                            <div class="counter-item">
                                <div class="counters">
                                    <h2 class="title odometer odometer-auto-theme" data-odometer-final="{{ \App\Models\Category::count() }}">
                                        <div class="odometer-inside">
                                            <span class="odometer-digit">
                                                <span class="odometer-digit-spacer">{{ \App\Models\Category::count() }}</span>
                                            </span>
                                        </div>
                                    </h2>
                                    
                                    <h2 class="title">+</h2>
                                </div>
                                <span class="name">
                                    Categories
                                </span>
                            </div>

                            <div class="counter-item">
                                <div class="counters">
                                    <h2 class="title odometer odometer-auto-theme" data-odometer-final="{{ \App\Models\User::count() }}">
                                        <div class="odometer-inside">
                                            <span class="odometer-digit">
                                                <span class="odometer-digit-spacer">{{ \App\Models\User::count() * 20 }}</span>
                                            </span>
                                        </div>
                                    </h2>

                                    <h2 class="title">+</h2>
                                </div>
                                <span class="name">
                                    Happy Students
                                </span>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="javascript:void(0)" class="purchase-button mb-20" target="_blank">
                                Get Started
                                <i class="material-symbols-outlined mat-icon"> arrow_forward </i>
                                {{-- <img src="/images/arrow.png" alt="arrow"> --}}
                            </a>
                        </div>
                    </div>
                </section>

                <div class="popular-area mb-5 d-center flex-wrap gap-3 justify-content-between">
                    <ul class="nav flex-wrap gap-2 tab-area" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center active" id="popular-tab" data-bs-toggle="tab" data-bs-target="#popular-tab-pane" type="button" role="tab" aria-controls="popular-tab-pane" aria-selected="true">popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center" id="most-member-tab" data-bs-toggle="tab" data-bs-target="#most-member-tab-pane" type="button" role="tab" aria-controls="most-member-tab-pane" aria-selected="false" tabindex="-1">most-member</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center" id="suggested-group-tab" data-bs-toggle="tab" data-bs-target="#suggested-group-tab-pane" type="button" role="tab" aria-controls="suggested-group-tab-pane" aria-selected="false" tabindex="-1">suggested-group</button>
                        </li>
                    </ul>
                    <form action="#" class="d-flex align-items-stretch justify-content-between gap-4">
                        <div class="input-area py-2 w-100 gap-2 d-flex align-items-center">
                            <i class="material-symbols-outlined mat-icon">search</i>
                            <input type="text" placeholder="Type and hit enter" autocomplete="off">
                        </div>
                    </form>
                    <div class="btn-item">
                        <a href="#" class="cmn-btn gap-1">
                            <i class="material-symbols-outlined mat-icon"> add </i>
                            Submit Tool
                        </a>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="popular-tab-pane" role="tabpanel" aria-labelledby="popular-tab" tabindex="0">
                        <div class="row cus-mar friend-request">
                            @foreach(\App\Models\Tool::inRandomOrder()->limit(18)->get() as $tool)
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="{{ $tool->screenshot1 }}" alt="avatar" width="266" height="110">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                            <span>Unfollow</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="abs-avatar-item">
                                        <img class="avatar-img max-un" src="{{ $tool->favicon }}" alt="avatar" width="80" height="80">
                                    </div>
                                    <a href="{{ route('tools.show', $tool->slug) }}" target="_blank">
                                        <h6 class="m-0 mb-2 mt-3">{{ $tool->name }}</h6>
                                    </a>
                                    
                                    @if($tool->category)
                                    <p class="smtxt public-group">{{ $tool->category->name }}</p>
                                    @endif

                                    <div class="friends-list d-center mt-3 gap-1 text-center">
                                        <ul class="d-center">
                                            <li><img src="/images/avatar-2.png" alt="image"></li>
                                            <li><img src="/images/avatar-3.png" alt="image"></li>
                                            <li><img src="/images/avatar-4.png" alt="image"></li>
                                        </ul>
                                        <span class="smtxt m-0">30k Students Saved</span>
                                    </div>

                                    <div class="d-center btn-border pt-5 gap-2 mt-4">
                                        <button class="cmn-btn fourth">
                                            <i class="material-symbols-outlined mat-icon"> bookmark_add </i>
                                            Save
                                        </button>
                                        <button class="cmn-btn alt third">Invite</button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="most-member-tab-pane" role="tabpanel" aria-labelledby="most-member-tab" tabindex="0">
                        <div class="row cus-mar friend-request">
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="/images/group-img-7.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                            <span>Unfollow</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="abs-avatar-item">
                                        <img class="avatar-img max-un" src="/images/group-avatar-7.png" alt="avatar">
                                    </div>
                                    <a href="group-details.html">
                                        <h6 class="m-0 mb-2 mt-3">Travel Africa</h6>
                                    </a>
                                    <p class="smtxt public-group">Public Group</p>
                                    <div class="friends-list d-center mt-3 gap-1 text-center">
                                        <ul class="d-center">
                                            <li><img src="/images/avatar-2.png" alt="image"></li>
                                            <li><img src="/images/avatar-3.png" alt="image"></li>
                                            <li><img src="/images/avatar-4.png" alt="image"></li>
                                        </ul>
                                        <span class="smtxt m-0">30k Member</span>
                                    </div>
                                    <div class="d-center btn-border pt-5 gap-2 mt-4">
                                        <button class="cmn-btn fourth">Joined</button>
                                        <button class="cmn-btn alt third">Invite</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="/images/group-img-8.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                            <span>Unfollow</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="abs-avatar-item">
                                        <img class="avatar-img max-un" src="/images/group-avatar-8.png" alt="avatar">
                                    </div>
                                    <a href="group-details.html">
                                        <h6 class="m-0 mb-2 mt-3">World Travel Community</h6>
                                    </a>
                                    <p class="smtxt public-group">Public Group</p>
                                    <div class="friends-list d-center mt-3 gap-1 text-center">
                                        <ul class="d-center">
                                            <li><img src="/images/avatar-2.png" alt="image"></li>
                                            <li><img src="/images/avatar-3.png" alt="image"></li>
                                            <li><img src="/images/avatar-4.png" alt="image"></li>
                                        </ul>
                                        <span class="smtxt m-0">30k Member</span>
                                    </div>
                                    <div class="d-center btn-border pt-5 gap-2 mt-4">
                                        <button class="cmn-btn fourth">Joined</button>
                                        <button class="cmn-btn alt third">Invite</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="/images/group-img-9.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                            <span>Unfollow</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="abs-avatar-item">
                                        <img class="avatar-img max-un" src="/images/group-avatar-9.png" alt="avatar">
                                    </div>
                                    <a href="group-details.html">
                                        <h6 class="m-0 mb-2 mt-3">Fashion Hop</h6>
                                    </a>
                                    <p class="smtxt public-group">Public Group</p>
                                    <div class="friends-list d-center mt-3 gap-1 text-center">
                                        <ul class="d-center">
                                            <li><img src="/images/avatar-2.png" alt="image"></li>
                                            <li><img src="/images/avatar-3.png" alt="image"></li>
                                            <li><img src="/images/avatar-4.png" alt="image"></li>
                                        </ul>
                                        <span class="smtxt m-0">30k Member</span>
                                    </div>
                                    <div class="d-center btn-border pt-5 gap-2 mt-4">
                                        <button class="cmn-btn fourth">Joined</button>
                                        <button class="cmn-btn alt third">Invite</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="/images/group-img-2.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                            <span>Unfollow</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="abs-avatar-item">
                                        <img class="avatar-img max-un" src="/images/group-avatar-2.png" alt="avatar">
                                    </div>
                                    <a href="group-details.html">
                                        <h6 class="m-0 mb-2 mt-3">Car Legend Community</h6>
                                    </a>
                                    <p class="smtxt public-group">Public Group</p>
                                    <div class="friends-list d-center mt-3 gap-1 text-center">
                                        <ul class="d-center">
                                            <li><img src="/images/avatar-2.png" alt="image"></li>
                                            <li><img src="/images/avatar-3.png" alt="image"></li>
                                            <li><img src="/images/avatar-4.png" alt="image"></li>
                                        </ul>
                                        <span class="smtxt m-0">30k Member</span>
                                    </div>
                                    <div class="d-center btn-border pt-5 gap-2 mt-4">
                                        <button class="cmn-btn fourth">Joined</button>
                                        <button class="cmn-btn alt third">Invite</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="/images/group-img-3.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                            <span>Unfollow</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="abs-avatar-item">
                                        <img class="avatar-img max-un" src="/images/group-avatar-3.png" alt="avatar">
                                    </div>
                                    <a href="group-details.html">
                                        <h6 class="m-0 mb-2 mt-3">Travel World</h6>
                                    </a>
                                    <p class="smtxt public-group">Public Group</p>
                                    <div class="friends-list d-center mt-3 gap-1 text-center">
                                        <ul class="d-center">
                                            <li><img src="/images/avatar-2.png" alt="image"></li>
                                            <li><img src="/images/avatar-3.png" alt="image"></li>
                                            <li><img src="/images/avatar-4.png" alt="image"></li>
                                        </ul>
                                        <span class="smtxt m-0">30k Member</span>
                                    </div>
                                    <div class="d-center btn-border pt-5 gap-2 mt-4">
                                        <button class="cmn-btn fourth">Joined</button>
                                        <button class="cmn-btn alt third">Invite</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="/images/group-img-4.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                            <span>Unfollow</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="abs-avatar-item">
                                        <img class="avatar-img max-un" src="/images/group-avatar-4.png" alt="avatar">
                                    </div>
                                    <a href="group-details.html">
                                        <h6 class="m-0 mb-2 mt-3">Beatty Community</h6>
                                    </a>
                                    <p class="smtxt public-group">Public Group</p>
                                    <div class="friends-list d-center mt-3 gap-1 text-center">
                                        <ul class="d-center">
                                            <li><img src="/images/avatar-2.png" alt="image"></li>
                                            <li><img src="/images/avatar-3.png" alt="image"></li>
                                            <li><img src="/images/avatar-4.png" alt="image"></li>
                                        </ul>
                                        <span class="smtxt m-0">30k Member</span>
                                    </div>
                                    <div class="d-center btn-border pt-5 gap-2 mt-4">
                                        <button class="cmn-btn fourth">Joined</button>
                                        <button class="cmn-btn alt third">Invite</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="suggested-group-tab-pane" role="tabpanel" aria-labelledby="suggested-group-tab" tabindex="0">
                        <div class="row cus-mar friend-request">
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="/images/group-img-4.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                            <span>Unfollow</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="abs-avatar-item">
                                        <img class="avatar-img max-un" src="/images/group-avatar-4.png" alt="avatar">
                                    </div>
                                    <a href="group-details.html">
                                        <h6 class="m-0 mb-2 mt-3">Beatty Community</h6>
                                    </a>
                                    <p class="smtxt public-group">Public Group</p>
                                    <div class="friends-list d-center mt-3 gap-1 text-center">
                                        <ul class="d-center">
                                            <li><img src="/images/avatar-2.png" alt="image"></li>
                                            <li><img src="/images/avatar-3.png" alt="image"></li>
                                            <li><img src="/images/avatar-4.png" alt="image"></li>
                                        </ul>
                                        <span class="smtxt m-0">30k Member</span>
                                    </div>
                                    <div class="d-center btn-border pt-5 gap-2 mt-4">
                                        <button class="cmn-btn fourth">Joined</button>
                                        <button class="cmn-btn alt third">Invite</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="/images/group-img-5.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                            <span>Unfollow</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="abs-avatar-item">
                                        <img class="avatar-img max-un" src="/images/group-avatar-5.png" alt="avatar">
                                    </div>
                                    <a href="group-details.html">
                                        <h6 class="m-0 mb-2 mt-3">Event Group</h6>
                                    </a>
                                    <p class="smtxt public-group">Public Group</p>
                                    <div class="friends-list d-center mt-3 gap-1 text-center">
                                        <ul class="d-center">
                                            <li><img src="/images/avatar-2.png" alt="image"></li>
                                            <li><img src="/images/avatar-3.png" alt="image"></li>
                                            <li><img src="/images/avatar-4.png" alt="image"></li>
                                        </ul>
                                        <span class="smtxt m-0">30k Member</span>
                                    </div>
                                    <div class="d-center btn-border pt-5 gap-2 mt-4">
                                        <button class="cmn-btn fourth">Joined</button>
                                        <button class="cmn-btn alt third">Invite</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="/images/group-img-6.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                            <span>Unfollow</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="abs-avatar-item">
                                        <img class="avatar-img max-un" src="/images/group-avatar-6.png" alt="avatar">
                                    </div>
                                    <a href="group-details.html">
                                        <h6 class="m-0 mb-2 mt-3">Fun Make Society</h6>
                                    </a>
                                    <p class="smtxt public-group">Public Group</p>
                                    <div class="friends-list d-center mt-3 gap-1 text-center">
                                        <ul class="d-center">
                                            <li><img src="/images/avatar-2.png" alt="image"></li>
                                            <li><img src="/images/avatar-3.png" alt="image"></li>
                                            <li><img src="/images/avatar-4.png" alt="image"></li>
                                        </ul>
                                        <span class="smtxt m-0">30k Member</span>
                                    </div>
                                    <div class="d-center btn-border pt-5 gap-2 mt-4">
                                        <button class="cmn-btn fourth">Joined</button>
                                        <button class="cmn-btn alt third">Invite</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="/images/group-img-1.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                            <span>Unfollow</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="abs-avatar-item">
                                        <img class="avatar-img max-un" src="/images/group-avatar-1.png" alt="avatar">
                                    </div>
                                    <a href="group-details.html">
                                        <h6 class="m-0 mb-2 mt-3">Travel Moon</h6>
                                    </a>
                                    <p class="smtxt public-group">Public Group</p>
                                    <div class="friends-list d-center mt-3 gap-1 text-center">
                                        <ul class="d-center">
                                            <li><img src="/images/avatar-2.png" alt="image"></li>
                                            <li><img src="/images/avatar-3.png" alt="image"></li>
                                            <li><img src="/images/avatar-4.png" alt="image"></li>
                                        </ul>
                                        <span class="smtxt m-0">30k Member</span>
                                    </div>
                                    <div class="d-center btn-border pt-5 gap-2 mt-4">
                                        <button class="cmn-btn fourth">Joined</button>
                                        <button class="cmn-btn alt third">Invite</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="/images/group-img-2.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                            <span>Unfollow</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="abs-avatar-item">
                                        <img class="avatar-img max-un" src="/images/group-avatar-2.png" alt="avatar">
                                    </div>
                                    <a href="group-details.html">
                                        <h6 class="m-0 mb-2 mt-3">Car Legend Community</h6>
                                    </a>
                                    <p class="smtxt public-group">Public Group</p>
                                    <div class="friends-list d-center mt-3 gap-1 text-center">
                                        <ul class="d-center">
                                            <li><img src="/images/avatar-2.png" alt="image"></li>
                                            <li><img src="/images/avatar-3.png" alt="image"></li>
                                            <li><img src="/images/avatar-4.png" alt="image"></li>
                                        </ul>
                                        <span class="smtxt m-0">30k Member</span>
                                    </div>
                                    <div class="d-center btn-border pt-5 gap-2 mt-4">
                                        <button class="cmn-btn fourth">Joined</button>
                                        <button class="cmn-btn alt third">Invite</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="/images/group-img-3.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                            <span>Unfollow</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="abs-avatar-item">
                                        <img class="avatar-img max-un" src="/images/group-avatar-3.png" alt="avatar">
                                    </div>
                                    <a href="group-details.html">
                                        <h6 class="m-0 mb-2 mt-3">Travel World</h6>
                                    </a>
                                    <p class="smtxt public-group">Public Group</p>
                                    <div class="friends-list d-center mt-3 gap-1 text-center">
                                        <ul class="d-center">
                                            <li><img src="/images/avatar-2.png" alt="image"></li>
                                            <li><img src="/images/avatar-3.png" alt="image"></li>
                                            <li><img src="/images/avatar-4.png" alt="image"></li>
                                        </ul>
                                        <span class="smtxt m-0">30k Member</span>
                                    </div>
                                    <div class="d-center btn-border pt-5 gap-2 mt-4">
                                        <button class="cmn-btn fourth">Joined</button>
                                        <button class="cmn-btn alt third">Invite</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
