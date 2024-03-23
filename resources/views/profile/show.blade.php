@extends('layouts.app')

@section('title', $user->username . ' Profile')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @include('includes.profile.banner', ['user' => $user])
            </div>
        </div>

        <div class="row sidebar-toggler">
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-6 cus-z2">
                <div class="d-inline-block d-lg-none">
                    <button class="button profile-active mb-4 mb-lg-0 d-flex align-items-center gap-2">
                        <i class="material-symbols-outlined mat-icon"> tune </i>
                        <span>My profile</span>
                    </button>
                </div>
                <div class="profile-sidebar cus-scrollbar max-width p-5">
                    <div class="d-block d-lg-none position-absolute end-0 top-0">
                        <button class="button profile-close">
                            <i class="material-symbols-outlined mat-icon fs-xl"> close </i>
                        </button>
                    </div>

                    <div class="sidebar-area">
                        <div class="mb-3">
                            <h6 class="d-inline-flex">
                                About
                            </h6>
                        </div>
                        <p class="mdtxt descript">{{ $user->bio }}</p>
                        @if (Auth::check() && Auth::user()->id == $user->id)
                            <a href="{{ route('auth.settings') }}" class="cmn-btn w-100 mt-5 alt third d-center gap-1">
                                <i class="material-symbols-outlined mat-icon fs-2"> edit_note </i>
                                Edit Bio
                            </a>
                        @endif
                    </div>

                    <div class="sidebar-area mt-5">
                        <div class="mb-2">
                            <h6 class="d-inline-flex">
                                Info
                            </h6>
                        </div>
                        <ul class="d-grid gap-2 mt-4">
                            @if ($user->gender)
                            <li class="d-flex align-items-center gap-2">
                                <i class="fa fa-user"></i>
                                <span class="mdtxt text-capitalize">{{ $user->gender }}</span>
                            </li>
                            @endif

                            @if ($user->preferred_pronouns && $user->show_pronouns)
                            <li class="d-flex align-items-center gap-2">
                                <i class="fa fa-user"></i>
                                <span class="mdtxt text-capitalize">{{ $user->preferred_pronouns }}</span>
                            </li>
                            @endif

                            @if ($user->date_of_birth && $user->show_birthday)
                            <li class="d-flex align-items-center gap-2">
                                <i class="fa fa-birthday-cake"></i>
                                <span class="mdtxt">{{ $user->birthday }}</span>
                            </li>
                            @endif

                            @if ($user->education)
                            <li class="d-flex align-items-center gap-2">
                                <i class="fa fa-graduation-cap"></i>
                                <span class="mdtxt">{{ $user->education }}</span>
                            </li>
                            @endif

                            @if ($user->awards)
                            <li class="d-flex align-items-center gap-2">
                                <i class="fa fa-trophy"></i>
                                <span class="mdtxt link">{{ $user->awards }}</span>
                            </li>
                            @endif

                            @if ($user->skills)
                            <li class="d-flex align-items-center gap-2">
                                <i class="fa fa-cogs"></i>
                                <span class="mdtxt">{{ $user->skills }}</span>
                            </li>
                            @endif

                            @if ($user->hobbies)
                            <li class="d-flex align-items-center gap-2">
                                <i class="fa fa-heart"></i>
                                <span class="mdtxt">{{ $user->hobbies }}</span>
                            </li>
                            @endif

                            @if ($user->languages)
                            <li class="d-flex align-items-center gap-2">
                                <i class="fa fa-language"></i>
                                <span class="mdtxt">{{ $user->languages_commas }}</span>
                            </li>
                            @endif

                            @if ($user->facebook)
                            <li class="d-flex align-items-center gap-2">
                                <i class="fa fa-facebook"></i>
                                <a href="{{ $user->facebook }}" target="_blank" class="mdtxt link">Facebook</a>
                            </li>
                            @endif

                            @if ($user->twitter)
                            <li class="d-flex align-items-center gap-2">
                                <i class="fa fa-twitter"></i>
                                <a href="{{ $user->twitter }}" target="_blank" class="mdtxt link">Twitter</a>
                            </li>
                            @endif

                            @if ($user->instagram)
                            <li class="d-flex align-items-center gap-2">
                                <i class="fa fa-instagram"></i>
                                <a href="{{ $user->instagram }}" target="_blank" class="mdtxt link">Instagram</a>
                            </li>
                            @endif

                            @if ($user->linkedin)
                            <li class="d-flex align-items-center gap-2">
                                <i class="fa fa-linkedin"></i>
                                <a href="{{ $user->linkedin }}" target="_blank" class="mdtxt link">Linkedin</a>
                            </li>
                            @endif

                            @if ($user->website)
                            <li class="d-flex align-items-center gap-2">
                                <i class="fa fa-globe"></i>
                                <a href="{{ $user->website }}" target="_blank" class="mdtxt link">{{ $user->website }}</a>
                            </li>
                            @endif

                            <li class="d-flex align-items-center gap-2">
                                <i class="fa fa-map-marker"></i>
                                <span class="mdtxt text-capitalize">{{ $user->country }}</span>
                            </li>

                            
                            {{-- <li class="d-flex align-items-center gap-2">
                                <i class="material-symbols-outlined mat-icon"> call </i>
                                <span class="mdtxt">(316) 555-0116</span>
                            </li> --}}

                            {{-- <li class="d-flex align-items-center gap-2">
                                <i class="material-symbols-outlined mat-icon"> house </i>
                                <span class="mdtxt">775 Rolling Green Rd.</span>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xxl-6 col-xl-5 col-lg-8 mt-0 mt-lg-10 mt-xl-0 d-flex flex-column gap-7 cus-z">
                @include('includes.newsfeed.create')

                <div class="post-item d-flex flex-column gap-5 gap-md-7" id="news-feed">
                    @include('includes.newsfeed.posts', ['posts' => $user->posts()->orderBy('created_at', 'desc')->get()])
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
                        <div class="sidebar-wrapper d-flex flex-column gap-6 max-width">
                            <div class="sidebar-area post-item p-5">
                                <div class="mb-3">
                                    <h6 class="d-inline-flex">
                                        Photos
                                    </h6>
                                </div>
                                <div class="post-single-box">
                                    <div class="post-img d-flex justify-content-between flex-wrap gap-2 gap-lg-3">
                                        @foreach ($user->posts->pluck('images')->toArray() as $images)
                                            @foreach ($images as $image)
                                            <div class="single d-grid gap-3">
                                                <img src="{{ $image }}" alt="image" width="128" height="130">
                                            </div>
                                            @endforeach
                                        @endforeach
                                        {{-- <div class="single d-grid gap-3">
                                            <img src="images/post-img-6.png" alt="image">
                                            <img src="images/post-img-14.png" alt="image">
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sidebar-area p-5">
                                <div class="mb-4">
                                    <h6 class="d-inline-flex">
                                        Friends
                                    </h6>
                                </div>
                                <div class="d-flex flex-column gap-6">
                                    @foreach ($user->getFriends() as $friend)
                                    <div class="profile-area d-center justify-content-between">
                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="{{ $friend->avatar }}" alt="avatar">
                                            </div>

                                            <div class="info-area">
                                                <h6 class="m-0">
                                                    <a href="{{ route('profile.show', $friend->username) }}">{{ $friend->first_name }}</a>
                                                </h6>
                                            </div>
                                        </div>

                                        <div class="btn-group cus-dropdown dropend">
                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                            </button>

                                            <ul class="dropdown-menu p-4 pt-2">
                                                <li>
                                                    <a class="unfollow-friend-btn droplist d-flex align-items-center gap-2" href="#">
                                                        <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                        <span>Unfollow</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="block-friend-btn droplist d-flex align-items-center gap-2" href="#">
                                                        <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                        <span>Block</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
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