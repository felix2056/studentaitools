@extends('layouts.app')

@section('title', 'Messages')

@section('content')
<main class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 col-xl-4 col-lg-4 pe-0">
                <div class="d-block d-lg-none">
                    <button class="button profile-active mb-4 mb-lg-0 d-flex align-items-center gap-2">
                        <i class="material-symbols-outlined mat-icon"> tune </i>
                        <span>Chat List</span>
                    </button>
                </div>
                <div class="profile-sidebar">
                    <div class="d-block d-lg-none position-absolute end-0 top-0">
                        <button class="button profile-close">
                            <i class="material-symbols-outlined mat-icon fs-xl"> close </i>
                        </button>
                    </div>
                    <div class="chat-area">
                        <aside>
                            <div class="chat-top p-5">
                                <div class="profile-area d-center justify-content-between">
                                    <div class="avatar-item d-flex mb-4 gap-3 align-items-center">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="images/avatar-1.png" alt="avatar">
                                        </div>
                                        <div class="info-area">
                                            <h6 class="m-0">Chat</h6>
                                        </div>
                                    </div>
                                    <div class="btn-group cus-dropdown dropend">
                                        <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                    <span>Hide Contact</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <form action="#" class="input-area py-2 d-flex align-items-center">
                                    <i class="material-symbols-outlined mat-icon">search</i>
                                    <input type="text" placeholder="Search" autocomplete="off">
                                </form>
                            </div>
                            <div class="header-menu cus-scrollbar">
                                <div class="single-item messages-area pb-5">
                                    <div class="text-start d-flex justify-content-between chat-single active p-4 mb-2">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="avatar">
                                                <img class="avatar-img max-un" src="images/avatar-7.png" alt="avatar">
                                            </div>
                                            <div class="text-area">
                                                <div class="title-area position-relative d-inline-flex align-items-center">
                                                    <h6 class="m-0 d-inline-flex">Piter Maio</h6>
                                                    <span class="abs-area position-absolute d-center mdtxt">3</span>
                                                </div>
                                                <p class="mdtxt sms">Amet minim mollit non....</p>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                        <span>Hide Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-start d-flex justify-content-between chat-single p-4 mb-2">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="avatar">
                                                <img class="avatar-img max-un" src="images/avatar-1.png" alt="avatar">
                                            </div>
                                            <div class="text-area">
                                                <h6 class="m-0 mb-1">Annette Black</h6>
                                                <p class="mdtxt">You: consequat sunt</p>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                        <span>Hide Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-start d-flex justify-content-between chat-single p-4 mb-2">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="avatar">
                                                <img class="avatar-img max-un" src="images/avatar-2.png" alt="avatar">
                                            </div>
                                            <div class="text-area">
                                                <h6 class="m-0 mb-1">Ralph Edwards</h6>
                                                <p class="mdtxt sms">Amet minim mollit non....</p>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                        <span>Hide Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-start d-flex justify-content-between chat-single p-4 mb-2">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="avatar">
                                                <img class="avatar-img max-un" src="images/avatar-3.png" alt="avatar">
                                            </div>
                                            <div class="text-area">
                                                <h6 class="m-0 mb-1"><a href="#">Darrell Steward</a></h6>
                                                <p class="mdtxt">You: consequat sunt</p>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                        <span>Hide Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-start d-flex justify-content-between chat-single p-4 mb-2">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="avatar">
                                                <img class="avatar-img max-un" src="images/avatar-4.png" alt="avatar">
                                            </div>
                                            <div class="text-area">
                                                <h6 class="m-0 mb-1">Wade Warren</h6>
                                                <p class="mdtxt">You: consequat sunt</p>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                        <span>Hide Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-start d-flex justify-content-between chat-single p-4 mb-2">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="avatar">
                                                <img class="avatar-img max-un" src="images/avatar-5.png" alt="avatar">
                                            </div>
                                            <div class="text-area">
                                                <h6 class="m-0 mb-1">Kathryn Murphy</h6>
                                                <p class="mdtxt">You: consequat sunt</p>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                        <span>Hide Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-start d-flex justify-content-between chat-single p-4 mb-2">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="avatar">
                                                <img class="avatar-img max-un" src="images/avatar-6.png" alt="avatar">
                                            </div>
                                            <div class="text-area">
                                                <h6 class="m-0 mb-1">Jacob Jones</h6>
                                                <p class="mdtxt">You: consequat sunt</p>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                        <span>Hide Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-start d-flex justify-content-between chat-single p-4 mb-2">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="avatar">
                                                <img class="avatar-img max-un" src="images/avatar-3.png" alt="avatar">
                                            </div>
                                            <div class="text-area">
                                                <h6 class="m-0 mb-1"><a href="#">Darrell Steward</a></h6>
                                                <p class="mdtxt">You: consequat sunt</p>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                        <span>Hide Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-start d-flex justify-content-between chat-single p-4 mb-2">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="avatar">
                                                <img class="avatar-img max-un" src="images/avatar-4.png" alt="avatar">
                                            </div>
                                            <div class="text-area">
                                                <h6 class="m-0 mb-1">Wade Warren</h6>
                                                <p class="mdtxt">You: consequat sunt</p>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                        <span>Hide Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-start d-flex justify-content-between chat-single p-4 mb-2">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="avatar">
                                                <img class="avatar-img max-un" src="images/avatar-5.png" alt="avatar">
                                            </div>
                                            <div class="text-area">
                                                <h6 class="m-0 mb-1">Kathryn Murphy</h6>
                                                <p class="mdtxt">You: consequat sunt</p>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                        <span>Hide Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-start d-flex justify-content-between chat-single p-4 mb-2">
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="avatar">
                                                <img class="avatar-img max-un" src="images/avatar-6.png" alt="avatar">
                                            </div>
                                            <div class="text-area">
                                                <h6 class="m-0 mb-1">Jacob Jones</h6>
                                                <p class="mdtxt">You: consequat sunt</p>
                                            </div>
                                        </div>
                                        <div class="btn-group cus-dropdown dropend">
                                            <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
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
                                                        <span>Hide Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="col-xxl-9 col-xl-8 col-lg-8 ps-4 ps-lg-0 d-flex flex-column gap-7">
                <div class="chat-area">
                    <div class="main">
                        <div class="chat-head py-4 px-5 d-center justify-content-between">
                            <div class="d-flex gap-4 align-items-center">
                                <img src="images/avatar-2.png" alt="image">
                                <div class="profile-status">
                                    <h5 class="m-0"><a href="public-profile-post.html" class="m-0">Piter Maio</a></h5>
                                    <span class="mdtxt">online</span>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <a href="#"><i class="material-symbols-outlined mat-icon fw-600"> call </i></a>
                                <a href="#"><i class="material-symbols-outlined mat-icon"> videocam </i></a>
                            </div>
                        </div>
                        <ul class="py-4 px-5 cus-scrollbar bottom-0 main-chat-box">
                            <li class="you">
                                <div class="entete">
                                    <img src="images/avatar-2.png" alt="image">
                                </div>
                                <div class="message">
                                    <p>Hello! Have you seen my backpack anywhere in office?</p>
                                    <span class="mdtxt">10:42</span>
                                </div>
                            </li>
                            <li class="me">
                                <div class="message">
                                    <p>No, There is no backpack in office.</p>
                                    <span class="mdtxt">10:43</span>
                                </div>
                                <div class="entete">
                                    <img src="images/avatar-1.png" alt="image">
                                </div>
                            </li>
                            <li class="me">
                                <div class="message">
                                    <p>Thank you for work, see you!</p>
                                    <span class="mdtxt">10:43</span>
                                </div>
                                <div class="entete">
                                    <img src="images/avatar-1.png" alt="image">
                                </div>
                            </li>
                            <li class="you">
                                <div class="entete">
                                    <img src="images/avatar-2.png" alt="image">
                                </div>
                                <div class="message">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    <span class="mdtxt">10:44</span>
                                </div>
                            </li>
                            <li class="me">
                                <div class="message">
                                    <p>Many desktop publishing packages and web page editors now</p>
                                    <span class="mdtxt">10:45</span>
                                </div>
                                <div class="entete">
                                    <img src="images/avatar-1.png" alt="image">
                                </div>
                            </li>
                            <li class="you">
                                <div class="entete">
                                    <img src="images/avatar-2.png" alt="image">
                                </div>
                                <div class="message">
                                    <p>A page when looking at its layout.</p>
                                    <span class="mdtxt">10:46</span>
                                </div>
                            </li>
                            <li class="me">
                                <div class="message">
                                    <p>It was nice talking to you</p>
                                    <span class="mdtxt">10:47</span>
                                </div>
                                <div class="entete">
                                    <img src="images/avatar-1.png" alt="image">
                                </div>
                            </li>
                            <li class="you">
                                <div class="entete">
                                    <img src="images/avatar-2.png" alt="image">
                                </div>
                                <div class="message">
                                    <p>What time is it?</p>
                                    <span class="mdtxt">10:48</span>
                                </div>
                            </li>
                            <li class="me">
                                <div class="message">
                                    <p>It is 11 o'clock</p>
                                    <span class="mdtxt">11:00</span>
                                </div>
                                <div class="entete">
                                    <img src="images/avatar-1.png" alt="image">
                                </div>
                            </li>
                            <li class="you">
                                <div class="entete">
                                    <img src="images/avatar-2.png" alt="image">
                                </div>
                                <div class="message">
                                    <p>I am late</p>
                                    <span class="mdtxt">11:42</span>
                                </div>
                            </li>
                            <li class="me">
                                <div class="message">
                                    <p>I have to go now</p>
                                    <span class="mdtxt">11:45</span>
                                </div>
                                <div class="entete">
                                    <img src="images/avatar-1.png" alt="image">
                                </div>
                            </li>
                            <li class="you">
                                <div class="entete">
                                    <img src="images/avatar-2.png" alt="image">
                                </div>
                                <div class="message">
                                    <p>Are you okay?</p>
                                    <span class="mdtxt">10:48</span>
                                </div>
                            </li>
                            <li class="you">
                                <div class="entete">
                                    <img src="images/avatar-2.png" alt="image">
                                </div>
                                <div class="message">
                                    <p>Can I help you?</p>
                                    <span class="mdtxt">10:49</span>
                                </div>
                            </li>
                        </ul>
                        <div class="m-4 text-end chat-footer">
                            <form action="#" class="py-2 pt-1 px-5">
                                <div class="d-flex align-items-sm-center align-items-end flex-column flex-sm-row mt-2 gap-3">
                                    <div class="form-content p-0 d-flex gap-2 align-items-center w-100">
                                        <div class="file-input d-flex gap-1 gap-md-2">
                                            <div class="file-upload">
                                                <label class="file">
                                                    <input type="file">
                                                    <span class="file-custom border-0 d-grid text-center">
                                                        <span class="material-symbols-outlined rotateInDownLeft mat-icon fs-xxl"> attachment </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="file-upload">
                                                <label class="file">
                                                    <input type="file">
                                                    <span class="file-custom border-0 d-grid text-center">
                                                        <span class="material-symbols-outlined mat-icon fs-xxl"> perm_media </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="file-upload">
                                                <label class="file">
                                                    <input type="file">
                                                    <span class="file-custom border-0 d-grid text-center">
                                                        <span class="material-symbols-outlined mat-icon fs-xxl"> gif_box </span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <input class="py-2" placeholder="Type your message here..">
                                    </div>
                                    <div class="btn-area">
                                        <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                            Send
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection