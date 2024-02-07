<div class="col-xl-3 col-lg-4">
    <div class="d-block d-lg-none">
        <button class="button profile-active mb-4 mb-lg-0 d-flex align-items-center gap-2">
            <i class="material-symbols-outlined mat-icon"> tune </i>
            <span>My profile</span>
        </button>
    </div>

    <div class="profile-sidebar cus-scrollbar p-5">
        <div class="d-block d-lg-none position-absolute end-0 top-0">
            <button class="button profile-close">
                <i class="material-symbols-outlined mat-icon fs-xl"> close </i>
            </button>
        </div>

        @auth
        <div class="profile-pic d-flex gap-2 align-items-center">
            <div class="avatar position-relative">
                <img class="avatar-img max-un" src="/images/avatar-1.png" alt="avatar">
            </div>
            <div class="text-area">
                <h6 class="m-0 mb-1"><a href="profile-post.html">Lerio Mao</a></h6>
                <p class="mdtxt">@maolio</p>
            </div>
        </div>
        @endauth
        <ul class="profile-link mt-7 mb-7 pb-7">
            <li>
                <a href="index.html" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> home </i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="friend-request.html" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> person </i>
                    <span>People</span>
                </a>
            </li>
            <li>
                <a href="event.html" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> workspace_premium </i>
                    <span>Event</span>
                </a>
            </li>
            <li>
                <a href="pages.html" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> perm_media </i>
                    <span>Pages</span>
                </a>
            </li>
            <li>
                <a href="group.html" class="d-flex gap-4 active">
                    <i class="material-symbols-outlined mat-icon"> workspaces </i>
                    <span>Group</span>
                </a>
            </li>
            <li>
                <a href="marketplace.html" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> store </i>
                    <span>Marketplace</span>
                </a>
            </li>
            <li>
                <a href="saved-post.html" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> sync_saved_locally </i>
                    <span>Saved</span>
                </a>
            </li>
            <li>
                <a href="favorites.html" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> bookmark_add </i>
                    <span>Favorites</span>
                </a>
            </li>
            <li>
                <a href="setting.html" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> settings </i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
        <div class="your-shortcuts">
            <h6>Your shortcuts</h6>
            <ul>
                <li>
                    <a href="public-profile-post.html" class="d-flex align-items-center gap-3">
                        <img src="/images/shortcuts-1.png" alt="icon">
                        <span>Game Community</span>
                    </a>
                </li>
                <li>
                    <a href="public-profile-post.html" class="d-flex align-items-center gap-3">
                        <img src="/images/shortcuts-2.png" alt="icon">
                        <span>Pixel Think (Member)</span>
                    </a>
                </li>
                <li>
                    <a href="public-profile-post.html" class="d-flex align-items-center gap-3">
                        <img src="/images/shortcuts-3.png" alt="icon">
                        <span>8 Ball Pool</span>
                    </a>
                </li>
                <li>
                    <a href="public-profile-post.html" class="d-flex align-items-center gap-3">
                        <img src="/images/shortcuts-4.png" alt="icon">
                        <span>Gembio</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>