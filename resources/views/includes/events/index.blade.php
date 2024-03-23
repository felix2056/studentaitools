@foreach ($events as $event)
<div class="col-xl-4 col-sm-6 col-8">
    <div class="single-box p-5">
        <div class="avatar-box position-relative">
            <img class="avatar-img w-100" src="{{ $event->image }}" width="266" height="200" alt="avatar">
            <div class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-between">
                <span class="date-area mdtxt">{{ date('d M Y', strtotime($event->start_date)) }}</span>
                <div class="btn-group cus-dropdown dropend">
                    <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                    </button>

                    <ul class="dropdown-menu p-4 pt-2">
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> person_add </i>
                                <span>Follow</span>
                            </a>
                        </li>
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

        <a href="{{ route('events.show', $event->slug) }}">
            <h6 class="m-0 mt-4">{{ $event->title }}</h6>
        </a>

        <span class="smtxt city-area">
            @if ($event->type == 'local' && $event->location)
            {{ $event->location }}
            @else
            Online
            @endif
        </span>

        <div class="d-center gap-2 mt-4">
            @auth
            <a class="cmn-btn" href="{{ route('events.interested', $event->id) }}">
                <i class="material-symbols-outlined mat-icon"> grade </i>
                @if (Auth::user()->events->contains($event->id))
                not interested
                @else
                interested
                @endif
            </a>
            @else
            <a class="cmn-btn" href="{{ route('auth.signin') }}">
                <i class="material-symbols-outlined mat-icon"> grade </i>
                interested
            </a>
            @endauth
            <button class="cmn-btn alt third">Share</button>
        </div>
    </div>
</div>
@endforeach
