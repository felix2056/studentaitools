@extends('layouts.app')

@section('title', 'Suggestions')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                @include('includes.people.sidebar')
            </div>

            <div class="col-xl-9 col-lg-8">
                <div class="row cus-mar friend-request">
                    @foreach ($users as $user)
                    <div class="col-xl-4 col-sm-6 col-8">
                        <div class="single-box p-5">
                            <div class="avatar">
                                <img class="avatar-img w-100" src="{{ $user->avatar }}" alt="avatar" width="266" height="200" />
                            </div>
                            <a href="{{ route('profile.show', $user->username) }}">
                                <h6 class="m-0 my-2">{{ $user->full_name }}</h6>
                            </a>
                            <div class="friends-list d-center gap-1 text-center">
                                <ul class="d-center">
                                    @foreach ($user->getMutualFriends(Auth::user(), 3) as $friend)
                                        <li><img src="{{ $friend->avatar }}" alt="image"></li>
                                    @endforeach
                                </ul>
                                <span class="mdtxt d-center">{{ $user->getMutualFriendsCount(Auth::user()) }} mutual friends</span>
                            </div>

                            <div class="d-center gap-2 mt-4">
                                @if (Auth::user()->isFriendWith($user))
                                <button class="unfriend-btn cmn-btn" data-user-id="{{ $user->id }}">
                                    <i class="material-symbols-outlined mat-icon"> person_add_disabled </i> Unfriend
                                </button>
                                @elseif (Auth::user()->hasSentFriendRequestTo($user))
                                <button class="pending-friend-btn cmn-btn" disabled data-user-id="{{ $user->id }}">
                                    <i class="material-symbols-outlined mat-icon"> autorenew </i> Pending
                                </button>
                                @else
                                <button class="add-friend-btn cmn-btn" data-user-id="{{ $user->id }}">
                                    <i class="material-symbols-outlined mat-icon"> person_add </i> Add friend
                                </button>
                                @endif
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

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.add-friend-btn').on('click', function() {
                $(this).html('<i class="material-symbols-outlined mat-icon"> autorenew </i> Adding friend..');
                $(this).addClass('disabled');

                // send ajax request to add friend
                $this = $(this);
                $.ajax({
                    url: '{{ route('people.add-friend') }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        user_id: $(this).data('user-id')
                    },
                    success: function(response) {
                        if (response.success === true) {
                            $this.html('<i class="material-symbols-outlined mat-icon"> autorenew </i> Pending');
                            $this.removeClass('disabled');
                        }
                    }
                });
            });

            $('.unfriend-btn').on('click', function() {
                $(this).html('<i class="material-symbols-outlined mat-icon"> autorenew </i> Unfriending..');
                $(this).addClass('disabled');

                // send ajax request to unfriend
                $this = $(this);
                $.ajax({
                    url: '{{ route('people.unfriend') }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        user_id: $(this).data('user-id')
                    },
                    success: function(response) {
                        if (response.success === true) {
                            $this.html('<i class="material-symbols-outlined mat-icon"> person_add </i> Add friend');
                            $this.removeClass('disabled');
                        }
                    }
                });
            });
        });
    </script>
@endsection