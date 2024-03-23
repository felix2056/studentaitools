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
                        @auth
                            @include('includes.people.requests-sidebar', ['requests' => Auth::user()->getFriendRequests()])
                            @include('includes.people.friends-sidebar', ['friends' => Auth::user()->getFriends()])
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
