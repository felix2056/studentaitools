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

                <div class="share-post d-flex gap-3 gap-sm-5 p-3 p-sm-5">
                    <div class="profile-box">
                        @auth
                        <a href="#">
                            <img src="{{ Auth::user()->avatar }}" class="max-un" alt="icon">
                        </a>
                        @else
                        <a href="{{ route('auth.signin') }}">
                            <img src="/images/add-post-avatar.png" class="max-un" alt="icon">
                        </a>
                        @endauth
                    </div>

                    <form action="{{ route('newsfeed.create') }}" class="newsfeed-form w-100 position-relative" method="POST" enctype="multipart/form-data">
                        @csrf
                        <textarea name="content" cols="10" rows="2" placeholder="Write something on Student AI Tools. Hit ENTER to post.."></textarea>

                        <div class="newsfeed-link-preview file-upload mb-5 d-none">
                            <label class="file mt-1">
                                <span class="link-custom pt-8 pb-8 d-grid text-center">
                                    <a href="#" target="_blank" class="link-url row d-flex gap-3">
                                        <div class="col-12 post-img">
                                            <img src="https://via.placeholder.com/150" class="link-img max-un w-100" alt="image">
                                        </div>
                                        <div class="col-12 text-area">
                                            <h6 class="link-title m-0">Link Title</h6>
                                            <p class="link-desc mdtxt">Link Description</p>
                                        </div>
                                    </a>
                                </span>
                            </label>
                        </div>

                        <div class="newsfeed-youtube-preview file-upload mb-5 d-none">
                            <label class="file mt-1">
                                <div class="post-img video-item">
                                    <div class="plyr__video-embed player">
                                        <iframe src="#" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </label>
                        </div>
                        
                        <div class="abs-area position-absolute d-none d-sm-block">
                            <i class="material-symbols-outlined mat-icon xxltxt"> sentiment_satisfied </i>
                        </div>
                        
                        <ul class="d-flex justify-content-between flex-wrap mt-3 gap-3">
                            <li class="d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#linkMod">
                                <img src="/images/link.png" class="max-un" alt="icon">
                                <span>Link</span>

                                <input type="hidden" name="link">
                                <input type="hidden" name="link_title">
                                <input type="hidden" name="link_desc">
                                <input type="hidden" name="link_img">
                            </li>
                            <li class="d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#imageMod">
                                <img src="/images/vgallery.png" class="max-un" alt="icon">
                                <span>Image</span>

                                <input type="file" name="images[]" class="images d-none" multiple max="4" accept="image/*">
                            </li>
                            <li class="d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#youtubeMod">
                                <img src="/images/youtube.png" class="max-un" alt="icon">
                                <span>Video</span>

                                <input type="hidden" name="youtube">
                            </li>
                            {{-- <li class="d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#goLiveMod">
                                <img src="/images/live-video.png" class="max-un" alt="icon">
                                <span>Live</span>
                            </li> --}}
                            {{-- <li class="d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#photoVideoMod">
                                <img src="/images/vgallery.png" class="max-un" alt="icon">
                                <span>Photo/Video</span>
                            </li> --}}
                            {{-- <li class="d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#activityMod">
                                <img src="/images/emoji-laughing.png" class="max-un" alt="icon">
                                <span>Fallings/Activity</span>
                            </li> --}}
                        </ul>
                    </form>
                </div>

                <div class="post-item d-flex flex-column gap-5 gap-md-7" id="news-feed">
                    @foreach ($newsfeed as $post)
                    <div class="post-single-box p-3 p-sm-5">
                        <div class="top-area pb-5">
                            <div class="profile-area d-center justify-content-between">
                                <div class="avatar-item d-flex gap-3 align-items-center">
                                    <div class="avatar position-relative">
                                        <img class="avatar-img max-un" src="{{ $post->user->avatar }}" alt="avatar">
                                    </div>
                                    <div class="info-area">
                                        <h6 class="m-0">
                                            <a href="#">{{ $post->user->full_name }}</a>
                                        </h6>
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
                                <p class="description">{!! $post->content !!}</p>

                                {{-- @if ($post->tags->count() > 0)
                                <p class="hastag d-flex gap-2">
                                    <a href="#">#Viral</a>
                                    <a href="#">#travel</a>
                                </p>
                                @endif --}}
                            </div>
                            
                            @if (!empty($post->images))
                                @if (count($post->images) == 1)
                                <div class="post-img">
                                    <img src="{{ $post->images[0] }}" class="w-100" alt="image">
                                </div>

                                @elseif(count($post->images) == 2)
                                <div class="post-img  d-flex justify-content-between flex-wrap gap-2 gap-lg-3">
                                    <div class="single">
                                        <img src="{{ $post->images[0] }}" alt="image">
                                    </div>
                                    <div class="single">
                                        <img src="{{ $post->images[1] }}" alt="image">
                                    </div>
                                </div>

                                @elseif (count($post->images) == 3)
                                <div class="post-img  d-flex justify-content-between flex-wrap gap-2 gap-lg-3">
                                    <div class="single">
                                        <img src="{{ $post->images[0] }}" alt="image" style="height: 100%; width: 100%; object-fit: cover; object-position: center;"/>
                                    </div>
                                    <div class="single d-grid gap-3">
                                        <img src="{{ $post->images[1] }}" alt="image">
                                        <img src="{{ $post->images[2] }}" alt="image">
                                    </div>
                                </div>
                                
                                @elseif (count($post->images) > 3)
                                <div class="post-img  d-flex justify-content-between flex-wrap gap-2 gap-lg-3">
                                    @foreach ($post->images as $image)
                                        <div class="single">
                                            <img src="{{ $image }}" alt="image">
                                        </div>
                                    @endforeach
                                </div>
                                @endif
                            
                            @elseif ($post->video != null)
                            <div class="post-img video-item">
                                <div class="plyr__video-embed player">
                                    <iframe src="{{ $post->video_embed }}"></iframe>
                                </div>
                            </div>
                            @elseif ($post->link != null)
                            <div class="post-img">
                                <a href="{{ $post->link }}" class="w-100" target="_blank">
                                    <img src="{{ $post->link_img }}" class="w-100" alt="image">
                                </a>
                            </div>

                            <div class="link-area mt-2">
                                <a href="{{ $post->link }}" target="_blank">
                                    <h6 class="link-title m-0">{{ $post->link_title }}</h6>
                                    <p class="link-desc mdtxt">{{ $post->link_desc }}</p>
                                </a>
                            </div>
                            @endif
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
                    @endforeach

                    {{-- <div class="post-single-box p-3 p-sm-5">
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
                            <div class="post-img  d-flex justify-content-between flex-wrap gap-2 gap-lg-3">
                                <div class="single">
                                    <img src="/images/post-img-2.png" alt="image">
                                </div>
                                <div class="single d-grid gap-3">
                                    <img src="/images/post-img-3.png" alt="image">
                                    <img src="/images/post-img-4.png" alt="image">
                                </div>
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
                                    <div class="info-item">
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
                                <div class="single-comment-area comment-item-nested mt-4 mt-sm-7 ms-13 ms-sm-15">
                                    <div class="d-flex gap-2 gap-sm-4 align-items-baseline">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="/images/avatar-4.png" alt="avatar">
                                        </div>
                                        <div class="info-item">
                                            <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                                <div class="title-area">
                                                    <h6 class="m-0 mb-3"><a href="public-profile-post.html">Alex</a></h6>
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
                    </div>
                    <div class="post-single-box p-3 p-sm-5">
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
                    <div class="post-single-box p-3 p-sm-5">
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
                                <p class="description">My Travel Video</p>
                                <p class="hastag d-flex gap-2">
                                    <a href="#">#Viral</a>
                                    <a href="#">#travel</a>
                                </p>
                            </div>
                            <div class="post-img video-item">
                                <div class="plyr__video-embed player">
                                    <iframe src="https://www.youtube.com/embed/LXb3EKWsInQ"></iframe>
                                </div>
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
                    <div class="post-single-box p-3 p-sm-5">
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
                            <div class="post-img">
                                <img src="/images/post-img-1.png" class="w-100" alt="image">
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
                    </div> --}}
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

@section('scripts')
<script>
    $(document).ready(function() {
        let form = $('form.newsfeed-form');
        let content = form.find('textarea[name="content"]');
        
        // on enter press, submit form
        content.keypress(function(e) {
            if (e.which == 13) {
                e.preventDefault();

                if (content.val().trim() != '') {
                    form.submit();
                }
            }
        });

        // handle images drag and drop
        form.on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
            e.preventDefault();
            e.stopPropagation();
        })
    });
</script>
@endsection
