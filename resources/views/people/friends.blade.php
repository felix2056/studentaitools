@extends('layouts.app')

@section('title', 'All Friends')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                @include('includes.people.sidebar')
            </div>

            <div class="col-xl-9 col-lg-8">
                <div class="row cus-mar friend-request">
                    @foreach (Auth::user()->getFriends() as $friend)
                    <div class="col-xxl-3 col-md-5 col-sm-6 col-8">
                        <div class="single-box p-5">
                            <div class="avatar">
                                <img class="avatar-img w-100" src="{{ $friend->avatar }}" alt="avatar" />
                            </div>
                            <a href="{{ route('profile.show', $friend->username) }}">
                                <h6 class="m-0 mb-2 mt-3">{{ $friend->full_name }}</h6>
                            </a>
                            <div class="btn-area mt-3">
                                <button class="cmn-btn">
                                    <i class="material-symbols-outlined mat-icon"> chat </i> Chat
                                </button>
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