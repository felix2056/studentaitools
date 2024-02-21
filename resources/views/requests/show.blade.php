@extends('layouts.app')

@section('title', 'Requests')

@section('content')
<main class="main-content">
    <div class="container sidebar-toggler">
        <div class="row">
            @include('includes.sidebar', ['class' => 'col-xxl-3 col-xl-3 col-lg-4 col-6 cus-z2'])
            
            <div class="col-xxl-6 col-xl-5 col-lg-8 mt-0 mt-lg-10 mt-xl-0 d-flex flex-column gap-7 cus-z">
                <div class="post-item d-flex flex-column gap-5 gap-md-7">
                    <div class="post-single-box p-3 p-sm-5">
                        <div class="top-area pb-5">
                            <div class="profile-area d-center justify-content-between">
                                <div class="avatar-item d-flex gap-3 align-items-center">
                                    <div class="avatar-item">
                                        <img class="avatar-img max-un" src="{{ $request->user->avatar }}" alt="avatar">
                                    </div>
                                    <div class="info-area">
                                        <h6 class="m-0"><a href="public-profile-post.html">{{ $request->user->username }}</a></h6>
                                        <span class="mdtxt status">{{ Carbon\Carbon::parse($request->created_at)->diffForHumans() }}</span>
                                    </div>
                                </div>

                                <div class="btn-group cus-dropdown">
                                    <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>

                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> bookmark_add </i>
                                                <span>Saved Post</span>
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
                                                <span>Hide Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> lock </i>
                                                <span>Block</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> flag </i>
                                                <span>Report Post</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="py-4 description-item">
                                <h6 class="mb-3">{{ $request->title }}</h6>
                                <p class="description mb-6">{!! $request->description !!}</p>
                            </div>

                            {{-- <div class="post-img">
                                <img src="/images/post-img-7.png" class="w-100" alt="image">
                            </div> --}}
                        </div>

                        <div class="total-react-share pb-4 d-center gap-2 flex-wrap justify-content-between">
                            <div class="friends-list d-flex gap-3 align-items-center text-center">
                                <ul class="d-flex align-items-center justify-content-center">
                                    <li><img src="/images/avatar-2.png" alt="image"></li>
                                    <li><img src="/images/avatar-3.png" alt="image"></li>
                                    <li><img src="/images/avatar-4.png" alt="image"></li>
                                    <li><span class="mdtxt d-center">8+</span></li>
                                </ul>
                            </div>
                            <div class="react-list d-flex flex-wrap gap-6 align-items-center text-center">
                                <button class="mdtxt">4 Comments</button>
                                <button class="mdtxt">1 Shares</button>
                            </div>
                        </div>
                        
                        <div class="like-comment-share py-5 d-center flex-wrap gap-3 gap-md-0 justify-content-between">
                            <button class="d-center gap-1 gap-sm-2 mdtxt">
                                <i class="material-symbols-outlined mat-icon"> favorite </i>
                                Like
                            </button>
                            <button class="d-center gap-1 gap-sm-2 mdtxt">
                                <i class="material-symbols-outlined mat-icon"> chat </i>
                                Comment
                            </button>
                            <button class="d-center gap-1 gap-sm-2 mdtxt">
                                <i class="material-symbols-outlined mat-icon"> share </i>
                                Share
                            </button>
                        </div>

                        <form action="#">
                            <div class="d-flex mt-5 gap-3">
                                <div class="profile-box d-none d-xxl-block">
                                    <a href="#"><img src="/images/add-post-avatar.png" class="max-un" alt="icon"></a>
                                </div>
                                <div class="form-content input-area py-1 d-flex gap-2 align-items-center w-100" id="write-comment">
                                    <input placeholder="Write a comment..">
                                    <div class="file-input d-flex gap-1 gap-md-2">
                                        <div class="file-upload">
                                            <label class="file">
                                                <input type="file">
                                                <span class="file-custom border-0 d-grid text-center">
                                                    <span class="material-symbols-outlined mat-icon m-0 xxltxt"> gif_box </span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="file-upload">
                                            <label class="file">
                                                <input type="file">
                                                <span class="file-custom border-0 d-grid text-center">
                                                    <span class="material-symbols-outlined mat-icon m-0 xxltxt"> perm_media </span>
                                                </span>
                                            </label>
                                        </div>
                                        <span class="mood-area">
                                            <span class="material-symbols-outlined mat-icon m-0 xxltxt"> mood </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="btn-area d-flex">
                                    <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                        <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                        <div class="comments-area mt-5">
                            <div class="single-comment-area ms-1 ms-xxl-15">
                                <div class="parent-comment d-flex gap-2 gap-sm-4">
                                    <div class="avatar-item d-center align-items-baseline">
                                        <img class="avatar-img max-un" src="/images/avatar-3.png" alt="avatar">
                                    </div>
                                    <div class="info-item active">
                                        <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                            <div class="title-area">
                                                <h6 class="m-0 mb-3"><a href="public-profile-post.html">Lori Cortez</a></h6>
                                                <p class="mdtxt">The only way to solve the problem is to code for the hardware directly</p>
                                            </div>
                                            <div class="btn-group dropend cus-dropdown">
                                                <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide Comments</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> flag </i>
                                                            <span>Report Comments</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="like-share d-flex gap-6 mt-2">
                                            <li class="d-center">
                                                <button class="mdtxt">Like</button>
                                            </li>
                                            <li class="d-center flex-column">
                                                <button class="mdtxt reply-btn">Reply</button>
                                            </li>
                                            <li class="d-center">
                                                <button class="mdtxt">Share</button>
                                            </li>
                                        </ul>
                                        <form action="#" class="comment-form">
                                            <div class="d-flex gap-3">
                                                <input placeholder="Write a comment.." class="py-3">
                                                <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                                    <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="sibling-comment comment-item-nested single-comment-area mt-7 ms-13 ms-sm-15">
                                    <div class="d-flex gap-2 gap-sm-4 align-items-baseline">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="/images/avatar-4.png" alt="avatar">
                                        </div>
                                        <div class="info-item">
                                            <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                                <div class="title-area">
                                                    <h6 class="m-0 mb-3"><a href="public-profile-post.html">Alexa</a></h6>
                                                    <p class="mdtxt">The only way to solve the</p>
                                                </div>
                                                <div class="btn-group dropend cus-dropdown">
                                                    <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                                <span>Hide Comments</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> flag </i>
                                                                <span>Report Comments</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="like-share d-flex gap-6 mt-2">
                                                <li class="d-center">
                                                    <button class="mdtxt">Like</button>
                                                </li>
                                                <li class="d-center flex-column">
                                                    <button class="mdtxt reply-btn">Reply</button>
                                                </li>
                                                <li class="d-center">
                                                    <button class="mdtxt">Share</button>
                                                </li>
                                            </ul>
                                            <form action="#" class="comment-form">
                                                <div class="d-flex gap-3">
                                                    <input placeholder="Write a comment.." class="py-3">
                                                    <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                                        <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-comment-area comment-item-nested mt-7 ms-13 ms-sm-15">
                                    <div class="d-flex gap-2 gap-sm-4 align-items-baseline">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="/images/avatar-7.png" alt="avatar">
                                        </div>
                                        <div class="info-item">
                                            <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                                <div class="title-area">
                                                    <h6 class="m-0 mb-3"><a href="public-profile-post.html">Haplika</a></h6>
                                                    <p class="mdtxt">The only way to solve the</p>
                                                </div>
                                                <div class="btn-group dropend cus-dropdown">
                                                    <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                                <span>Hide Comments</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                                <i class="material-symbols-outlined mat-icon"> flag </i>
                                                                <span>Report Comments</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="like-share d-flex gap-6 mt-2">
                                                <li class="d-center">
                                                    <button class="mdtxt">Like</button>
                                                </li>
                                                <li class="d-center flex-column">
                                                    <button class="mdtxt reply-btn">Reply</button>
                                                </li>
                                                <li class="d-center">
                                                    <button class="mdtxt">Share</button>
                                                </li>
                                            </ul>
                                            <form action="#" class="comment-form">
                                                <div class="d-flex gap-3">
                                                    <input placeholder="Write a comment.." class="py-3">
                                                    <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                                        <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comments-area mt-5">
                            <div class="single-comment-area ms-1 ms-xxl-15">
                                <div class="d-flex gap-4">
                                    <div class="avatar-item d-center align-items-baseline">
                                        <img class="avatar-img max-un" src="/images/avatar-3.png" alt="avatar">
                                    </div>
                                    <div class="info-item w-100">
                                        <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                            <div class="title-area">
                                                <h6 class="m-0 mb-3"><a href="public-profile-post.html">Marlio</a></h6>
                                                <div class="post-img">
                                                    <img src="/images/emoji-love-2.png" alt="icon">
                                                </div>
                                            </div>
                                            <div class="btn-group dropend cus-dropdown">
                                                <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide Comments</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> flag </i>
                                                            <span>Report Comments</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="like-share d-flex gap-6 mt-2">
                                            <li class="d-center">
                                                <button class="mdtxt">Like</button>
                                            </li>
                                            <li class="d-center flex-column">
                                                <button class="mdtxt reply-btn">Reply</button>
                                            </li>
                                            <li class="d-center">
                                                <button class="mdtxt">Share</button>
                                            </li>
                                        </ul>
                                        <form action="#" class="comment-form">
                                            <div class="d-flex gap-3">
                                                <input placeholder="Write a comment.." class="py-3">
                                                <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                                    <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
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
