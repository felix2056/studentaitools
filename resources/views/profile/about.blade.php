@extends('layouts.app')

@section('title', $user->full_name . ' - About')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @include('includes.profile.banner', ['user' => $user])
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-9 col-xl-8 col-lg-7">
                <div class="single-box p-3 p-sm-5">
                    <div class="head-area text-start">
                        <h6>Bio</h6>
                        <p class="mdtxt mt-6">{{ $user->bio }}</p>
                    </div>
                    <ul class="d-grid gap-3 mt-4">
                        @if ($user->gender)
                        <li class="d-center gap-3 justify-content-between">
                            <div class="info-area d-flex align-items-center gap-2">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="mdtxt">{{ $user->gender }}</span>
                            </div>
                            <div class="input-item d-center text-start">
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                <span>Public</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                <span>Friends</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                <span>Only me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                <span>Share</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if ($user->preferred_pronouns && $user->show_pronouns)
                        <li class="d-center gap-3 justify-content-between">
                            <div class="info-area d-flex align-items-center gap-2">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="mdtxt">{{ $user->preferred_pronouns }}</span>
                            </div>
                            <div class="input-item d-center text-start">
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                <span>Public</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                <span>Only me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                <span>Share</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if ($user->date_of_birth && $user->show_birthday)
                        <li class="d-center gap-3 justify-content-between">
                            <div class="info-area d-flex align-items-center gap-2">
                                <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                                <span class="mdtxt">{{ $user->birthday }}</span>
                            </div>
                            <div class="input-item d-center text-start">
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                <span>Public</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                <span>Only me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                <span>Share</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if ($user->education)
                        <li class="d-center gap-3 justify-content-between">
                            <div class="info-area d-flex align-items-center gap-2">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span class="mdtxt">{{ $user->education }}</span>
                            </div>
                            <div class="input-item d-center text-start">
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                <span>Public</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                <span>Only me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                <span>Share</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if ($user->skills)
                        <li class="d-center gap-3 justify-content-between">
                            <div class="info-area d-flex align-items-center gap-2">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                                <span class="mdtxt">{{ $user->skills }}</span>
                            </div>
                            <div class="input-item d-center text-start">
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                <span>Public</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                <span>Only me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                <span>Share</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if ($user->hobbies)
                        <li class="d-center gap-3 justify-content-between">
                            <div class="info-area d-flex align-items-center gap-2">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <span class="mdtxt">{{ $user->hobbies }}</span>
                            </div>
                            <div class="input-item d-center text-start">
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                <span>Public</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                <span>Only me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                <span>Share</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if ($user->languages)
                        <li class="d-center gap-3 justify-content-between">
                            <div class="info-area d-flex align-items-center gap-2">
                                <i class="fa fa-language" aria-hidden="true"></i>
                                <span class="mdtxt">{{ $user->languages_commas }}</span>
                            </div>
                            <div class="input-item d-center text-start">
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                <span>Public</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                <span>Only me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                <span>Share</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if ($user->facebook)
                        <li class="d-center gap-3 justify-content-between">
                            <div class="info-area d-flex align-items-center gap-2">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <span class="mdtxt link">
                                    <a href="{{ $user->facebook }}" target="_blank">Facebook</a>
                                </span>
                            </div>
                            <div class="input-item d-center text-start">
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                <span>Public</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                <span>Only me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                <span>Share</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if ($user->twitter)
                        <li class="d-center gap-3 justify-content-between">
                            <div class="info-area d-flex align-items-center gap-2">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <span class="mdtxt link">
                                    <a href="{{ $user->twitter }}" target="_blank">Twitter</a>
                                </span>
                            </div>
                            <div class="input-item d-center text-start">
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                <span>Public</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                <span>Only me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                <span>Share</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if ($user->instagram)
                        <li class="d-center gap-3 justify-content-between">
                            <div class="info-area d-flex align-items-center gap-2">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                <span class="mdtxt link">
                                    <a href="{{ $user->instagram }}" target="_blank">Instagram</a>
                                </span>
                            </div>
                            <div class="input-item d-center text-start">
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                <span>Public</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                <span>Only me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                <span>Share</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if ($user->linkedin)
                        <li class="d-center gap-3 justify-content-between">
                            <div class="info-area d-flex align-items-center gap-2">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                <span class="mdtxt link">
                                    <a href="{{ $user->linkedin }}" target="_blank">LinkedIn</a>
                                </span>
                            </div>
                            <div class="input-item d-center text-start">
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                <span>Public</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                <span>Only me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                <span>Share</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endif

                        @if ($user->website)
                        <li class="d-center gap-3 justify-content-between">
                            <div class="info-area d-flex align-items-center gap-2">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="mdtxt link">
                                    <a href="{{ $user->website }}" target="_blank">{{ $user->website }}</a>
                                </span>
                            </div>
                            <div class="input-item d-center text-start">
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                <span>Public</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                <span>Only me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                <span>Share</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        @endif

                        <li class="d-center gap-3 justify-content-between">
                            <div class="info-area d-flex align-items-center gap-2">
                                <i class="fa fa-language" aria-hidden="true"></i>
                                <span class="mdtxt">{{ $user->country }}</span>
                            </div>
                            <div class="input-item d-center text-start">
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-3 m-0"> public </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> public </i>
                                                <span>Public</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> person </i>
                                                <span>Only me</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> share </i>
                                                <span>Share</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="group-btn cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn d-center ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> edit </i>
                                                <span>Edit</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> delete </i>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-4 col-lg-5">
                <div class="sidebar-wrapper d-flex al-item justify-content-end justify-content-xl-center flex-column flex-md-row flex-xl-column flex gap-6">
                    <div class="sidebar-area p-5">
                        <div class="mb-4">
                            <h6 class="d-inline-flex">
                                Friends
                            </h6>
                        </div>
                        <div class="d-flex flex-column gap-6">
                            @foreach ($user->getFriends() as $friend)
                            <div class="profile-area d-center justify-content-between">
                                <div class="avatar-item d-flex gap-3 align-items-center">
                                    <div class="avatar-item">
                                        <img class="avatar-img max-un" src="{{ $friend->avatar }}" alt="avatar">
                                    </div>

                                    <div class="info-area">
                                        <h6 class="m-0">
                                            <a href="{{ route('profile.show', $friend->username) }}">{{ $friend->first_name }}</a>
                                        </h6>
                                    </div>
                                </div>

                                <div class="btn-group cus-dropdown dropend">
                                    <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>

                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="unfollow-friend-btn droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                <span>Unfollow</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block-friend-btn droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                <span>Block</span>
                                            </a>
                                        </li>
                                    </ul>
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
