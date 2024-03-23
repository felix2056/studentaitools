@extends('layouts.app')

@section('title', $user->full_name . ' - Connections')

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
                    <ul class="nav flex-wrap gap-2 tab-area" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center active" id="followers-tab" data-bs-toggle="tab" data-bs-target="#followers-tab-pane" type="button" role="tab" aria-controls="followers-tab-pane" aria-selected="true">followers</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="followings-tab" data-bs-toggle="tab" data-bs-target="#followings-tab-pane" type="button" role="tab" aria-controls="followings-tab-pane" aria-selected="false" tabindex="-1">followings</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="friends-tab" data-bs-toggle="tab" data-bs-target="#friends-tab-pane" type="button" role="tab" aria-controls="friends-tab-pane" aria-selected="false" tabindex="-1">friends</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="followers-tab-pane" role="tabpanel" aria-labelledby="followers-tab" tabindex="0">
                        <div class="search-area d-center my-7 flex-wrap gap-2 justify-content-between">
                            <div class="total-followers">
                                <h6>{{ $user->followers_count }} {{ Str::plural('Follower', $user->followers_count) }}</h6>
                            </div>
                            <form action="#" class="d-flex align-items-stretch justify-content-between gap-4">
                                <div class="input-area py-2 w-100 gap-2 d-flex align-items-center">
                                    <i class="material-symbols-outlined mat-icon">search</i>
                                    <input type="text" placeholder="Search" autocomplete="off">
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            @foreach($user->followers as $follower)
                            <div class="col-md-6">
                                <div class="single-box member-single p-3">
                                    <div class="profile-area d-center justify-content-between">
                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="{{ $follower->avatar }}" alt="avatar" width="48" height="48">
                                            </div>
                                            <div class="info-area text-start">
                                                <h6 class="m-0">
                                                    <a href="{{ route('profile.show', $follower->username) }}">{{ $follower->full_name }}</a>
                                                </h6>
                                                <p class="mdtxt status">{{ $follower->mutual_followers_count }} Mutual Followers</p>
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
                                                        <span>Block</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="col-12 my-5 text-center">
                                <a class="cmn-btn alt third fw-600">Load More</a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="followings-tab-pane" role="tabpanel" aria-labelledby="followings-tab" tabindex="0">
                        <div class="search-area d-center my-7 flex-wrap gap-2 justify-content-between">
                            <div class="total-followers">
                                <h6>{{ $user->followings_count }} {{ Str::plural('Following', $user->followings_count) }}</h6>
                            </div>
                            <form action="#" class="d-flex align-items-stretch justify-content-between gap-4">
                                <div class="input-area py-2 w-100 gap-2 d-flex align-items-center">
                                    <i class="material-symbols-outlined mat-icon">search</i>
                                    <input type="text" placeholder="Search" autocomplete="off">
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            @foreach($user->followings as $following)
                            <div class="col-md-6">
                                <div class="single-box member-single p-3">
                                    <div class="profile-area d-center justify-content-between">
                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="{{ $following->avatar }}" alt="avatar" width="48" height="48">
                                            </div>
                                            <div class="info-area text-start">
                                                <h6 class="m-0">
                                                    <a href="{{ route('profile.show', $following->username) }}">{{ $following->full_name }}</a>
                                                </h6>
                                                <p class="mdtxt status">{{ $following->mutual_followings_count }} Mutual Followings</p>
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
                                                        <span>Block</span>
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

                    <div class="tab-pane fade" id="friends-tab-pane" role="tabpanel" aria-labelledby="friends-tab" tabindex="0">
                        <div class="search-area d-center my-7 flex-wrap gap-2 justify-content-between">
                            <div class="total-followers">
                                <h6>{{ $user->friends_count }} {{ Str::plural('Friend', $user->friends_count) }}</h6>
                            </div>
                            <form action="#" class="d-flex align-items-stretch justify-content-between gap-4">
                                <div class="input-area py-2 w-100 gap-2 d-flex align-items-center">
                                    <i class="material-symbols-outlined mat-icon">search</i>
                                    <input type="text" placeholder="Search" autocomplete="off">
                                </div>
                            </form>
                        </div>

                        <div class="row">
                            @foreach ($user->getFriends() as $friend)
                            <div class="col-md-6">
                                <div class="single-box member-single p-3">
                                    <div class="profile-area d-center justify-content-between">
                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="{{ $friend->avatar }}" alt="avatar" width="48" height="48">
                                            </div>
                                            <div class="info-area text-start">
                                                <h6 class="m-0">
                                                    <a href="{{ route('profile.show', $friend->username) }}">{{ $friend->full_name }}</a>
                                                </h6>
                                                @auth
                                                <p class="mdtxt status">{{ $friend->getMutualFriendsCount(Auth::user()) }} Mutual Friends</p>
                                                @endauth
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
                                                        <span>Block</span>
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
                </div>
            </div>

            <div class="col-xxl-3 col-xl-4 col-lg-10 mt-5 mt-xl-0">
                <div class="cus-scrollbar">
                    @include('includes.people.friends-sidebar', ['friends' => $user->getFriends()])
                </div>
            </div>
        </div>
    </div>
</main>
@endsection