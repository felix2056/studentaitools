@extends('layouts.app')

@section('title', 'Events')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            @include('includes.sidebar', ['class' => 'col-xl-3 col-lg-4'])

            <div class="col-xl-9 col-lg-8">
                <div class="head-area mb-4 mb-lg-5 mt-5 mt-lg-0">
                    <h6>Discover Events</h6>
                </div>
                <div class="top-area mb-5 d-center flex-wrap gap-3 justify-content-between">
                    <ul class="nav flex-wrap gap-2 tab-area" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center active" id="top-tab" data-bs-toggle="tab" data-bs-target="#top-tab-pane" type="button" role="tab" aria-controls="top-tab-pane" aria-selected="true">top</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center" id="local-tab" data-bs-toggle="tab" data-bs-target="#local-tab-pane" type="button" role="tab" aria-controls="local-tab-pane" aria-selected="false">local</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center" id="online-tab" data-bs-toggle="tab" data-bs-target="#online-tab-pane" type="button" role="tab" aria-controls="online-tab-pane" aria-selected="false">online</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center" id="saved-tab" data-bs-toggle="tab" data-bs-target="#saved-tab-pane" type="button" role="tab" aria-controls="saved-tab-pane" aria-selected="false">saved</button>
                        </li>
                    </ul>

                    <div class="btn-item">
                        <a href="event.html" class="cmn-btn gap-1">
                            <i class="material-symbols-outlined mat-icon"> add </i>
                            Create Event
                        </a>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="top-tab-pane" role="tabpanel" aria-labelledby="top-tab" tabindex="0">
                        <div class="row cus-mar friend-request">
                            @foreach ($events as $event)
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="{{ $event->image }}" width="266" height="200" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">{{ date('d M Y', strtotime($event->start_date)) }}</span>
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> person_add </i>
                                                            <span>Follow</span>
                                                        </a>
                                                    </li>
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

                                    <a href="{{ route('events.show', $event->slug) }}">
                                        <h6 class="m-0 mt-4">{{ $event->title }}</h6>
                                    </a>
                                    
                                    <span class="smtxt city-area">
                                        @if ($event->type == 'local' && $event->location)
                                            {{ $event->location }}
                                        @else
                                            Online
                                        @endif
                                    </span>
                                    
                                    <div class="d-center gap-2 mt-4">
                                        @auth
                                        <a class="cmn-btn" href="{{ route('events.interested', $event->id) }}">
                                            <i class="material-symbols-outlined mat-icon"> grade </i>
                                            @if (Auth::user()->events->contains($event->id))
                                                not interested
                                            @else 
                                                interested
                                            @endif
                                        </a>
                                        @else
                                            <a class="cmn-btn" href="{{ route('login') }}">
                                                <i class="material-symbols-outlined mat-icon"> grade </i>
                                                interested
                                            </a>
                                        @endauth
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="local-tab-pane" role="tabpanel" aria-labelledby="local-tab" tabindex="0">
                        <div class="row cus-mar friend-request">
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-8.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-9.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-3.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-4.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-5.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-6.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="online-tab-pane" role="tabpanel" aria-labelledby="online-tab" tabindex="0">
                        <div class="row cus-mar friend-request">
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-4.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-5.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-6.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-7.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-1.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival</h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-2.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-3.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="saved-tab-pane" role="tabpanel" aria-labelledby="saved-tab" tabindex="0">
                        <div class="row cus-mar friend-request">
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-7.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-8.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-9.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-4.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-5.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-8">
                                <div class="single-box p-5">
                                    <div class="avatar-box position-relative">
                                        <img class="avatar-img w-100" src="images/event-img-6.png" alt="avatar">
                                        <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                                            <span class="date-area mdtxt">2 DEC 2022</span>
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
                                    <a href="event-details.html"><h6 class="m-0 mt-4">Martio Music Event I Biggest Music Festival </h6></a>
                                    <span class="smtxt city-area">Alaska,CA</span>
                                    <div class="d-center gap-2 mt-4">
                                        <button class="cmn-btn">interested</button>
                                        <button class="cmn-btn alt third">Share</button>
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
