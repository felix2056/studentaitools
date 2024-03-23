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
                            @include('includes.tools.index', ['tools' => $tools])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
