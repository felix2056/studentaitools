<div class="sidebar-wrapper d-flex al-item justify-content-end justify-content-xl-center flex-column flex-md-row flex-xl-column flex gap-6">
    <div class="sidebar-area p-5">
        <div class="mb-4">
            <h6 class="d-inline-flex">
                Friends
                <span class="friends-count mdtxt abs-area d-center position-absolute">{{ $friends->count() }}</span>
            </h6>
        </div>

        @if ($friends->count() > 0)
        <div class="d-flex flex-column gap-6">
            @foreach ($friends as $friend)
            <div class="profile-area d-center justify-content-between">
                <div class="avatar-item d-flex gap-3 align-items-center">
                    <div class="avatar-item">
                        <img class="avatar-img max-un" src="{{ $friend->avatar }}" alt="avatar" width="48" height="48">
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
        @else
        <div class="d-center justify-content-center">
            <div class="d-center gap-2">
                <a href="{{ route('people.index') }}" class="cmn-btn d-center gap-1">
                    <i class="material-symbols-outlined mat-icon fs-2"> search </i>
                    Find Friends
                </a>
            </div>
        </div>
        @endif
    </div>
</div>