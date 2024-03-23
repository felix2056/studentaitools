@foreach($tools as $tool)
<div class="col-xl-4 col-sm-6 col-8">
    <div class="single-box p-5">
        <div class="avatar-box position-relative">
            <img class="avatar-img w-100" src="{{ $tool->screenshot1 }}" alt="avatar" width="266" height="110">
            <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
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
            </div>
        </div>
        <div class="abs-avatar-item">
            <img class="avatar-img max-un" src="{{ $tool->favicon }}" alt="avatar" width="80" height="80">
        </div>
        <a href="{{ route('tools.show', $tool->slug) }}" target="_blank">
            <h6 class="m-0 mb-2 mt-3">{{ $tool->name }}</h6>
        </a>

        @if($tool->category)
        <p class="smtxt public-group">{{ $tool->category->name }}</p>
        @endif

        <div class="friends-list d-center mt-3 gap-1 text-center">
            <ul class="d-center">
                @foreach($tool->favoriters->take(3) as $favoriter)
                <li><img src="{{ $favoriter->avatar }}" alt="image" width="25" height="25"></li>
                @endforeach
            </ul>
            <span class="smtxt m-0">{{ $tool->favoriters_count }} {{ Str::plural('Student', $tool->favoriters_count) }} Saved</span>
        </div>

        <div class="d-center btn-border pt-5 gap-2 mt-4">
            <button class="cmn-btn save-favorite-btn fourth">
                <i class="material-symbols-outlined mat-icon"> bookmark_add </i>
                @if(Auth::check() && Auth::user()->hasFavorited($tool)) Saved
                @else Save
                @endif
            </button>
            <button class="cmn-btn alt third">
                <i class="material-symbols-outlined mat-icon"> share </i>
                Share
            </button>
        </div>
    </div>
</div>
@endforeach

@push('incscripts')
@auth
    <script>
        $(document).ready(function () {
            // save favorite tool
            $('.save-favorite-btn').click(function () {
                var tool_slug = $(this).prev().val();
                var button = $(this);
                $.ajax({
                    url: '/tools/' + tool_slug + '/favorite',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        if (response.status == 'favorited') {
                            // change 'Save' to 'Saved'
                            button.html('<i class="material-symbols-outlined mat-icon"> bookmark_added </i> Saved');
                        } else if (response.status == 'unfavorited') {
                            // change 'Saved' to 'Save'
                            button.html('<i class="material-symbols-outlined mat-icon"> bookmark_add </i> Save');
                        } else {
                            alert('An error occurred. Please try again.');
                        }
                    }
                });
            });
        });
    </script>
    @else
    <script>
        $(document).ready(function () {
            $('.save-favorite-btn').click(function () {
                window.location.href = '{{ route('auth.signin') }}';
            });
        });
    </script>
    @endauth
@endpush
