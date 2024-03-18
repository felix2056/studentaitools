@extends('layouts.app')

@section('title', $user->name . ' - Photos')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @include('includes.profile.banner', ['user' => $user])
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-9 col-xl-8">
                <div class="single-box p-5">
                    <div class="row cus-mar">
                        @foreach ($user->posts->pluck('images')->toArray() as $images)
                        @foreach ($images as $image)
                        <div class="col-md-4 col-6">
                            <div class="single-box">
                                <img class="w-100" src="{{ $image }}" alt="image" width="293" height="213">
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-10 mt-5 mt-xl-0">
                <div class="cus-scrollbar">
                    <div class="sidebar-wrapper d-flex al-item justify-content-end justify-content-xl-center flex-column flex-md-row flex-xl-column flex gap-6">
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
                                            <img class="avatar-img max-un" src="images/avatar-6.png" alt="avatar">
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
                                            <img class="avatar-img max-un" src="images/avatar-7.png" alt="avatar">
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
                                            <img class="avatar-img max-un" src="images/avatar-8.png" alt="avatar">
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
                                            <img class="avatar-img max-un" src="images/avatar-2.png" alt="avatar">
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
                                            <img class="avatar-img max-un" src="images/avatar-3.png" alt="avatar">
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
                                            <img class="avatar-img max-un" src="images/avatar-4.png" alt="avatar">
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
                                            <img class="avatar-img max-un" src="images/avatar-9.png" alt="avatar">
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
                                            <img class="avatar-img max-un" src="images/avatar-10.png" alt="avatar">
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
                                            <img class="avatar-img max-un" src="images/avatar-11.png" alt="avatar">
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
</main>
@endsection