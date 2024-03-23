<div class="single-item d-none d-lg-block messages-area notification-area">
    <div class="notification-btn cmn-head position-relative">
        <div class="icon-area d-center position-relative">
            <i class="material-symbols-outlined mat-icon">notifications</i>
            <span class="abs-area position-absolute d-center mdtxt">{{ Auth::user()->unreadNotifications->count() }}</span>
        </div>
    </div>

    <div class="main-area p-5 notification-content">
        <h5 class="mb-8">Notification</h5>
        @if (Auth::user()->notifications->isEmpty())
        <div class="single-box p-0 mb-7">
            <div class="text-area">
                <p class="mdtxt">You have no notifications yet</p>
            </div>
        </div>
        @else
        @foreach (Auth::user()->notifications as $notification)
        <div class="single-box p-0 mb-7">
            <a href="{{ $notification->data['url'] }}" class="d-flex justify-content-between align-items-center">
                @if ($notification->unread()) 
                <span class="unread">New</span>
                @endif
                
                <div class="left-item position-relative d-inline-flex gap-3">
                    <div class="avatar position-relative d-inline-flex">
                        <img class="avatar-img max-un" src="{{ $notification->data['avatar'] }}" alt="avatar">
                        @if ($notification->type == 'App\Notifications\UserCommented')
                        <img class="abs-item position-absolute max-un" src="/images/speech-bubble.png" alt="icon">
                        @elseif ($notification->type == 'App\Notifications\UserLiked')
                        <img class="abs-item position-absolute max-un" src="/images/emoji-love.png" alt="icon">
                        @elseif ($notification->type == 'App\Notifications\UserRequested')
                        <img class="abs-item position-absolute max-un" src="/images/plus-icon.png" alt="icon">
                        @elseif ($notification->type == 'App\Notifications\UserFollowed')
                        <img class="abs-item position-absolute max-un" src="/images/plus-icon.png" alt="icon">
                        @endif
                    </div>
                    <div class="text-area">
                        <h6 class="m-0 mb-1">{{ $notification->data['name'] }}</h6>
                        <p class="mdtxt">{{ $notification->data['message'] }}</p>
                    </div>
                </div>
                <div class="time-remaining">
                    <p class="mdtxt">{{ $notification->created_at->diffForHumans() }}</p>
                </div>
            </a>
            @if ($notification->type == 'App\Notifications\UserRequested')
            <div class="d-flex gap-3 mt-4">
                <button class="accept-request-btn cmn-btn">Accept</button>
                <button class="deny-request-btn cmn-btn alt">Deny</button>
            </div>
            @endif
        </div>
        @endforeach
        <div class="btn-area">
            <a href="{{ route('auth.notifications') }}">See all notifications</a>
        </div>
        @endif
    </div>
</div>