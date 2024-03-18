@extends('layouts.app')

@section('title', 'Newsfeed')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('content')
<main class="main-content">
    <div class="container sidebar-toggler">
        <div class="row">
            @include('includes.sidebar', ['class' => 'col-xl-3 col-lg-4'])

            <div class="col-xxl-6 col-xl-5 col-lg-8 mt-0 mt-lg-10 mt-xl-0 d-flex flex-column gap-7 cus-z">
                {{-- <div class="story-carousel">
                    <div class="single-item">
                        <div class="single-slide">
                            <a href="#" class="position-relative d-center">
                                <img class="bg-img" src="/images/story-slider-owner.png" alt="icon">
                                <div class="abs-area d-grid p-3 position-absolute bottom-0">
                                    <div class="icon-box m-auto d-center mb-3">
                                        <i class="material-symbols-outlined text-center mat-icon"> add </i>
                                    </div>
                                    <span class="mdtxt">Add Story</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-slide">
                            <div class="position-relative d-flex">
                                <img class="bg-img" src="/images/story-slider-1.png" alt="image">
                                <a href="public-profile-post.html" class="abs-area p-3 position-absolute bottom-0">
                                    <img src="/images/avatar-1.png" alt="image">
                                    <span class="mdtxt">Alen Lio</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-slide">
                            <div class="position-relative d-flex">
                                <img class="bg-img" src="/images/story-slider-2.png" alt="image">
                                <a href="public-profile-post.html" class="abs-area p-3 position-absolute bottom-0">
                                    <img src="/images/avatar-2.png" alt="image">
                                    <span class="mdtxt">Josep</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-slide">
                            <div class="position-relative d-flex">
                                <img class="bg-img" src="/images/story-slider-3.png" alt="image">
                                <a href="public-profile-post.html" class="abs-area p-3 position-absolute bottom-0">
                                    <img src="/images/avatar-3.png" alt="image">
                                    <span class="mdtxt">Jessica</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-slide">
                            <div class="position-relative d-flex">
                                <img class="bg-img" src="/images/story-slider-4.png" alt="image">
                                <a href="public-profile-post.html" class="abs-area p-3 position-absolute bottom-0">
                                    <img src="/images/avatar-4.png" alt="image">
                                    <span class="mdtxt">Alen</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="single-slide">
                            <div class="position-relative d-flex">
                                <img class="bg-img" src="/images/story-slider-4.png" alt="image">
                                <a href="public-profile-post.html" class="abs-area p-3 position-absolute bottom-0">
                                    <img src="/images/avatar-5.png" alt="image">
                                    <span class="mdtxt">Jacob Jones</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}

                @include('includes.newsfeed.create')

                <div class="post-item d-flex flex-column gap-5 gap-md-7" id="news-feed">
                    @include('includes.newsfeed.posts', ['posts' => $posts])
                </div>
            </div>

            <div class="col-xxl-3 col-xl-4 col-lg-4 col-6 mt-5 mt-xl-0">
                <div class="cus-overflow cus-scrollbar sidebar-head">
                    <div class="d-flex justify-content-end">
                        <div class="d-block d-xl-none me-4">
                            <button class="button toggler-btn mb-4 mb-lg-0 d-flex align-items-center gap-2">
                                <span>My List</span>
                                <i class="material-symbols-outlined mat-icon"> tune </i>
                            </button>
                        </div>
                    </div>
                    <div class="cus-scrollbar side-wrapper">
                        <div class="sidebar-wrapper d-flex flex-column gap-6">
                            <div class="sidebar-area p-5">
                                <div class=" mb-4">
                                    <h6 class="d-inline-flex position-relative">
                                        Request
                                        <span class="mdtxt abs-area d-center position-absolute">2</span>
                                    </h6>
                                </div>
                                <div class="d-grid gap-6">
                                    <div class="single-single">
                                        <div class="profile-pic d-flex gap-3 align-items-center">
                                            <div class="avatar">
                                                <img class="avatar-img max-un" src="/images/avatar-4.png" alt="avatar">
                                            </div>
                                            <div class="text-area">
                                                <a href="public-profile-post.html"><h6 class="m-0">Lerio Mao</h6></a>
                                                <div class="friends-list d-flex gap-3 align-items-center text-center">
                                                    <ul class="d-flex align-items-center justify-content-center">
                                                        <li><img src="/images/avatar-2.png" alt="image"></li>
                                                        <li><img src="/images/avatar-3.png" alt="image"></li>
                                                        <li><img src="/images/avatar-4.png" alt="image"></li>
                                                    </ul>
                                                    <span class="mdtxt d-center">10 mutual friends</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3 mt-4">
                                            <button class="cmn-btn">Confirm</button>
                                            <button class="cmn-btn alt">Delete</button>
                                        </div>
                                    </div>
                                    <div class="single-single">
                                        <div class="profile-pic d-flex gap-3 align-items-center">
                                            <div class="avatar">
                                                <img class="avatar-img max-un" src="/images/avatar-5.png" alt="avatar">
                                            </div>
                                            <div class="text-area">
                                                <h6 class="m-0"><a href="public-profile-post.html">Marinez</a></h6>
                                                <div class="friends-list d-flex gap-3 align-items-center text-center">
                                                    <ul class="d-flex align-items-center justify-content-center">
                                                        <li><img src="/images/avatar-2.png" alt="image"></li>
                                                        <li><img src="/images/avatar-3.png" alt="image"></li>
                                                        <li><img src="/images/avatar-4.png" alt="image"></li>
                                                    </ul>
                                                    <span class="mdtxt d-center">10 mutual friends</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3 mt-4">
                                            <button class="cmn-btn">Confirm</button>
                                            <button class="cmn-btn alt">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-area p-5">
                                <div class="mb-4">
                                    <h6 class="d-inline-flex">
                                        Contact
                                    </h6>
                                </div>
                                <div class="d-flex flex-column gap-6">
                                    <div class="profile-area d-center position-relative align-items-center justify-content-between">
                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="/images/avatar-6.png" alt="avatar">
                                            </div>
                                            <div class="info-area">
                                                <h6 class="m-0"><a href="public-profile-post.html" class="mdtxt">Piter Maio</a></h6>
                                            </div>
                                        </div>
                                        <span class="mdtxt abs-area d-center position-absolute end-0">5</span>
                                    </div>
                                    <div class="profile-area d-center justify-content-between">
                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="/images/avatar-7.png" alt="avatar">
                                            </div>
                                            <div class="info-area">
                                                <h6 class="m-0"><a href="public-profile-post.html" class="mdtxt">Floyd Miles</a></h6>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
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
                                    <div class="profile-area d-center justify-content-between">
                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="/images/avatar-8.png" alt="avatar">
                                            </div>
                                            <div class="info-area">
                                                <h6 class="m-0"><a href="public-profile-post.html" class="mdtxt">Darrell Steward</a></h6>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
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
                                    <div class="profile-area d-center justify-content-between">
                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="/images/avatar-2.png" alt="avatar">
                                            </div>
                                            <div class="info-area">
                                                <h6 class="m-0"><a href="public-profile-post.html" class="mdtxt">Kristin Watson</a></h6>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
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
                                    <div class="profile-area d-center justify-content-between">
                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="/images/avatar-3.png" alt="avatar">
                                            </div>
                                            <div class="info-area">
                                                <h6 class="m-0"><a href="public-profile-post.html" class="mdtxt">Jane Cooper</a></h6>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
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
                                    <div class="profile-area d-center justify-content-between">
                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="/images/avatar-4.png" alt="avatar">
                                            </div>
                                            <div class="info-area">
                                                <h6 class="m-0"><a href="public-profile-post.html" class="mdtxt">Devon Lane</a></h6>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
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
                                    <div class="profile-area d-center justify-content-between">
                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="/images/avatar-9.png" alt="avatar">
                                            </div>
                                            <div class="info-area">
                                                <h6 class="m-0"><a href="public-profile-post.html" class="mdtxt">Annette Black</a></h6>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
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
                                    <div class="profile-area d-center justify-content-between">
                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="/images/avatar-10.png" alt="avatar">
                                            </div>
                                            <div class="info-area">
                                                <h6 class="m-0"><a href="public-profile-post.html" class="mdtxt">Jerome Bell</a></h6>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
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
                                    <div class="profile-area d-center justify-content-between">
                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="/images/avatar-11.png" alt="avatar">
                                            </div>
                                            <div class="info-area">
                                                <h6 class="m-0"><a href="public-profile-post.html" class="mdtxt">Guy Hawkins</a></h6>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
