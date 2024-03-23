@extends('layouts.app')

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            @include('includes.sidebar', ['class' => 'col-xl-3 col-lg-4'])
            
            <div class="col-xl-9 col-lg-8">
                <section class="banner-section" id="top">
                    <div class="container">
                        <div class="section-header-3">
                            <span class="cate">Student AI Tools</span>
                            <h2 class="title mb-0">
                                <span class="d-block">Everything You Need For School In ONE PLACE</span>
                            </h2>
                        </div>
                        <div class="counter-area">
                            <div class="counter-item">
                                <div class="counters">
                                    <h2 class="title odometer odometer-auto-theme" data-odometer-final="{{ \App\Models\Tool::count() }}">
                                        <div class="odometer-inside">
                                            <span class="odometer-digit">
                                                <span class="odometer-digit-spacer">{{ \App\Models\Tool::count() + 300 }}</span>
                                            </span>
                                        </div>
                                    </h2>
                                    
                                    <h2 class="title">+</h2>
                                </div>
                                <span class="name">
                                    AI Tools
                                </span>
                            </div>

                            <div class="counter-item">
                                <div class="counters">
                                    <h2 class="title odometer odometer-auto-theme" data-odometer-final="{{ \App\Models\Category::count() }}">
                                        <div class="odometer-inside">
                                            <span class="odometer-digit">
                                                <span class="odometer-digit-spacer">{{ \App\Models\Category::count() + 20 }}</span>
                                            </span>
                                        </div>
                                    </h2>
                                    
                                    <h2 class="title">+</h2>
                                </div>
                                <span class="name">
                                    Categories
                                </span>
                            </div>

                            <div class="counter-item">
                                <div class="counters">
                                    <h2 class="title odometer odometer-auto-theme" data-odometer-final="{{ \App\Models\User::count() }}">
                                        <div class="odometer-inside">
                                            <span class="odometer-digit">
                                                <span class="odometer-digit-spacer">{{ \App\Models\User::count() + 1000 }}</span>
                                            </span>
                                        </div>
                                    </h2>

                                    <h2 class="title">+</h2>
                                </div>
                                <span class="name">
                                    Happy Students
                                </span>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="javascript:void(0)" class="purchase-button mb-20" target="_blank">
                                Get Started
                                <i class="material-symbols-outlined mat-icon"> arrow_forward </i>
                                {{-- <img src="/images/arrow.png" alt="arrow"> --}}
                            </a>
                        </div>
                    </div>
                </section>

                <div class="popular-area mb-5 d-center flex-wrap gap-3 justify-content-between">
                    <ul class="nav flex-wrap gap-2 tab-area" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center active" id="most-popular-tab" data-bs-toggle="tab" data-bs-target="#most-popular-tab-pane" type="button" role="tab" aria-controls="most-popular-tab-pane" aria-selected="true">most-popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center" id="most-recent-tab" data-bs-toggle="tab" data-bs-target="#most-recent-tab-pane" type="button" role="tab" aria-controls="most-recent-tab-pane" aria-selected="false" tabindex="-1">most-recent</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center" id="most-saved-tab" data-bs-toggle="tab" data-bs-target="#most-saved-tab-pane" type="button" role="tab" aria-controls="most-saved-tab-pane" aria-selected="false" tabindex="-1">most-saved</button>
                        </li>
                    </ul>

                    @php
                        $random_tool_name = \App\Models\Tool::inRandomOrder()->first()->name;
                    @endphp
                    <form action="{{ route('tools.search', $random_tool_name) }}" class="d-flex align-items-stretch justify-content-between gap-4" name="search-form" method="GET">
                        <div class="input-area py-2 w-100 gap-2 d-flex align-items-center">
                            <i class="material-symbols-outlined mat-icon">search</i>
                            <input type="text" class="search-input" placeholder="Type and hit enter" autocomplete="off">
                        </div>
                    </form>
                    
                    <div class="btn-item">
                        <a href="#" class="cmn-btn gap-1">
                            <i class="material-symbols-outlined mat-icon"> add </i>
                            Submit Tool
                        </a>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="most-popular-tab-pane" role="tabpanel" aria-labelledby="most-popular-tab" tabindex="0">
                        <div class="row cus-mar friend-request">
                            @include('includes.tools.index', ['tools' => \App\Models\Tool::orderBy('views', 'desc')->limit(18)->get()])
                        </div>
                    </div>

                    <div class="tab-pane fade" id="most-recent-tab-pane" role="tabpanel" aria-labelledby="most-recent-tab" tabindex="0">
                        <div class="row cus-mar friend-request">
                            @include('includes.tools.index', ['tools' => \App\Models\Tool::latest()->limit(18)->get()])
                        </div>
                    </div>
                    <div class="tab-pane fade" id="most-saved-tab-pane" role="tabpanel" aria-labelledby="most-saved-tab" tabindex="0">
                        <div class="row cus-mar friend-request">
                            <!-- get tools by UserFavorites -->
                            @include('includes.tools.index', ['tools' => \App\Models\Tool::withCount('favoriters')->orderBy('favoriters_count', 'desc')->limit(18)->get()])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // on enter key press
        $('input.search-input').on('keypress', function(event) {
            if (event.which === 13) { 
                event.preventDefault();

                var search = $(this).val();
                if (search.length > 0) {
                    window.location.href = '/tools/search/' + search;
                } else {
                    window.location.href = '/tools';
                }
            }
        });
    });
</script>
@endsection
