@extends('layouts.app')

@section('title', $user->full_name . ' - Events')

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
                <div class="row cus-mar friend-request">
                    @include('includes.events.index', ['events' => $user->events])
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-8 mt-5 mt-xl-0">
                <div class="cus-scrollbar">
                    @include('includes.people.friends-sidebar', ['friends' => $user->getFriends()])
                </div>
            </div>
        </div>
    </div>
</main>
@endsection