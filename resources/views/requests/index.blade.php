@extends('layouts.app')

@section('title', 'Requests')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            @include('includes.sidebar', ['class' => 'col-xl-3 col-lg-4'])
            
            <div class="col-xl-9 col-lg-8 cus-mar">
                <div class="filter-head mb-6 d-center justify-content-between">
                    <h5>Requests</h5>
                    <button class="d-center">
                        <i class="material-symbols-outlined mat-icon"> tune </i>
                    </button>
                </div>

                @foreach (\App\Models\Request::orderBy('created_at', 'desc')->get() as $request)
                <div class="single-box filter-single-box text-start p-5 p-md-3 d-grid d-xl-flex align-items-center gap-4">
                    <!-- upvote -->
                    <div class="upvote-area d-flex flex-column align-items-center">
                        <button class="upvote-btn btn d-center">
                            <i class="material-symbols-outlined mat-icon"> arrow_upward </i>
                        </button>
                        <span class="upvote-count">0</span>
                    </div>
                    {{-- <div class="avatar-area">
                        <a href="#">
                            <img src="" class="max-un" alt="icon">
                        </a>
                    </div> --}}
                    <div class="title-area">
                        <h5>
                            <a href="{{ route('requests.show', $request->slug) }}">
                                {{ $request->title }}
                            </a>
                        </h5>

                        <div class="inside-profile pt-3 pb-4">
                            <div class="avatar-area d-flex align-items-center gap-3">
                                <a href="{{ route('requests.show', $request->slug) }}">
                                    <img src="{{ $request->user->avatar }}" class="max-un" alt="icon">
                                </a>
                                <p class="mdtxt">{{ '@' . $request->user->username }} - Requested on: {{ $request->created_at->format('d M Y') }}</p>
                            </div>
                        </div>

                        <div class="btn-item d-flex gap-3">
                            <a href="{{ route('requests.show', $request->slug) }}/#write-comment" class="cmn-btn">
                                Comment
                            </a>
                            <a href="#" class="cmn-btn third gap-1">
                                <i class="material-symbols-outlined mat-icon fs-xl"> google_plus_reshare </i>
                                Share
                            </a>
                            <div class="group-btn cus-dropdown d-flex dropend">
                                <button type="button" class="dropdown-btn d-center px-2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                </button>
                                <ul class="dropdown-menu p-4 pt-2">
                                    <li>
                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                            <i class="material-symbols-outlined mat-icon"> visibility </i>
                                            <span>Watch</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                            <span>Hide</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                            <i class="material-symbols-outlined mat-icon"> flag </i>
                                            <span>Report</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
