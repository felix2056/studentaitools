@extends('layouts.app')

@section('title', 'Blocked')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                @include('includes.people.sidebar')
            </div>

            <div class="col-xl-9 col-lg-8">
                <div class="row cus-mar friend-request">
                    <div class="col-xl-12">
                        <div class="single-box text-start p-5">
                            <div class="table-responsive">
                                <div class="title-area mb-3">
                                    <h6>Blocked Members</h6>
                                </div>
                                <table class="table m-0">
                                    <tbody>
                                        @foreach (Auth::user()->getBlockedFriendships() as $friend)
                                        <tr>
                                            <th scope="row">
                                                <div class="d-flex gap-3 align-items-center">
                                                    <div class="avatar-item">
                                                        <img class="avatar-img max-un" src="{{ $friend->avatar }}" alt="avatar">
                                                    </div>
                                                    <a href="{{ route('profile.show', $friend->username) }}" class="text-area">
                                                        <p class="m-0">{{ $friend->full_name }}</p>
                                                    </a>
                                                </div>
                                            </th>
                                            <td><p class="blocked">Blocked {{ $friend->pivot->created_at->format('d/m/Y') }}</p></td>
                                            <td>
                                                <div class="btn-area d-flex justify-content-end gap-3">
                                                    <button class="unblock-btn cmn-btn">Unblock</button>
                                                    {{-- <button class="d-center cmn-btn alt px-2">
                                                        <i class="material-symbols-outlined"> delete </i>
                                                    </button> --}}
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection