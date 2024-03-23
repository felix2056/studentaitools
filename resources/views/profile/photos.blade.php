@extends('layouts.app')

@section('title', $user->full_name . ' - Photos')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @include('includes.profile.banner', ['user' => $user])
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-9 col-xl-8">
                <div class="single-box p-5">
                    <div class="row cus-mar">
                        @foreach ($user->posts->pluck('images')->toArray() as $images)
                        @foreach ($images as $image)
                        <div class="col-md-4 col-6">
                            <div class="single-box">
                                <img class="w-100" src="{{ $image }}" alt="image" width="293" height="213">
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-10 mt-5 mt-xl-0">
                <div class="cus-scrollbar">
                    @include('includes.people.friends-sidebar', ['friends' => $user->getFriends()])
                </div>
            </div>
        </div>
    </div>
</main>
@endsection