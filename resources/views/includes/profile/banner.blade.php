<div class="banner-area pages-create mb-5">
    <div class="single-box p-5">
        <div class="avatar-area">
            <img class="preview-cover w-100" src="{{ $user->cover }}" alt="image">
        </div>
        
        <div class="top-area py-4 d-center flex-wrap gap-3 justify-content-between align-items-start">
            <div class="d-flex gap-3 align-items-center">
                <div class="avatar-item p">
                    <img class="avatar-img max-un" src="{{ $user->avatar }}" alt="avatar" width="120" height="120">
                </div>
                <div class="text-area text-start">
                    <h4 class="m-0 mb-2">{{ $user->full_name }}</h4>
                    <div class="friends-list d-flex flex-wrap gap-2 align-items-center text-center">
                        <ul class="d-flex align-items-center justify-content-center">
                            @foreach ($user->followers()->inRandomOrder()->take(3)->get() as $follower)
                            <li><img src="{{ $follower->avatar }}" alt="image"></li>
                            @endforeach
                        </ul>
                        <span class="mdtxt d-center">{{ $user->followers_count }} {{ Str::plural('Follower', $user->followers_count) }}</span>
                        <span class="mdtxt d-center following">{{ $user->followings_count }} {{ Str::plural('Following', $user->followings_count) }}</span>
                    </div>
                </div>
            </div>

            <div class="btn-item d-center gap-3">
                @auth
                @if (Auth::user()->id == $user->id)
                <a href="{{ route('auth.settings') }}" class="cmn-btn d-center gap-1">
                    <i class="material-symbols-outlined mat-icon fs-2"> edit_note </i>
                    Edit Profile
                </a>
                @else
                    @if (Auth::user()->isFollowing($user))
                    <a href="#" class="remove-follower-btn cmn-btn d-center gap-1" data-id="{{ $user->id }}">
                        <i class="material-symbols-outlined mat-icon fs-2"> person_remove </i>
                        Unfollow
                    </a>
                    @else
                    <a href="#" class="add-follower-btn cmn-btn d-center gap-1" data-id="{{ $user->id }}">
                        <i class="material-symbols-outlined mat-icon fs-2"> person_add </i>
                        Follow
                    </a>
                    @endif

                    @if (Auth::user()->isFriendWith($user))
                    <a href="#" class="chat-friend-btn cmn-btn d-center gap-1">
                        <i class="material-symbols-outlined mat-icon fs-2"> send </i>
                        Message
                    </a>
                    @else
                    <a href="#" class="add-friend-btn cmn-btn d-center gap-1">
                        <i class="material-symbols-outlined mat-icon fs-2"> person_add </i>
                        Add Friend
                    </a>
                    @endif

                    @if (Auth::user()->hasBlocked($user))
                    <a href="#" class="remove-block-btn cmn-btn d-center gap-1">
                        <i class="material-symbols-outlined mat-icon fs-2"> lock_open </i>
                        Unblock
                    </a>
                    @endif
                @endif

                @if (Auth::user()->id != $user->id)
                <div class="btn-group cus-dropdown dropend">
                    <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <span>Hide</span>
                            </a>
                        </li>
                    </ul>
                </div>
                @endif
                @endauth
            </div>
        </div>

        <div class="page-details">
            <ul class="nav mt-5 pt-4 flex-wrap gap-2 tab-area">
                <li class="nav-item" role="presentation">
                    <a href="{{ route('profile.show', $user->username) }}" class="nav-link d-center active">Posts</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('profile.about', $user->username) }}" class="nav-link d-center">About</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('profile.photos', $user->username) }}" class="nav-link d-center">Photos</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="profile-group.html" class="nav-link d-center">Groups</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="profile-connections.html" class="nav-link d-center">Connections</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="profile-events.html" class="nav-link d-center">Events</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@push('incscripts')
<script>
    $(document).ready(function() {
        $('.add-follower-btn').on('click', function() {
            var id = $(this).data('id');
            $.ajax({
                url: '{{ route('people.follow') }}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    user_id: id
                },
                success: function(response) {
                    if (response.status == 'success') {
                        $('.add-follower-btn').html('<i class="material-symbols-outlined mat-icon fs-2"> person_remove </i> Unfollow');
                        $('.add-follower-btn').removeClass('add-follower-btn').addClass('remove-follower-btn');
                    }
                }
            });
        });

        $('.remove-follower-btn').on('click', function() {
            var id = $(this).data('id');
            $.ajax({
                url: '{{ route('people.unfollow') }}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    user_id: id
                },
                success: function(response) {
                    if (response.status == 'success') {
                        $('.remove-follower-btn').html('<i class="material-symbols-outlined mat-icon fs-2"> person_add </i> Follow');
                        $('.remove-follower-btn').removeClass('remove-follower-btn').addClass('add-follower-btn');
                    }
                }
            });
        });
    });
</script>
@endpush