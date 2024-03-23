@extends('layouts.app')

@section('title', 'Events')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            @include('includes.sidebar', ['class' => 'col-xl-3 col-lg-4'])

            <div class="col-xl-9 col-lg-8">
                <div class="head-area mb-4 mb-lg-5 mt-5 mt-lg-0">
                    <h6>Discover Events</h6>
                </div>
                <div class="top-area mb-5 d-center flex-wrap gap-3 justify-content-between">
                    <ul class="nav flex-wrap gap-2 tab-area" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center active" id="top-tab" data-bs-toggle="tab" data-bs-target="#top-tab-pane" type="button" role="tab" aria-controls="top-tab-pane" aria-selected="true">top</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center" id="latest-tab" data-bs-toggle="tab" data-bs-target="#latest-tab-pane" type="button" role="tab" aria-controls="latest-tab-pane" aria-selected="false">latest</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center" id="local-tab" data-bs-toggle="tab" data-bs-target="#local-tab-pane" type="button" role="tab" aria-controls="local-tab-pane" aria-selected="false">local</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center" id="online-tab" data-bs-toggle="tab" data-bs-target="#online-tab-pane" type="button" role="tab" aria-controls="online-tab-pane" aria-selected="false">online</button>
                        </li>
                    </ul>

                    <div class="btn-item">
                        <a href="event.html" class="cmn-btn gap-1">
                            <i class="material-symbols-outlined mat-icon"> add </i>
                            Create Event
                        </a>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="top-tab-pane" role="tabpanel" aria-labelledby="top-tab" tabindex="0">
                        <div class="row cus-mar friend-request">
                            @include('includes.events.index', ['events' => $topEvents])
                        </div>
                    </div>

                    <div class="tab-pane fade" id="latest-tab-pane" role="tabpanel" aria-labelledby="latest-tab" tabindex="0">
                        <div class="row cus-mar friend-request">
                            @include('includes.events.index', ['events' => $latestEvents])
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="local-tab-pane" role="tabpanel" aria-labelledby="local-tab" tabindex="0">
                        <div class="row cus-mar friend-request">
                            @include('includes.events.index', ['events' => $localEvents])
                        </div>
                    </div>

                    <div class="tab-pane fade" id="online-tab-pane" role="tabpanel" aria-labelledby="online-tab" tabindex="0">
                        <div class="row cus-mar friend-request">
                            @include('includes.events.index', ['events' => $onlineEvents])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
