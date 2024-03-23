<div class="sidebar-wrapper d-flex al-item justify-content-end justify-content-xl-center flex-column flex-md-row flex-xl-column flex gap-6">
    <div class="sidebar-area p-5">
        <div class="mb-4">
            <h6 class="d-inline-flex position-relative">
                Requests
                <span class="friend-requests-count mdtxt abs-area d-center position-absolute">{{ Auth::user()->getPendingFriendsCount() }}</span>
            </h6>
        </div>

        <div class="d-grid gap-6">
            @foreach ($requests as $member)
            <div class="friend-requests-wrapper-{{ $member->sender->id }}">
                <div class="single-single">
                    <div class="profile-pic d-flex gap-3 align-items-center">
                        <div class="avatar">
                            <img class="avatar-img max-un" src="{{ $member->sender->avatar }}" alt="avatar" width="48" height="48">
                        </div>
                        
                        <div class="text-area">
                            <a href="{{ route('profile.show', $member->sender->username) }}">
                                <h6 class="m-0">{{ $member->sender->first_name }}</h6>
                            </a>
                        
                            <div class="friends-list d-flex gap-3 align-items-center text-center">
                                <ul class="d-flex align-items-center justify-content-center">
                                    @foreach ($member->sender->getMutualFriends(Auth::user(), 4) as $friend)
                                    <li><img src="{{ $friend->avatar }}" alt="image" width="23" height="23"></li>
                                    @endforeach
                                </ul>
                                <span class="mdtxt d-center">{{ $member->sender->getMutualFriendsCount(Auth::user()) }} mutual friends</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-3 mt-4">
                    <button class="accept-friend-request-btn cmn-btn" data-id="{{ $member->sender->id }}">Accept</button>
                    <button class="deny-friend-request-btn cmn-btn alt" data-id="{{ $member->sender->id }}">Deny</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@push('incscripts')
<script>
    $(document).ready(function() {
        $('.accept-friend-request-btn').on('click', function() {
            var $this = $(this);
            var $id = $this.data('id');
            var $url = '{{ route('people.accept-friend') }}';

            $.ajax({
                url: $url,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    user_id: $id
                },
                success: function(response) {
                    if (response.status == 'success') {
                        $('.friend-requests-wrapper-' + $id).remove();
                        $('.friend-requests-count').text(parseInt($('.friend-requests-count').text()) - 1);
                        toastr.success(response.message);
                    } else {
                        toastr.error(response.message);
                    }
                }
            });
        });
    });
</script>
@endpush
