<div class="{{ $class }}">
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
                <img class="avatar-img max-un" src="{{ Auth::user()->avatar }}" width="48" height="48" alt="avatar">
            </div>
            <div class="text-area">
                <h6 class="m-0 mb-1"><a href="{{ route('profile.show', Auth::user()->username) }}">{{ Auth::user()->full_name }}</a></h6>
                <p class="mdtxt">{{ '@' . Auth::user()->username }}</p>
            </div>
        </div>
        @endauth

        <ul class="profile-link mt-7 mb-7 pb-7">
            <li>
                <a href="{{ route('index') }}" class="d-flex gap-4 @if(request()->is('/')) active @endif">
                    <i class="material-symbols-outlined mat-icon"> home </i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('newsfeed.index') }}" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> article </i>
                    <span>Newsfeed</span>
                </a>
            </li>
            <li>
                <a href="{{ route('tools.index') }}" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> integration_instructions </i>
                    <span>AI Tools</span>
                </a>
            </li>
            @auth
            <li>
                <a href="{{ route('people.index') }}" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> person </i>
                    <span>People</span>
                </a>
            </li>
            @endauth
            <li>
                <a href="{{ route('requests.index') }}" class="d-flex gap-4 @if(request()->is('requests*')) active @endif">
                    <i class="material-symbols-outlined mat-icon"> add_task </i>
                    <span>Requests</span>
                </a>
            </li>
            <li>
                <a href="{{ route('events.index') }}" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> workspace_premium </i>
                    <span>Events</span>
                </a>
            </li>
            {{-- <li>
                <a href="pages.html" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> perm_media </i>
                    <span>Pages</span>
                </a>
            </li> --}}
            {{-- <li>
                <a href="group.html" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> workspaces </i>
                    <span>Group</span>
                </a>
            </li> --}}
            {{-- <li>
                <a href="marketplace.html" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> store </i>
                    <span>Marketplace</span>
                </a>
            </li> --}}
            {{-- <li>
                <a href="saved-post.html" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> sync_saved_locally </i>
                    <span>Saved</span>
                </a>
            </li> --}}
            <li>
                <a href="{{ route('favorites') }}" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> bookmark_add </i>
                    <span>My Saves</span>
                </a>
            </li>
            <li>
                <a href="most-favorited.html" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> bookmark_added </i>
                    <span>Most Saved</span>
                </a>
            </li>
            <li>
                <a href="{{ route('auth.settings') }}" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> settings </i>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a href="https://discord.gg/8v3dZg6" class="d-flex gap-4">
                    <i class="material-symbols-outlined"> rss_feed </i>
                    <span>Follow Us</span>
                </a>
            </li>
            @guest
            <li>
                <a href="{{ route('auth.signin') }}" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> login </i>
                    <span>Sign Up</span>
                </a>
            </li>
            <li>
                <a href="{{ route('auth.signup') }}" class="d-flex gap-4">
                    <i class="material-symbols-outlined mat-icon"> person_add </i>
                    <span>Sign In</span>
                </a>
            </li>
            @endguest
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