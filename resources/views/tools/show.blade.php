@extends('layouts.app')

@section('title',  $tool->name)

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            @include('includes.sidebar', ['class' => 'col-xl-3 col-lg-4'])

            <div class="col-xl-9 col-lg-8">
                <div class="banner-area pages-create mb-5">
                    <div class="single-box p-5">
                        <div class="slider-tools">
                            <div class="single-slide avatar-area">
                                <img class="avatar-img w-100" src="{{ $tool->screenshot1 }}" alt="image">
                            </div>
                            <div class="single-slide avatar-area">
                                <img class="avatar-img w-100" src="{{ $tool->screenshot2 }}" alt="image">
                            </div>
                            <div class="single-slide avatar-area">
                                <img class="avatar-img w-100" src="{{ $tool->screenshot3 }}" alt="image">
                            </div>
                        </div>

                        <div class="top-area py-4 d-center flex-wrap gap-3 justify-content-between">
                            <div class="d-flex gap-3 align-items-center">
                                <div class="abs-avatar-item m-0">
                                    <img class="avatar-img max-un" src="{{ $tool->favicon }}" width="57" height="57" alt="avatar">
                                </div>
                                <div class="text-area text-start">
                                    <h5 class="m-0 mb-1">{{ $tool->name }}</h5>
                                    <p class="mdtxt">{{ $tool->category_name }}</p>
                                </div>
                            </div>
                            <div class="btn-item d-center gap-3">
                                <a href="{{ route('tools.favorite', $tool->slug) }}" class="cmn-btn fourth gap-1">
                                    <i class="material-symbols-outlined mat-icon"> bookmark_add </i>
                                    @if(auth()->user() && auth()->user()->favorites->contains($tool->id))
                                        Saved
                                    @else
                                        Save
                                    @endif
                                </a>

                                <a href="{{ $tool->link }}" target="_blank" class="cmn-btn third gap-1">
                                    <i class="material-symbols-outlined mat-icon fs-xl"> open_in_new </i>
                                    Visit site
                                </a>

                                <a href="#shareMod" data-bs-toggle="modal" data-bs-target="#shareMod" class="cmn-btn third gap-1">
                                    <i class="material-symbols-outlined mat-icon fs-xl"> share </i>
                                    Share
                                </a>

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

                        <div class="friends-list d-flex flex-wrap gap-2 align-items-center text-center">
                            <ul class="d-flex align-items-center justify-content-center">
                                <li><img src="/images/avatar-3.png" alt="image"></li>
                                <li><img src="/images/avatar-2.png" alt="image"></li>
                                <li><img src="/images/avatar-4.png" alt="image"></li>
                                <li><img src="/images/avatar-5.png" alt="image"></li>
                                <li><img src="/images/avatar-6.png" alt="image"></li>
                                <li><img src="/images/avatar-7.png" alt="image"></li>
                                <li><img src="/images/avatar-8.png" alt="image"></li>
                                <li><img src="/images/avatar-9.png" alt="image"></li>
                                <li><img src="/images/avatar-10.png" alt="image"></li>
                            </ul>
                            <span class="mdtxt d-center">Rezeka, Martiola, Larmjio, and 10+ more favorited</span>
                        </div>
                        <div class="page-details">
                            <ul class="nav mt-5 pt-4 flex-wrap gap-2 tab-area" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-center active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about-tab-pane" type="button" role="tab" aria-controls="about-tab-pane" aria-selected="false">about</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-center" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane" aria-selected="false">reviews</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-center" id="pros-cons-tab" data-bs-toggle="tab" data-bs-target="#pros-cons-tab-pane" type="button" role="tab" aria-controls="pros-cons-tab-pane" aria-selected="false">pros & cons</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-center" id="saves-tab" data-bs-toggle="tab" data-bs-target="#saves-tab-pane" type="button" role="tab" aria-controls="saves-tab-pane" aria-selected="false">saves</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-center" id="media-tab" data-bs-toggle="tab" data-bs-target="#media-tab-pane" type="button" role="tab" aria-controls="media-tab-pane" aria-selected="false">media</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link d-center" id="videos-tab" data-bs-toggle="tab" data-bs-target="#videos-tab-pane" type="button" role="tab" aria-controls="videos-tab-pane" aria-selected="false">videos</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-7">
                                <div class="single-box p-3 p-sm-5">
                                    <div class="head-area text-start">
                                        <h6>Overview</h6>
                                        <p class="mdtxt mt-6">{!! $tool->content !!}</p>
                                    </div>

                                    <ul class="d-grid gap-3 mt-4">
                                        <li class="d-center gap-3 justify-content-between">
                                            <div class="info-area d-flex align-items-center gap-2">
                                                <i class="material-symbols-outlined mat-icon"> integration_instructions </i>
                                                <span class="mdtxt">Developer</span>
                                            </div>
                                            <div class="input-item d-center text-start">
                                                <div class="group-btn cus-dropdown dropend">
                                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                                <span>Public</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                                <span>Only me</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                                <span>Share</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="group-btn cus-dropdown dropend">
                                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                                <span>Edit</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-center gap-3 justify-content-between">
                                            <div class="info-area d-flex align-items-center gap-2">
                                                <i class="material-symbols-outlined mat-icon"> school </i>
                                                <span class="mdtxt">Master's degree</span>
                                            </div>
                                            <div class="input-item d-center text-start">
                                                <div class="group-btn cus-dropdown dropend">
                                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                                <span>Public</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                                <span>Only me</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                                <span>Share</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="group-btn cus-dropdown dropend">
                                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                                <span>Edit</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-center gap-3 justify-content-between">
                                            <div class="info-area d-flex align-items-center gap-2">
                                                <i class="material-symbols-outlined mat-icon"> flag </i>
                                                <span class="mdtxt link"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="592d3c2a2d1934383035773a3634">[email&#160;protected]</a></span>
                                            </div>
                                            <div class="input-item d-center text-start">
                                                <div class="group-btn cus-dropdown dropend">
                                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                                <span>Public</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                                <span>Only me</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                                <span>Share</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="group-btn cus-dropdown dropend">
                                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                                <span>Edit</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-center gap-3 justify-content-between">
                                            <div class="info-area d-flex align-items-center gap-2">
                                                <i class="material-symbols-outlined mat-icon"> language </i>
                                                <span class="mdtxt link">www.wisoky.com</span>
                                            </div>
                                            <div class="input-item d-center text-start">
                                                <div class="group-btn cus-dropdown dropend">
                                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                                <span>Public</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                                <span>Only me</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                                <span>Share</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="group-btn cus-dropdown dropend">
                                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                                <span>Edit</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-center gap-3 justify-content-between">
                                            <div class="info-area d-flex align-items-center gap-2">
                                                <i class="material-symbols-outlined mat-icon"> call </i>
                                                <span class="mdtxt">(316) 555-0116</span>
                                            </div>
                                            <div class="input-item d-center text-start">
                                                <div class="group-btn cus-dropdown dropend">
                                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                                <span>Public</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                                <span>Only me</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                                <span>Share</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="group-btn cus-dropdown dropend">
                                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                                <span>Edit</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-center gap-3 justify-content-between">
                                            <div class="info-area d-flex align-items-center gap-2">
                                                <i class="material-symbols-outlined mat-icon"> pin_drop </i>
                                                <span class="mdtxt">USA</span>
                                            </div>
                                            <div class="input-item d-center text-start">
                                                <div class="group-btn cus-dropdown dropend">
                                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                                <span>Public</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                                <span>Only me</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                                <span>Share</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="group-btn cus-dropdown dropend">
                                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                                <span>Edit</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-center gap-3 justify-content-between">
                                            <div class="info-area d-flex align-items-center gap-2">
                                                <i class="material-symbols-outlined mat-icon"> house </i>
                                                <span class="mdtxt">775 Rolling Green Rd.</span>
                                            </div>
                                            <div class="input-item d-center text-start">
                                                <div class="group-btn cus-dropdown dropend">
                                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                                <span>Public</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                                <span>Only me</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                                <span>Share</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="group-btn cus-dropdown dropend">
                                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                                <span>Edit</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            @include('includes.tools.sidebar', ['tool' => $tool, 'active' => 'about'])
                        </div>
                    </div>

                    <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab" tabindex="0">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-7">
                                <div class="single-box p-3 p-sm-5">
                                    <div class="customer-reviews">
                                        @if ($tool->ratings->count() > 0)
                                            @foreach ($tool->ratings as $rating)
                                                <div class="single-review">
                                                    <div class="head-area d-flex align-items-center justify-content-between">
                                                        <div class="star-area d-flex align-items-center">
                                                            @for ($i = 0; $i < $rating->rating; $i++)
                                                                <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                            @endfor
                                                        </div>
                                                        <div class="date">
                                                            <span class="fs-6">{{ $rating->created_at->format('F j, Y') }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="profile-area d-flex my-5 gap-3">
                                                        <div class="img-area">
                                                            <img src="{{ $rating->user->avatar }}" alt="image">
                                                        </div>
                                                        <div class="text-area">
                                                            <h6><a href="public-profile-post.html">{{ $rating->user->username }}</a></h6>
                                                            <span class="fs-6">{{ $rating->user->country }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="review-text text-left">
                                                        <h6>{{ $rating->title }}...</h6>
                                                        <p>{{ $rating->review }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="single-review">
                                                <div class="review-text text-left">
                                                    <p>No reviews yet</p>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="review-box">
                                            <div class="add-review">
                                                <h5>Add A Review</h5>
                                                <form action="{{ route('tools.review', $tool->slug) }}" method="POST">
                                                    @csrf
                                                    <div class="d-md-flex align-items-center my-4 mb-60">
                                                        <p>Your Rating:</p>
                                                        <div class="star-head d-flex mx-3 gap-4 flex-wrap align-items-center">
                                                            <div class="star-item">
                                                                <label>
                                                                    <input type="radio" name="stars" value="1" />
                                                                    <span class="icon">★</span>
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="stars" value="2" />
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="stars" value="3" />
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="stars" value="4" />
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="stars" value="5" />
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                    <span class="icon">★</span>
                                                                </label>


                                                                {{-- <div class="star-head d-flex mx-3 gap-4 flex-wrap align-items-center">
                                                                    <div class="star-item">
                                                                        <input type="radio" name="rating" value="1" />
                                                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                                    </div>
                                                                    <div class="star-item">
                                                                        <input type="radio" name="rating" value="2" />
                                                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                                    </div>
                                                                    <div class="star-item">
                                                                        <input type="radio" name="rating" value="3" />
                                                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                                    </div>
                                                                    <div class="star-item">
                                                                        <input type="radio" name="rating" value="4" />
                                                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                                    </div>
                                                                    <div class="star-item">
                                                                        <input type="radio" name="rating" value="5" />
                                                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                                        <a href="javascript:void(0)"><i class="fas fa-star"></i></a>
                                                                    </div>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        {{-- @guest
                                                        <div class="col-sm-6">
                                                            <div class="single-input">
                                                                <input type="text" name="name" placeholder="Enter Your Name" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="single-input">
                                                                <input type="email" name="email" placeholder="Enter Your Email" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        @endguest --}}

                                                        <div class="col-sm-12">
                                                            <div class="single-input">
                                                                <textarea name="review" cols="30" rows="5" placeholder="Enter Your Message"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-area text-center">
                                                        <button type="submit" class="cmn-btn">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @include('includes.tools.sidebar', ['tool' => $tool, 'active' => 'reviews'])
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pros-cons-tab-pane" role="tabpanel" aria-labelledby="pros-cons-tab" tabindex="0">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-7">
                                <div class="single-box p-3 p-sm-5">
                                    <div class="head-area text-start">
                                        <h6>Pros</h6>
                                    </div>

                                    <ul class="d-grid gap-3 mt-4">
                                        @foreach ($tool->pros as $pro)
                                            <li class="d-center gap-3 justify-content-between">
                                                <div class="info-area d-flex align-items-center gap-2">
                                                    <i class="material-symbols-outlined mat-icon"> integration_instructions </i>
                                                    <span class="mdtxt">{{ $pro }}</span>
                                                </div>
                                                <div class="input-item d-center text-start">
                                                    <i class="material-symbols-outlined mat-icon"> check </i>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="single-box p-3 p-sm-5 mt-5">
                                    <div class="head-area text-start">
                                        <h6>Cons</h6>
                                    </div>

                                    <ul class="d-grid gap 3 mt-4">
                                        @foreach ($tool->cons as $con)
                                            <li class="d-center gap-3 justify-content-between">
                                                <div class="info-area d-flex align-items-center gap-2">
                                                    <i class="material-symbols-outlined mat-icon"> school </i>
                                                    <span class="mdtxt">{{ $con }}</span>
                                                </div>
                                                <div class="input-item d-center text-start">
                                                    <i class="material-symbols-outlined mat-icon"> close </i>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            @include('includes.tools.sidebar', ['tool' => $tool, 'active' => 'pros-cons'])
                        </div>
                    </div>

                    <div class="tab-pane fade" id="saves-tab-pane" role="tabpanel" aria-labelledby="saves-tab" tabindex="0">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="single-box p-5">
                                    <ul class="nav flex-wrap gap-2 tab-area" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link d-center active" id="favorites-tab" data-bs-toggle="tab" data-bs-target="#favorites-tab-pane" type="button" role="tab" aria-controls="favorites-tab-pane" aria-selected="true">favorites</button>
                                        </li>
                                        {{-- <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="following-tab" data-bs-toggle="tab" data-bs-target="#following-tab-pane" type="button" role="tab" aria-controls="following-tab-pane" aria-selected="false" tabindex="-1">following</button>
                                        </li> --}}
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="favorites-tab-pane" role="tabpanel" aria-labelledby="favorites-tab" tabindex="0">
                                        <div class="search-area d-center my-7 flex-wrap gap-2 justify-content-between">
                                            <div class="total-followers">
                                                <h6>{{ $tool->favorites->count() }} Saves</h6>
                                            </div>
                                            <form action="#" class="d-flex align-items-stretch justify-content-between gap-4">
                                                <div class="input-area py-2 w-100 gap-2 d-flex align-items-center">
                                                    <i class="material-symbols-outlined mat-icon">search</i>
                                                    <input type="text" placeholder="Search" autocomplete="off">
                                                </div>
                                            </form>
                                        </div>

                                        <div class="row">
                                            @foreach ($tool->favorites as $favorite)
                                                <div class="col-md-6">
                                                    <div class="single-box member-single p-3">
                                                        <div class="profile-area d-center justify-content-between">
                                                            <div class="avatar-item d-flex gap-3 align-items-center">
                                                                <div class="avatar-item">
                                                                    <img class="avatar-img max-un" src="{{ $favorite->user->avatar }}" alt="avatar">
                                                                </div>
                                                                <div class="info-area text-start">
                                                                    <h6 class="m-0"><a href="public-profile-post.html">{{ $favorite->user->username }}</a></h6>
                                                                    {{-- <p class="mdtxt status">10 Mutual Friends</p> --}}
                                                                </div>
                                                            </div>

                                                            <div class="group-btn cus-dropdown">
                                                                <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                            <span>Hide Contact</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="col-12 my-5 text-center">
                                                <button class="cmn-btn alt third fw-600">Load More</button>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="tab-pane fade" id="following-tab-pane" role="tabpanel" aria-labelledby="following-tab" tabindex="0">
                                        <div class="search-area d-center my-7 flex-wrap gap-2 justify-content-between">
                                            <div class="total-followers">
                                                <h6>30k Followers</h6>
                                            </div>
                                            <form action="#" class="d-flex align-items-stretch justify-content-between gap-4">
                                                <div class="input-area py-2 w-100 gap-2 d-flex align-items-center">
                                                    <i class="material-symbols-outlined mat-icon">search</i>
                                                    <input type="text" placeholder="Search" autocomplete="off">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="single-box member-single p-3">
                                                    <div class="profile-area d-center justify-content-between">
                                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                                            <div class="avatar-item">
                                                                <img class="avatar-img max-un" src="/images/followers-img-6.png" alt="avatar">
                                                            </div>
                                                            <div class="info-area text-start">
                                                                <h6 class="m-0"><a href="public-profile-post.html">Arlene McCoy</a></h6>
                                                                <p class="mdtxt status">10 Mutual Friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="group-btn cus-dropdown">
                                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <span>Hide Contact</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-box member-single p-3">
                                                    <div class="profile-area d-center justify-content-between">
                                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                                            <div class="avatar-item">
                                                                <img class="avatar-img max-un" src="/images/followers-img-7.png" alt="avatar">
                                                            </div>
                                                            <div class="info-area text-start">
                                                                <h6 class="m-0"><a href="public-profile-post.html">Devon Lane</a></h6>
                                                                <p class="mdtxt status">10 Mutual Friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="group-btn cus-dropdown">
                                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <span>Hide Contact</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-box member-single p-3">
                                                    <div class="profile-area d-center justify-content-between">
                                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                                            <div class="avatar-item">
                                                                <img class="avatar-img max-un" src="/images/followers-img-8.png" alt="avatar">
                                                            </div>
                                                            <div class="info-area text-start">
                                                                <h6 class="m-0"><a href="public-profile-post.html">Ronald Richards</a></h6>
                                                                <p class="mdtxt status">10 Mutual Friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="group-btn cus-dropdown">
                                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <span>Hide Contact</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-box member-single p-3">
                                                    <div class="profile-area d-center justify-content-between">
                                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                                            <div class="avatar-item">
                                                                <img class="avatar-img max-un" src="/images/followers-img-9.png" alt="avatar">
                                                            </div>
                                                            <div class="info-area text-start">
                                                                <h6 class="m-0"><a href="public-profile-post.html">Kathryn Murphy</a></h6>
                                                                <p class="mdtxt status">10 Mutual Friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="group-btn cus-dropdown">
                                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <span>Hide Contact</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-box member-single p-3">
                                                    <div class="profile-area d-center justify-content-between">
                                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                                            <div class="avatar-item">
                                                                <img class="avatar-img max-un" src="/images/followers-img-3.png" alt="avatar">
                                                            </div>
                                                            <div class="info-area text-start">
                                                                <h6 class="m-0"><a href="public-profile-post.html">Brooklyn Simmons</a></h6>
                                                                <p class="mdtxt status">10 Mutual Friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="group-btn cus-dropdown">
                                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <span>Hide Contact</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-box member-single p-3">
                                                    <div class="profile-area d-center justify-content-between">
                                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                                            <div class="avatar-item">
                                                                <img class="avatar-img max-un" src="/images/followers-img-13.png" alt="avatar">
                                                            </div>
                                                            <div class="info-area text-start">
                                                                <h6 class="m-0"><a href="public-profile-post.html">Cameron Williamson</a></h6>
                                                                <p class="mdtxt status">10 Mutual Friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="group-btn cus-dropdown">
                                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <span>Hide Contact</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-box member-single p-3">
                                                    <div class="profile-area d-center justify-content-between">
                                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                                            <div class="avatar-item">
                                                                <img class="avatar-img max-un" src="/images/followers-img-14.png" alt="avatar">
                                                            </div>
                                                            <div class="info-area text-start">
                                                                <h6 class="m-0"><a href="public-profile-post.html">Wade Warren</a></h6>
                                                                <p class="mdtxt status">10 Mutual Friends</p>
                                                            </div>
                                                        </div>
                                                        <div class="group-btn cus-dropdown">
                                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                                        <span>Hide Contact</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 my-5 text-center">
                                                <button class="cmn-btn alt third fw-600">Load More</button>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                            @include('includes.tools.sidebar', ['tool' => $tool, 'active' => 'saves'])
                        </div>
                    </div>

                    <div class="tab-pane fade" id="media-tab-pane" role="tabpanel" aria-labelledby="media-tab" tabindex="0">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="single-box p-5">
                                    <div class="row cus-mar">
                                        @foreach($tool->image_urls as $image)
                                            <div class="col-md-4 col-6">
                                                <div class="single-box">
                                                    <img class="w-100" src="{{ $image }}" alt="image">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            @include('includes.tools.sidebar', ['tool' => $tool, 'active' => 'media'])
                        </div>
                    </div>

                    <div class="tab-pane fade" id="videos-tab-pane" role="tabpanel" aria-labelledby="videos-tab" tabindex="0">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-8">
                                <div class="single-box p-5">
                                    <div class="row cus-mar">
                                        <div class="col-md-6">
                                            <div class="single-box">
                                                <div class="magnific-area position-relative d-flex align-items-center justify-content-around">
                                                    <div class="bg-area w-100">
                                                        <img class="bg-item w-100" src="/images/video-bg-1.png" alt="image">
                                                    </div>
                                                    <div class="content-area text-center position-absolute d-flex align-items-center justify-content-center">
                                                        <div class="content-box">
                                                            <a class="mfp-iframe popupvideo d-flex align-items-center justify-content-center" href="https://www.youtube.com/watch?v=Djz8Nc0Qxwk">
                                                                <i class="material-symbols-outlined mat-icon fs-1"> play_arrow </i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-box">
                                                <div class="magnific-area position-relative d-flex align-items-center justify-content-around">
                                                    <div class="bg-area w-100">
                                                        <img class="bg-item w-100" src="/images/video-bg-2.png" alt="image">
                                                    </div>
                                                    <div class="content-area text-center position-absolute d-flex align-items-center justify-content-center">
                                                        <div class="content-box">
                                                            <a class="mfp-iframe popupvideo d-flex align-items-center justify-content-center" href="https://www.youtube.com/watch?v=Djz8Nc0Qxwk">
                                                                <i class="material-symbols-outlined mat-icon fs-1"> play_arrow </i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-box">
                                                <div class="magnific-area position-relative d-flex align-items-center justify-content-around">
                                                    <div class="bg-area w-100">
                                                        <img class="bg-item w-100" src="/images/video-bg-3.png" alt="image">
                                                    </div>
                                                    <div class="content-area text-center position-absolute d-flex align-items-center justify-content-center">
                                                        <div class="content-box">
                                                            <a class="mfp-iframe popupvideo d-flex align-items-center justify-content-center" href="https://www.youtube.com/watch?v=Djz8Nc0Qxwk">
                                                                <i class="material-symbols-outlined mat-icon fs-1"> play_arrow </i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-box">
                                                <div class="magnific-area position-relative d-flex align-items-center justify-content-around">
                                                    <div class="bg-area w-100">
                                                        <img class="bg-item w-100" src="/images/video-bg-4.png" alt="image">
                                                    </div>
                                                    <div class="content-area text-center position-absolute d-flex align-items-center justify-content-center">
                                                        <div class="content-box">
                                                            <a class="mfp-iframe popupvideo d-flex align-items-center justify-content-center" href="https://www.youtube.com/watch?v=Djz8Nc0Qxwk">
                                                                <i class="material-symbols-outlined mat-icon fs-1"> play_arrow </i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-box">
                                                <div class="magnific-area position-relative d-flex align-items-center justify-content-around">
                                                    <div class="bg-area w-100">
                                                        <img class="bg-item w-100" src="/images/video-bg-5.png" alt="image">
                                                    </div>
                                                    <div class="content-area text-center position-absolute d-flex align-items-center justify-content-center">
                                                        <div class="content-box">
                                                            <a class="mfp-iframe popupvideo d-flex align-items-center justify-content-center" href="https://www.youtube.com/watch?v=Djz8Nc0Qxwk">
                                                                <i class="material-symbols-outlined mat-icon fs-1"> play_arrow </i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-box">
                                                <div class="magnific-area position-relative d-flex align-items-center justify-content-around">
                                                    <div class="bg-area w-100">
                                                        <img class="bg-item w-100" src="/images/video-bg-6.png" alt="image">
                                                    </div>
                                                    <div class="content-area text-center position-absolute d-flex align-items-center justify-content-center">
                                                        <div class="content-box">
                                                            <a class="mfp-iframe popupvideo d-flex align-items-center justify-content-center" href="https://www.youtube.com/watch?v=Djz8Nc0Qxwk">
                                                                <i class="material-symbols-outlined mat-icon fs-1"> play_arrow </i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            @include('includes.tools.sidebar', ['tool' => $tool, 'active' => 'videos'])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
