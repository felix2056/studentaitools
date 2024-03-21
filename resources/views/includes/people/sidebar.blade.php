<div class="d-block d-lg-none">
    <button class="button profile-active mb-4 mb-lg-0 d-flex align-items-center gap-2">
        <i class="material-symbols-outlined mat-icon"> tune </i>
        <span>My profile</span>
    </button>
</div>

<div class="profile-sidebar cus-scrollbar p-5">
    <div class="d-block d-lg-none position-absolute end-0 top-0">
        <button class="button profile-close">
            <i class="material-symbols-outlined mat-icon fs-xl"> close </i>
        </button>
    </div>
    <div class="profile-pic d-flex gap-2 align-items-center">
        <div class="avatar position-relative">
            <img class="avatar-img max-un" src="{{ Auth::user()->avatar }}" width="48" height="48" alt="avatar">
        </div>
        <div class="text-area">
            <h6 class="m-0 mb-1">
                <a href="{{ route('profile.show', Auth::user()->username) }}">
                    {{ Auth::user()->full_name }}
                </a>
            </h6>
            <p class="mdtxt">{{ '@' . Auth::user()->username }}</p>
        </div>
    </div>

    <ul class="profile-link mt-7 mb-7 pb-7">
        <li>
            <a href="{{ route('people.index') }}" class="d-flex gap-4 @if(request()->is('people')) active @endif">
                <i class="material-symbols-outlined mat-icon"> person_add </i>
                <span>Suggestions</span>
            </a>
        </li>
        <li>
            <a href="{{ route('people.requests') }}" class="d-flex gap-4 @if(request()->is('people/requests*')) active @endif">
                <i class="material-symbols-outlined mat-icon"> person </i>
                <span>Requests</span>
            </a>
        </li>
        <li>
            <a href="{{ route('people.friends') }}" class="d-flex gap-4 @if(request()->is('people/friends*')) active @endif">
                <i class="material-symbols-outlined mat-icon"> person </i>
                <span>Friends</span>
            </a>
        </li>
        <li>
            <a href="{{ route('people.blocked') }}" class="d-flex gap-4 @if(request()->is('people/blocked*')) active @endif">
                <i class="material-symbols-outlined mat-icon"> lock </i>
                <span>Blocked</span>
            </a>
        </li>
    </ul>

    <div class="mb-4">
        <h6 class="d-inline-flex">
            Friends
        </h6>
    </div>

    <div class="d-flex flex-column gap-6">
        @foreach (Auth::user()->getFriends() as $friend)
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