@extends('layouts.app')

@section('title', 'Search Results For ' . $query)

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            @include('includes.sidebar', ['class' => 'col-xl-3 col-lg-4'])

            <div class="col-xl-9 col-lg-8">
                <div class="head-area mb-5">
                    <h6>Search results for "{{ $query }}"</h6>
                </div>
                <div class="popular-area mb-5 d-center flex-wrap gap-3 justify-content-between">
                    <div class="btn-item">
                        <a href="#" class="cmn-btn gap-1">
                            <i class="material-symbols-outlined mat-icon"> add </i>
                            Submit Your AI Tool
                        </a>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="popular-tab-pane" role="tabpanel" aria-labelledby="popular-tab" tabindex="0">
                        <div class="row cus-mar friend-request">
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
                                            <li><img src="/images/avatar-2.png" alt="image"></li>
                                            <li><img src="/images/avatar-3.png" alt="image"></li>
                                            <li><img src="/images/avatar-4.png" alt="image"></li>
                                        </ul>
                                        <span class="smtxt m-0">30k Students Saved</span>
                                    </div>

                                    <div class="d-center btn-border pt-5 gap-2 mt-4">
                                        <input type="hidden" name="tool_slug" value="{{ $tool->slug }}">
                                        <button class="cmn-btn save-favorite-btn fourth">
                                            <i class="material-symbols-outlined mat-icon"> bookmark_add </i>
                                            @if(auth()->user() && auth()->user()->favorites->contains($tool->id))
                                                Saved
                                            @else
                                                Save
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
