@extends('layouts.app')

@section('title', 'Notifications')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            @if (Auth::user()->unreadNotifications->count() > 0)
            <div class="col-xxl-12">
                <div class="head-area pb-6">
                    <h5>Unread Notifications</h5>
                </div>
                <div class="d-grid gap-5">
                    <div class="single-box">
                        @foreach (Auth::user()->unreadNotifications as $notification)
                        <div class="notification-single d-center p-5 gap-5 justify-content-between">
                            <div class="d-flex top-review-wrapper gap-3 align-items-center">
                                <div class="avatar-item">
                                    <img class="avatar-img max-un" src="{{ $notification->data['avatar'] }}" alt="avatar">
                                </div>
                                <div class="text-area text-start">
                                    <h6 class="m-0 mb-1">
                                        <a href="{{ $notification->data['url'] }}">{{ $notification->data['name'] }}</a>
                                        <span>{{ $notification->data['message'] }}</span>
                                    </h6>
                                    <span class="mdtxt time-schedule">{{ $notification->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            <div class="btn-area d-flex gap-3">
                                <button class="cmn-btn alt p-2 p-sm-3">
                                    <i class="material-symbols-outlined mat-icon"> delete </i>
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            <div class="col-xxl-12">
                <div class="head-area pb-6">
                    <h5>All Notifications</h5>
                </div>
                <div class="d-grid gap-5">
                    <div class="single-box">
                        @foreach (Auth::user()->notifications as $notification)
                        <div class="notification-single d-center p-5 gap-5 justify-content-between">
                            <div class="d-flex top-review-wrapper gap-3 align-items-center">
                                <div class="avatar-item">
                                    <img class="avatar-img max-un" src="{{ $notification->data['avatar'] }}" alt="avatar">

                                    @if ($notification->type == 'App\Notifications\UserCommented')
                                    <img class="abs-item position-absolute max-un" src="/images/speech-bubble.png" alt="icon">
                                    @elseif ($notification->type == 'App\Notifications\UserLiked')
                                    <img class="abs-item position-absolute max-un" src="/images/emoji-love.png" alt="icon">
                                    @elseif ($notification->type == 'App\Notifications\UserRequested')
                                    <img class="abs-item position-absolute max-un" src="/images/plus-icon.png" alt="icon">
                                    @endif
                                </div>
                                <div class="text-area text-start">
                                    <h6 class="m-0 mb-1">
                                        <a href="{{ $notification->data['url'] }}">{{ $notification->data['name'] }}</a>
                                        <span>{{ $notification->data['message'] }}</span>
                                    </h6>
                                    <span class="mdtxt time-schedule">{{ $notification->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                            <div class="btn-area d-flex gap-3">
                                @if ($notification->type == 'App\Notifications\UserRequested')
                                <button class="accept-request-btn cmn-btn">Accept</button>
                                <button class="deny-request-btn cmn-btn alt">Deny</button>
                                @endif
                                
                                <button class="cmn-btn alt p-2 p-sm-3">
                                    <i class="material-symbols-outlined mat-icon"> delete </i>
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection