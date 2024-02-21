@extends('layouts.app')

@section('title', $event->title)

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            @include('includes.sidebar', ['class' => 'col-xl-3 col-lg-4'])

            <div class="col-xl-9 col-lg-8">
                <div class="banner-area mb-5">
                    <div class="single-box">
                        <div class="avatar-box position-relative">
                            <img class="avatar-img w-100" src="{{ $event->image }}" alt="image">
                            <div class="abs-area position-absolute top-0 p-3 p-lg-5 p-xl-10">
                                <span class="date-area mdtxt">{{ date('d M, Y', strtotime($event->start_date)) }}</span>
                            </div>
                            <div class="abs-area position-absolute bottom-0 p-3 p-lg-5 p-xl-10 pb-3 pb-lg-5 pb-xl-8">
                                <h4>{{ $event->title }}</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="details-area p-5 mb-5">
                    <div class="top-area pb-6 mb-6 d-center flex-wrap gap-3 justify-content-between">
                        <ul class="nav flex-wrap gap-2 tab-area" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link d-center active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about-tab-pane" type="button" role="tab" aria-controls="about-tab-pane" aria-selected="true">about</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link d-center" id="discussion-tab" data-bs-toggle="tab" data-bs-target="#discussion-tab-pane" type="button" role="tab" aria-controls="discussion-tab-pane" aria-selected="false">discussion</button>
                            </li>
                        </ul>
                        <div class="btn-item d-center flex-wrap gap-3">
                            <a href="#" class="cmn-btn d-center third gap-1">
                                <i class="material-symbols-outlined mat-icon fs-xl"> grade </i>
                                Interested
                            </a>
                            <a href="#" class="cmn-btn d-center third gap-1">
                                <i class="material-symbols-outlined mat-icon fs-xl"> check </i>
                                going
                            </a>
                            <a href="#" class="cmn-btn third gap-1">
                                <i class="material-symbols-outlined mat-icon fs-xl"> add_box </i>
                                Invite
                            </a>
                            <a href="#" class="cmn-btn third gap-1">
                                <i class="material-symbols-outlined mat-icon fs-xl"> google_plus_reshare </i>
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
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
                            <div class="row gap-5 gap-xl-0">
                                <div class="col-xl-7">
                                    <div class="friends-list d-flex gap-3 align-items-center text-center">
                                        <ul class="d-flex align-items-center justify-content-center">
                                            <li><img src="/images/avatar-2.png" alt="image"></li>
                                            <li><img src="/images/avatar-3.png" alt="image"></li>
                                            <li><img src="/images/avatar-4.png" alt="image"></li>
                                        </ul>
                                        <span class="mdtxt d-center">476 People Going</span>
                                    </div>
                                    <ul class="d-grid gap-2 my-5">
                                        <li class="d-flex align-items-center gap-2">
                                            <i class="material-symbols-outlined mat-icon"> schedule </i>
                                            <span class="mdtxt">6 Day</span>
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <i class="material-symbols-outlined mat-icon"> flag </i>
                                            <span class="mdtxt">Event by PLM (People Love Music)</span>
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <i class="material-symbols-outlined mat-icon"> language </i>
                                            <span class="mdtxt">Public</span>
                                        </li>
                                    </ul>
                                    <h5 class="time-schedule">DEC 2, 2022 AT 10:30 - 7:30 PM</h5>
                                    <div class="description-box mt-4">
                                        <p class="mdtxt">Are you missing the festive vibe toward the end of the year? ITCRC is thrilled to announce that it has organized the year's largest online event, Kings Outfit Presents "TechnoGaze 1.0" powered by UVTR So sharpen your skills and prepare to be a part of this event while also enjoying the festive atmosphere.</p>
                                        <div class="segment-area mt-7">
                                            <p class="mdtxt">The event will have some amazing segments:</p>
                                            <ul class="mdtxt">
                                                <li>Programming contest</li>
                                                <li>Graphics Design</li>
                                                <li>Gaming (Brawlhalla)</li>
                                                <li>Tech Quiz & IT Olympiad</li>
                                                <li>PowerPoint Presentation.</li>
                                            </ul>
                                            <p class="mdtxt">Wants to energize the vibe?</p>
                                            <p class="mdtxt">Winners will be given certificate, crests & many more.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="find-tickets p-5">
                                        <h6 class="head-area">Tickets</h6>
                                        <a href="#" class="cmn-btn mt-5 mb-4 w-100 d-center gap-1">
                                            <i class="material-symbols-outlined mat-icon"> add </i>
                                            Find Tickets
                                        </a>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d142723.46117209745!2d-122.36259993497053!3d37.7719269407752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1677037248094!5m2!1sen!2sbd"></iframe>
                                        <p class="mdtxt">"International Convention City, (ICCB)"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="discussion-tab-pane" role="tabpanel" aria-labelledby="discussion-tab" tabindex="0">
                            <div class="post-item d-flex flex-column gap-5 gap-md-7" id="news-feed">
                                <div class="post-single-box">
                                    <div class="top-area pb-5">
                                        <div class="profile-area d-center justify-content-between">
                                            <div class="avatar-item d-flex gap-3 align-items-center">
                                                <div class="avatar position-relative">
                                                    <img class="avatar-img max-un" src="/images/avatar-1.png" alt="avatar">
                                                </div>
                                                <div class="info-area">
                                                    <h6 class="m-0"><a href="public-profile-post.html">Lori Cortez</a></h6>
                                                    <span class="mdtxt status">Active</span>
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
                                        <div class="py-4">
                                            <p class="description">I created Roughly plugin to sketch crafted hand-drawn elements which can be used to any usage (diagrams/flows/decoration/etc)</p>
                                        </div>
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
                                            <div class="form-content input-area py-1 d-flex gap-2 align-items-center w-100">
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
                                </div>
                                <div class="post-single-box">
                                    <div class="top-area pb-5">
                                        <div class="profile-area d-center justify-content-between">
                                            <div class="avatar-item d-flex gap-3 align-items-center">
                                                <div class="avatar-item">
                                                    <img class="avatar-img max-un" src="/images/avatar-5.png" alt="avatar">
                                                </div>
                                                <div class="info-area">
                                                    <h6 class="m-0"><a href="public-profile-post.html">Loprayos</a></h6>
                                                    <span class="mdtxt status">20m Ago</span>
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
                                        <div class="py-4">
                                            <p class="description">Nam ornare a nibh id sagittis. Vestibulum nec molestie urna, eget convallis mi. Vestibulum rhoncus ligula eget sem sollicitudin interdum. Aliquam massa lectus, fringilla non diam ut, laoreet convallis risus. Curabitur at metus imperdiet, pellentesque ligula vel,</p>
                                        </div>
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
                                            <div class="form-content input-area py-1 d-flex gap-2 align-items-center w-100">
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
                                <div class="post-single-box">
                                    <div class="top-area pb-5">
                                        <div class="profile-area d-center justify-content-between">
                                            <div class="avatar-item d-flex gap-3 align-items-center">
                                                <div class="avatar position-relative">
                                                    <img class="avatar-img max-un" src="/images/avatar-1.png" alt="avatar">
                                                </div>
                                                <div class="info-area">
                                                    <h6 class="m-0"><a href="public-profile-post.html">Lori Cortez</a></h6>
                                                    <span class="mdtxt status">Active</span>
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
                                        <div class="py-4">
                                            <p class="description">I created Roughly plugin to sketch crafted hand-drawn elements which can be used to any usage (diagrams/flows/decoration/etc)</p>
                                        </div>
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
                                            <div class="form-content input-area py-1 d-flex gap-2 align-items-center w-100">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row cus-mar friend-request">
                    <div class="col-xl-4 col-sm-6 col-8">
                        <div class="single-box p-5">
                            <div class="avatar-box position-relative">
                                <img class="avatar-img w-100" src="/images/event-img-5.png" alt="avatar">
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
                                <img class="avatar-img w-100" src="/images/event-img-6.png" alt="avatar">
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
                                <img class="avatar-img w-100" src="/images/event-img-7.png" alt="avatar">
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
</main>
@endsection
