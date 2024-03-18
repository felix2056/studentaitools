<div class="banner-area pages-create mb-5">
    <div class="single-box p-5">
        <div class="avatar-area">
            <img class="avatar-img w-100" src="{{ $user->cover }}" alt="image">
        </div>
        
        <div class="top-area py-4 d-center flex-wrap gap-3 justify-content-between align-items-start">
            <div class="d-flex gap-3 align-items-center">
                <div class="avatar-item p">
                    <img class="avatar-img max-un" src="{{ $user->avatar }}" alt="avatar">
                </div>
                <div class="text-area text-start">
                    <h4 class="m-0 mb-2">{{ $user->full_name }}</h4>
                    <div class="friends-list d-flex flex-wrap gap-2 align-items-center text-center">
                        <ul class="d-flex align-items-center justify-content-center">
                            <li><img src="images/avatar-3.png" alt="image"></li>
                            <li><img src="images/avatar-2.png" alt="image"></li>
                            <li><img src="images/avatar-4.png" alt="image"></li>
                        </ul>
                        <span class="mdtxt d-center">10k Followers</span>
                        <span class="mdtxt d-center following">200 Following</span>
                    </div>
                </div>
            </div>
            <div class="btn-item d-center gap-3">
                <a href="#" class="cmn-btn d-center gap-1">
                    <i class="material-symbols-outlined mat-icon fs-2"> edit_note </i>
                    Edit Profile
                </a>
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

        <div class="page-details">
            <ul class="nav mt-5 pt-4 flex-wrap gap-2 tab-area">
                <li class="nav-item" role="presentation">
                    <a href="profile-post.html" class="nav-link d-center active">Post</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="profile-about.html" class="nav-link d-center">About</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="profile-photos.html" class="nav-link d-center">Photos</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="profile-group.html" class="nav-link d-center">Groups</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="profile-connections.html" class="nav-link d-center">Connections</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="profile-events.html" class="nav-link d-center">Events</a>
                </li>
            </ul>
        </div>
    </div>
</div>