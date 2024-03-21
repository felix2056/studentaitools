@extends('layouts.app')

@section('title', 'Friend Requests')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                @include('includes.people.sidebar')
            </div>

            <div class="col-xl-9 col-lg-8">
                <div class="row cus-mar friend-request">
                    @foreach (Auth::user()->getFriendRequests() as $friendRequest)
                    <div class="col-xl-4 col-sm-6 col-8">
                        <div class="single-box p-5">
                            <div class="avatar">
                                <img class="avatar-img w-100" src="{{ $friendRequest->user->avatar }}" alt="avatar">
                            </div>
                            <a href="public-profile-post.html">
                                <h6 class="m-0 mb-2 mt-3">{{ $friendRequest->user->full_name }}</h6>
                            </a>
                            <div class="friends-list d-center gap-1 text-center">
                                <ul class="d-center">
                                    <li><img src="images/avatar-2.png" alt="image"></li>
                                    <li><img src="images/avatar-3.png" alt="image"></li>
                                    <li><img src="images/avatar-4.png" alt="image"></li>
                                </ul>
                                <span class="smtxt m-0">10 mutual friends</span>
                            </div>
                            <div class="d-center gap-2 mt-4">
                                <button class="cmn-btn">Confirm</button>
                                <button class="cmn-btn alt">Delete</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
@endsection