@foreach ($posts as $post)
    <div class="post-{{ $post->id }} post-single-box p-3 p-sm-5">
        <div class="top-area pb-5">
            <div class="profile-area d-center justify-content-between">
                <div class="avatar-item d-flex gap-3 align-items-center">
                    <div class="avatar position-relative">
                        <img class="avatar-img max-un" src="{{ $post->user->avatar }}" alt="avatar">
                    </div>
                    <div class="info-area">
                        <h6 class="m-0">
                            <a href="#">{{ $post->user->full_name }}</a>
                        </h6>
                        <span class="mdtxt status">Active</span>
                    </div>
                </div>

                <div class="btn-group cus-dropdown">
                    <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                    </button>

                    <ul class="dropdown-menu p-4 pt-2">
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> bookmark_add </i>
                                <span>Saved Post</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                <span>Unfollow</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                <span>Hide Post</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> lock </i>
                                <span>Block</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> flag </i>
                                <span>Report Post</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="py-4">
                <p class="description">{!! $post->content !!}</p>

                {{-- @if ($post->tags->count() > 0)
                <p class="hastag d-flex gap-2">
                    <a href="#">#Viral</a>
                    <a href="#">#travel</a>
                </p>
                @endif --}}
            </div>

            @if (!empty($post->images))
            @if (count($post->images) == 1)
            <div class="post-img">
                <img src="{{ $post->images[0] }}" class="w-100" alt="image">
            </div>

            @elseif(count($post->images) == 2)
            <div class="post-img  d-flex justify-content-between flex-wrap gap-2 gap-lg-3">
                <div class="single">
                    <img src="{{ $post->images[0] }}" alt="image">
                </div>
                <div class="single">
                    <img src="{{ $post->images[1] }}" alt="image">
                </div>
            </div>

            @elseif (count($post->images) == 3)
            <div class="post-img  d-flex justify-content-between flex-wrap gap-2 gap-lg-3">
                <div class="single">
                    <img src="{{ $post->images[0] }}" alt="image" style="height: 100%; width: 100%; object-fit: cover; object-position: center;" />
                </div>
                <div class="single d-grid gap-3">
                    <img src="{{ $post->images[1] }}" alt="image">
                    <img src="{{ $post->images[2] }}" alt="image">
                </div>
            </div>

            @elseif (count($post->images) > 3)
            <div class="post-img  d-flex justify-content-between flex-wrap gap-2 gap-lg-3">
                @foreach ($post->images as $image)
                <div class="single">
                    <img src="{{ $image }}" alt="image">
                </div>
                @endforeach
            </div>
            @endif

            @elseif ($post->video != null)
            <div class="post-img video-item">
                <div class="plyr__video-embed player">
                    <iframe src="{{ $post->video_embed }}"></iframe>
                </div>
            </div>
            @elseif ($post->link != null)
            <div class="post-img">
                <a href="{{ $post->link }}" class="w-100" target="_blank">
                    <img src="{{ $post->link_img }}" class="w-100" alt="image">
                </a>
            </div>

            <div class="link-area mt-2">
                <a href="{{ $post->link }}" target="_blank">
                    <h6 class="link-title m-0">{{ $post->link_title }}</h6>
                    <p class="link-desc mdtxt">{{ $post->link_desc }}</p>
                </a>
            </div>
            @endif
        </div>

        <div class="total-react-share pb-4 d-center gap-2 flex-wrap justify-content-between">
            <div class="friends-list d-flex gap-3 align-items-center text-center">
                <ul class="d-flex align-items-center justify-content-center">
                    @foreach ($post->likes->take(3) as $like)
                    <li><img src="{{ $like->user->avatar }}" alt="image"></li>
                    @endforeach

                    @if ($post->likes->count() > 3)
                    <li>
                        <span class="mdtxt d-center">{{ ($post->likes->count() > 3) ? '+' . ($post->likes->count() - 3) : '' }}</span>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="react-list d-flex flex-wrap gap-6 align-items-center text-center">
                <button class="mdtxt">{{ $post->comments->count() }} Comments</button>
                <button class="mdtxt">0 Shares</button>
            </div>
        </div>

        <div class="like-comment-share py-5 d-center flex-wrap gap-3 gap-md-0 justify-content-between">
            @if ($post->likes->contains('user_id', Auth::id()))
            <button class="newsfeed-like-btn d-center gap-1 gap-sm-2 mdtxt active" data-id="{{ $post->id }}">
                <i class="newsfeed-like-icon material-symbols-outlined mat-icon"> favorite </i>
                Unlike
            </button>
            @else
            <button class="newsfeed-like-btn d-center gap-1 gap-sm-2 mdtxt" data-id="{{ $post->id }}">
                <i class="newsfeed-like-icon material-symbols-outlined mat-icon"> favorite </i>
                Like
            </button>
            @endif

            <button type="button" class="newsfeed-comments-toggle-btn d-center gap-1 gap-sm-2 mdtxt" data-post_id="{{ $post->id }}">
                <i class="material-symbols-outlined mat-icon"> chat </i>
                Comment
            </button>

            <button class="d-center gap-1 gap-sm-2 mdtxt">
                <i class="material-symbols-outlined mat-icon"> share </i>
                Share
            </button>
        </div>

        <form action="{{ route('newsfeed.post.comment.create', $post->id) }}">
            @csrf
            <div class="d-flex mt-5 gap-3">
                <div class="profile-box d-none d-xxl-block">
                    @auth
                    <a href="#">
                        <img src="{{ Auth::user()->avatar }}" class="max-un" alt="icon">
                    </a>
                    @else
                    <a href="#">
                        <img src="/images/add-post-avatar.png" class="max-un" alt="icon">
                    </a>
                    @endauth
                </div>
                <div class="form-content input-area py-1 d-flex gap-2 align-items-center w-100">
                    <input type="text" class="newsfeed-comment-input" placeholder="Write a comment.." data-post_id="{{ $post->id }}">

                    <div class="file-input d-flex gap-1 gap-md-2">
                        <div class="file-upload">
                            <label class="file">
                                <input type="file" class="newsfeed-comment-gif">
                                <span class="file-custom border-0 d-grid text-center">
                                    <span class="material-symbols-outlined mat-icon m-0 xxltxt"> gif_box </span>
                                </span>
                            </label>
                        </div>
                        <div class="file-upload">
                            <label class="file">
                                <input type="file" class="newsfeed-comment-file">
                                <span class="file-custom border-0 d-grid text-center">
                                    <span class="material-symbols-outlined mat-icon m-0 xxltxt"> perm_media </span>
                                </span>
                            </label>
                        </div>
                        <span class="mood-area">
                            <span class="material-symbols-outlined mat-icon m-0 xxltxt"> mood </span>
                        </span>
                    </div>
                </div>
                <div class="btn-area d-flex">
                    <button type="button" class="newsfeed-comment-btn cmn-btn px-2 px-sm-5 px-lg-6" data-post_id="{{ $post->id }}">
                        <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                    </button>
                </div>
            </div>
        </form>

        <div class="newsfeed-comments-container d-none" data-post_id="{{ $post->id }}">
            @foreach ($post->comments as $comment)
            <div class="comments-area mt-5">
                <div class="single-comment-area ms-1 ms-xxl-15">
                    <div class="@if ($comment->has_children) parent-comment @endif d-flex gap-2 gap-sm-4">
                        <div class="avatar-item d-center align-items-baseline">
                            <img class="avatar-img max-un" src="{{ $comment->user->avatar }}" alt="avatar">
                        </div>
                        <div class="info-item active">
                            <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                <div class="title-area">
                                    <h6 class="m-0 mb-3">
                                        <a href="{{ route('profile.show', $comment->user->username) }}">{{ $comment->user->first_name }}</a>
                                    </h6>
                                    <p class="mdtxt">{{ $comment->body }}</p>
                                </div>
                                <div class="btn-group dropend cus-dropdown">
                                    <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                <span>Hide Comments</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> flag </i>
                                                <span>Report Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="like-share d-flex gap-6 mt-2">
                                <li class="d-center">
                                    <button class="mdtxt">Like</button>
                                </li>
                                <li class="d-center flex-column">
                                    <button class="mdtxt reply-btn">Reply</button>
                                </li>
                                <li class="d-center">
                                    <button class="mdtxt">Share</button>
                                </li>
                            </ul>
                            <form action="#" class="comment-form">
                                <div class="d-flex gap-3">
                                    <input type="text" class="newsfeed-reply-input" placeholder="Write a comment.." class="py-3" data-post_id="{{ $post->id }}" data-comment_id="{{ $comment->id }}">
                                    <button type="button" class="newsfeed-reply-btn cmn-btn px-2 px-sm-5 px-lg-6" data-post_id="{{ $post->id }}" data-comment_id="{{ $comment->id }}">
                                        <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    @foreach ($comment->children as $child)
                    <div class="sibling-comment comment-item-nested single-comment-area mt-7 ms-13 ms-sm-15">
                        <div class="d-flex gap-2 gap-sm-4 align-items-baseline">
                            <div class="avatar-item">
                                <img class="avatar-img max-un" src="{{ $child->user->avatar }}" alt="avatar">
                            </div>
                            <div class="info-item">
                                <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                    <div class="title-area">
                                        <h6 class="m-0 mb-3">
                                            <a href="public-profile-post.html">{{ $child->user->first_name }}</a>
                                        </h6>
                                        <p class="mdtxt">{{ $child->body }}</p>
                                    </div>
                                    <div class="btn-group dropend cus-dropdown">
                                        <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                        </button>
                                        <ul class="dropdown-menu p-4 pt-2">
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                    <span>Hide Comments</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> flag </i>
                                                    <span>Report Comments</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="like-share d-flex gap-6 mt-2">
                                    <li class="d-center">
                                        <button class="mdtxt">Like</button>
                                    </li>
                                    <li class="d-center flex-column">
                                        <button class="mdtxt reply-btn">Reply</button>
                                    </li>
                                    <li class="d-center">
                                        <button class="mdtxt">Share</button>
                                    </li>
                                </ul>
                                <form action="#" class="comment-form">
                                    <div class="d-flex gap-3">
                                        <input placeholder="Write a comment.." class="py-3">
                                        <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                            <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- <div class="post-single-box p-3 p-sm-5">
        <div class="top-area pb-5">
            <div class="profile-area d-center justify-content-between">
                <div class="avatar-item d-flex gap-3 align-items-center">
                    <div class="avatar position-relative">
                        <img class="avatar-img max-un" src="/images/avatar-1.png" alt="avatar">
                    </div>
                    <div class="info-area">
                        <h6 class="m-0"><a href="public-profile-post.html">Lori Cortez</a></h6>
                        <span class="mdtxt status">Active</span>
                    </div>
                </div>
                <div class="btn-group cus-dropdown">
                    <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                    </button>
                    <ul class="dropdown-menu p-4 pt-2">
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> bookmark_add </i>
                                <span>Saved Post</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                <span>Unfollow</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                <span>Hide Post</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> lock </i>
                                <span>Block</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> flag </i>
                                <span>Report Post</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="py-4">
                <p class="description">I created Roughly plugin to sketch crafted hand-drawn elements which can be used to any usage (diagrams/flows/decoration/etc)</p>
            </div>
            <div class="post-img  d-flex justify-content-between flex-wrap gap-2 gap-lg-3">
                <div class="single">
                    <img src="/images/post-img-2.png" alt="image">
                </div>
                <div class="single d-grid gap-3">
                    <img src="/images/post-img-3.png" alt="image">
                    <img src="/images/post-img-4.png" alt="image">
                </div>
            </div>
        </div>
        <div class="total-react-share pb-4 d-center gap-2 flex-wrap justify-content-between">
            <div class="friends-list d-flex gap-3 align-items-center text-center">
                <ul class="d-flex align-items-center justify-content-center">
                    <li><img src="/images/avatar-2.png" alt="image"></li>
                    <li><img src="/images/avatar-3.png" alt="image"></li>
                    <li><img src="/images/avatar-4.png" alt="image"></li>
                    <li><span class="mdtxt d-center">8+</span></li>
                </ul>
            </div>
            <div class="react-list d-flex flex-wrap gap-6 align-items-center text-center">
                <button class="mdtxt">4 Comments</button>
                <button class="mdtxt">1 Shares</button>
            </div>
        </div>
        <div class="like-comment-share py-5 d-center flex-wrap gap-3 gap-md-0 justify-content-between">
            <button class="d-center gap-1 gap-sm-2 mdtxt">
                <i class="material-symbols-outlined mat-icon"> favorite </i>
                Like
            </button>
            <button class="d-center gap-1 gap-sm-2 mdtxt">
                <i class="material-symbols-outlined mat-icon"> chat </i>
                Comment
            </button>
            <button class="d-center gap-1 gap-sm-2 mdtxt">
                <i class="material-symbols-outlined mat-icon"> share </i>
                Share
            </button>
        </div>
        <form action="#">
            <div class="d-flex mt-5 gap-3">
                <div class="profile-box d-none d-xxl-block">
                    <a href="#"><img src="/images/add-post-avatar.png" class="max-un" alt="icon"></a>
                </div>
                <div class="form-content input-area py-1 d-flex gap-2 align-items-center w-100">
                    <input placeholder="Write a comment..">
                    <div class="file-input d-flex gap-1 gap-md-2">
                        <div class="file-upload">
                            <label class="file">
                                <input type="file">
                                <span class="file-custom border-0 d-grid text-center">
                                    <span class="material-symbols-outlined mat-icon m-0 xxltxt"> gif_box </span>
                                </span>
                            </label>
                        </div>
                        <div class="file-upload">
                            <label class="file">
                                <input type="file">
                                <span class="file-custom border-0 d-grid text-center">
                                    <span class="material-symbols-outlined mat-icon m-0 xxltxt"> perm_media </span>
                                </span>
                            </label>
                        </div>
                        <span class="mood-area">
                            <span class="material-symbols-outlined mat-icon m-0 xxltxt"> mood </span>
                        </span>
                    </div>
                </div>
                <div class="btn-area d-flex">
                    <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                        <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                    </button>
                </div>
            </div>
        </form>
        <div class="comments-area mt-5">
            <div class="single-comment-area ms-1 ms-xxl-15">
                <div class="parent-comment d-flex gap-2 gap-sm-4">
                    <div class="avatar-item d-center align-items-baseline">
                        <img class="avatar-img max-un" src="/images/avatar-3.png" alt="avatar">
                    </div>
                    <div class="info-item">
                        <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                            <div class="title-area">
                                <h6 class="m-0 mb-3"><a href="public-profile-post.html">Lori Cortez</a></h6>
                                <p class="mdtxt">The only way to solve the problem is to code for the hardware directly</p>
                            </div>
                            <div class="btn-group dropend cus-dropdown">
                                <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                </button>
                                <ul class="dropdown-menu p-4 pt-2">
                                    <li>
                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                            <span>Hide Comments</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                            <i class="material-symbols-outlined mat-icon"> flag </i>
                                            <span>Report Comments</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="like-share d-flex gap-6 mt-2">
                            <li class="d-center">
                                <button class="mdtxt">Like</button>
                            </li>
                            <li class="d-center flex-column">
                                <button class="mdtxt reply-btn">Reply</button>
                            </li>
                            <li class="d-center">
                                <button class="mdtxt">Share</button>
                            </li>
                        </ul>
                        <form action="#" class="comment-form">
                            <div class="d-flex gap-3">
                                <input placeholder="Write a comment.." class="py-3">
                                <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                    <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="single-comment-area comment-item-nested mt-4 mt-sm-7 ms-13 ms-sm-15">
                    <div class="d-flex gap-2 gap-sm-4 align-items-baseline">
                        <div class="avatar-item">
                            <img class="avatar-img max-un" src="/images/avatar-4.png" alt="avatar">
                        </div>
                        <div class="info-item">
                            <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                <div class="title-area">
                                    <h6 class="m-0 mb-3"><a href="public-profile-post.html">Alex</a></h6>
                                    <p class="mdtxt">The only way to solve the</p>
                                </div>
                                <div class="btn-group dropend cus-dropdown">
                                    <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                <span>Hide Comments</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> flag </i>
                                                <span>Report Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="like-share d-flex gap-6 mt-2">
                                <li class="d-center">
                                    <button class="mdtxt">Like</button>
                                </li>
                                <li class="d-center flex-column">
                                    <button class="mdtxt reply-btn">Reply</button>
                                </li>
                                <li class="d-center">
                                    <button class="mdtxt">Share</button>
                                </li>
                            </ul>
                            <form action="#" class="comment-form">
                                <div class="d-flex gap-3">
                                    <input placeholder="Write a comment.." class="py-3">
                                    <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                        <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="post-single-box p-3 p-sm-5">
        <div class="top-area pb-5">
            <div class="profile-area d-center justify-content-between">
                <div class="avatar-item d-flex gap-3 align-items-center">
                    <div class="avatar-item">
                        <img class="avatar-img max-un" src="/images/avatar-5.png" alt="avatar">
                    </div>
                    <div class="info-area">
                        <h6 class="m-0"><a href="public-profile-post.html">Loprayos</a></h6>
                        <span class="mdtxt status">20m Ago</span>
                    </div>
                </div>
                <div class="btn-group cus-dropdown">
                    <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                    </button>
                    <ul class="dropdown-menu p-4 pt-2">
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> bookmark_add </i>
                                <span>Saved Post</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                <span>Unfollow</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                <span>Hide Post</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> lock </i>
                                <span>Block</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> flag </i>
                                <span>Report Post</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="py-4">
                <p class="description">Nam ornare a nibh id sagittis. Vestibulum nec molestie urna, eget convallis mi. Vestibulum rhoncus ligula eget sem sollicitudin interdum. Aliquam massa lectus, fringilla non diam ut, laoreet convallis risus. Curabitur at metus imperdiet, pellentesque ligula vel,</p>
            </div>
        </div>
        <div class="total-react-share pb-4 d-center gap-2 flex-wrap justify-content-between">
            <div class="friends-list d-flex gap-3 align-items-center text-center">
                <ul class="d-flex align-items-center justify-content-center">
                    <li><img src="/images/avatar-2.png" alt="image"></li>
                    <li><img src="/images/avatar-3.png" alt="image"></li>
                    <li><img src="/images/avatar-4.png" alt="image"></li>
                    <li><span class="mdtxt d-center">8+</span></li>
                </ul>
            </div>
            <div class="react-list d-flex flex-wrap gap-6 align-items-center text-center">
                <button class="mdtxt">4 Comments</button>
                <button class="mdtxt">1 Shares</button>
            </div>
        </div>
        <div class="like-comment-share py-5 d-center flex-wrap gap-3 gap-md-0 justify-content-between">
            <button class="d-center gap-1 gap-sm-2 mdtxt">
                <i class="material-symbols-outlined mat-icon"> favorite </i>
                Like
            </button>
            <button class="d-center gap-1 gap-sm-2 mdtxt">
                <i class="material-symbols-outlined mat-icon"> chat </i>
                Comment
            </button>
            <button class="d-center gap-1 gap-sm-2 mdtxt">
                <i class="material-symbols-outlined mat-icon"> share </i>
                Share
            </button>
        </div>
        <form action="#">
            <div class="d-flex mt-5 gap-3">
                <div class="profile-box d-none d-xxl-block">
                    <a href="#"><img src="/images/add-post-avatar.png" class="max-un" alt="icon"></a>
                </div>
                <div class="form-content input-area py-1 d-flex gap-2 align-items-center w-100">
                    <input placeholder="Write a comment..">
                    <div class="file-input d-flex gap-1 gap-md-2">
                        <div class="file-upload">
                            <label class="file">
                                <input type="file">
                                <span class="file-custom border-0 d-grid text-center">
                                    <span class="material-symbols-outlined mat-icon m-0 xxltxt"> gif_box </span>
                                </span>
                            </label>
                        </div>
                        <div class="file-upload">
                            <label class="file">
                                <input type="file">
                                <span class="file-custom border-0 d-grid text-center">
                                    <span class="material-symbols-outlined mat-icon m-0 xxltxt"> perm_media </span>
                                </span>
                            </label>
                        </div>
                        <span class="mood-area">
                            <span class="material-symbols-outlined mat-icon m-0 xxltxt"> mood </span>
                        </span>
                    </div>
                </div>
                <div class="btn-area d-flex">
                    <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                        <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                    </button>
                </div>
            </div>
        </form>
        <div class="comments-area mt-5">
            <div class="single-comment-area ms-1 ms-xxl-15">
                <div class="parent-comment d-flex gap-2 gap-sm-4">
                    <div class="avatar-item d-center align-items-baseline">
                        <img class="avatar-img max-un" src="/images/avatar-3.png" alt="avatar">
                    </div>
                    <div class="info-item active">
                        <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                            <div class="title-area">
                                <h6 class="m-0 mb-3"><a href="public-profile-post.html">Lori Cortez</a></h6>
                                <p class="mdtxt">The only way to solve the problem is to code for the hardware directly</p>
                            </div>
                            <div class="btn-group dropend cus-dropdown">
                                <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                </button>
                                <ul class="dropdown-menu p-4 pt-2">
                                    <li>
                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                            <span>Hide Comments</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                            <i class="material-symbols-outlined mat-icon"> flag </i>
                                            <span>Report Comments</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="like-share d-flex gap-6 mt-2">
                            <li class="d-center">
                                <button class="mdtxt">Like</button>
                            </li>
                            <li class="d-center flex-column">
                                <button class="mdtxt reply-btn">Reply</button>
                            </li>
                            <li class="d-center">
                                <button class="mdtxt">Share</button>
                            </li>
                        </ul>
                        <form action="#" class="comment-form">
                            <div class="d-flex gap-3">
                                <input placeholder="Write a comment.." class="py-3">
                                <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                    <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sibling-comment comment-item-nested single-comment-area mt-7 ms-13 ms-sm-15">
                    <div class="d-flex gap-2 gap-sm-4 align-items-baseline">
                        <div class="avatar-item">
                            <img class="avatar-img max-un" src="/images/avatar-4.png" alt="avatar">
                        </div>
                        <div class="info-item">
                            <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                <div class="title-area">
                                    <h6 class="m-0 mb-3"><a href="public-profile-post.html">Alexa</a></h6>
                                    <p class="mdtxt">The only way to solve the</p>
                                </div>
                                <div class="btn-group dropend cus-dropdown">
                                    <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                <span>Hide Comments</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> flag </i>
                                                <span>Report Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="like-share d-flex gap-6 mt-2">
                                <li class="d-center">
                                    <button class="mdtxt">Like</button>
                                </li>
                                <li class="d-center flex-column">
                                    <button class="mdtxt reply-btn">Reply</button>
                                </li>
                                <li class="d-center">
                                    <button class="mdtxt">Share</button>
                                </li>
                            </ul>
                            <form action="#" class="comment-form">
                                <div class="d-flex gap-3">
                                    <input placeholder="Write a comment.." class="py-3">
                                    <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                        <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="single-comment-area comment-item-nested mt-7 ms-13 ms-sm-15">
                    <div class="d-flex gap-2 gap-sm-4 align-items-baseline">
                        <div class="avatar-item">
                            <img class="avatar-img max-un" src="/images/avatar-7.png" alt="avatar">
                        </div>
                        <div class="info-item">
                            <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                <div class="title-area">
                                    <h6 class="m-0 mb-3"><a href="public-profile-post.html">Haplika</a></h6>
                                    <p class="mdtxt">The only way to solve the</p>
                                </div>
                                <div class="btn-group dropend cus-dropdown">
                                    <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                    </button>
                                    <ul class="dropdown-menu p-4 pt-2">
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                <span>Hide Comments</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                                <i class="material-symbols-outlined mat-icon"> flag </i>
                                                <span>Report Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="like-share d-flex gap-6 mt-2">
                                <li class="d-center">
                                    <button class="mdtxt">Like</button>
                                </li>
                                <li class="d-center flex-column">
                                    <button class="mdtxt reply-btn">Reply</button>
                                </li>
                                <li class="d-center">
                                    <button class="mdtxt">Share</button>
                                </li>
                            </ul>
                            <form action="#" class="comment-form">
                                <div class="d-flex gap-3">
                                    <input placeholder="Write a comment.." class="py-3">
                                    <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                        <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comments-area mt-5">
            <div class="single-comment-area ms-1 ms-xxl-15">
                <div class="d-flex gap-4">
                    <div class="avatar-item d-center align-items-baseline">
                        <img class="avatar-img max-un" src="/images/avatar-3.png" alt="avatar">
                    </div>
                    <div class="info-item w-100">
                        <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                            <div class="title-area">
                                <h6 class="m-0 mb-3"><a href="public-profile-post.html">Marlio</a></h6>
                                <div class="post-img">
                                    <img src="/images/emoji-love-2.png" alt="icon">
                                </div>
                            </div>
                            <div class="btn-group dropend cus-dropdown">
                                <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                </button>
                                <ul class="dropdown-menu p-4 pt-2">
                                    <li>
                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                            <span>Hide Comments</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                            <i class="material-symbols-outlined mat-icon"> flag </i>
                                            <span>Report Comments</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="like-share d-flex gap-6 mt-2">
                            <li class="d-center">
                                <button class="mdtxt">Like</button>
                            </li>
                            <li class="d-center flex-column">
                                <button class="mdtxt reply-btn">Reply</button>
                            </li>
                            <li class="d-center">
                                <button class="mdtxt">Share</button>
                            </li>
                        </ul>
                        <form action="#" class="comment-form">
                            <div class="d-flex gap-3">
                                <input placeholder="Write a comment.." class="py-3">
                                <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                    <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="post-single-box p-3 p-sm-5">
        <div class="top-area pb-5">
            <div class="profile-area d-center justify-content-between">
                <div class="avatar-item d-flex gap-3 align-items-center">
                    <div class="avatar position-relative">
                        <img class="avatar-img max-un" src="/images/avatar-1.png" alt="avatar">
                    </div>
                    <div class="info-area">
                        <h6 class="m-0"><a href="public-profile-post.html">Lori Cortez</a></h6>
                        <span class="mdtxt status">Active</span>
                    </div>
                </div>
                <div class="btn-group cus-dropdown">
                    <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                    </button>
                    <ul class="dropdown-menu p-4 pt-2">
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> bookmark_add </i>
                                <span>Saved Post</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                <span>Unfollow</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                <span>Hide Post</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> lock </i>
                                <span>Block</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> flag </i>
                                <span>Report Post</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="py-4">
                <p class="description">My Travel Video</p>
                <p class="hastag d-flex gap-2">
                    <a href="#">#Viral</a>
                    <a href="#">#travel</a>
                </p>
            </div>
            <div class="post-img video-item">
                <div class="plyr__video-embed player">
                    <iframe src="https://www.youtube.com/embed/LXb3EKWsInQ"></iframe>
                </div>
            </div>
        </div>
        <div class="total-react-share pb-4 d-center gap-2 flex-wrap justify-content-between">
            <div class="friends-list d-flex gap-3 align-items-center text-center">
                <ul class="d-flex align-items-center justify-content-center">
                    <li><img src="/images/avatar-2.png" alt="image"></li>
                    <li><img src="/images/avatar-3.png" alt="image"></li>
                    <li><img src="/images/avatar-4.png" alt="image"></li>
                    <li><span class="mdtxt d-center">8+</span></li>
                </ul>
            </div>
            <div class="react-list d-flex flex-wrap gap-6 align-items-center text-center">
                <button class="mdtxt">4 Comments</button>
                <button class="mdtxt">1 Shares</button>
            </div>
        </div>
        <div class="like-comment-share py-5 d-center flex-wrap gap-3 gap-md-0 justify-content-between">
            <button class="d-center gap-1 gap-sm-2 mdtxt">
                <i class="material-symbols-outlined mat-icon"> favorite </i>
                Like
            </button>
            <button class="d-center gap-1 gap-sm-2 mdtxt">
                <i class="material-symbols-outlined mat-icon"> chat </i>
                Comment
            </button>
            <button class="d-center gap-1 gap-sm-2 mdtxt">
                <i class="material-symbols-outlined mat-icon"> share </i>
                Share
            </button>
        </div>
        <form action="#">
            <div class="d-flex mt-5 gap-3">
                <div class="profile-box d-none d-xxl-block">
                    <a href="#"><img src="/images/add-post-avatar.png" class="max-un" alt="icon"></a>
                </div>
                <div class="form-content input-area py-1 d-flex gap-2 align-items-center w-100">
                    <input placeholder="Write a comment..">
                    <div class="file-input d-flex gap-1 gap-md-2">
                        <div class="file-upload">
                            <label class="file">
                                <input type="file">
                                <span class="file-custom border-0 d-grid text-center">
                                    <span class="material-symbols-outlined mat-icon m-0 xxltxt"> gif_box </span>
                                </span>
                            </label>
                        </div>
                        <div class="file-upload">
                            <label class="file">
                                <input type="file">
                                <span class="file-custom border-0 d-grid text-center">
                                    <span class="material-symbols-outlined mat-icon m-0 xxltxt"> perm_media </span>
                                </span>
                            </label>
                        </div>
                        <span class="mood-area">
                            <span class="material-symbols-outlined mat-icon m-0 xxltxt"> mood </span>
                        </span>
                    </div>
                </div>
                <div class="btn-area d-flex">
                    <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                        <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="post-single-box p-3 p-sm-5">
        <div class="top-area pb-5">
            <div class="profile-area d-center justify-content-between">
                <div class="avatar-item d-flex gap-3 align-items-center">
                    <div class="avatar position-relative">
                        <img class="avatar-img max-un" src="/images/avatar-1.png" alt="avatar">
                    </div>
                    <div class="info-area">
                        <h6 class="m-0"><a href="public-profile-post.html">Lori Cortez</a></h6>
                        <span class="mdtxt status">Active</span>
                    </div>
                </div>
                <div class="btn-group cus-dropdown">
                    <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                    </button>
                    <ul class="dropdown-menu p-4 pt-2">
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> bookmark_add </i>
                                <span>Saved Post</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                <span>Unfollow</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                <span>Hide Post</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> lock </i>
                                <span>Block</span>
                            </a>
                        </li>
                        <li>
                            <a class="droplist d-flex align-items-center gap-2" href="#">
                                <i class="material-symbols-outlined mat-icon"> flag </i>
                                <span>Report Post</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="py-4">
                <p class="description">I created Roughly plugin to sketch crafted hand-drawn elements which can be used to any usage (diagrams/flows/decoration/etc)</p>
            </div>
            <div class="post-img">
                <img src="/images/post-img-1.png" class="w-100" alt="image">
            </div>
        </div>
        <div class="total-react-share pb-4 d-center gap-2 flex-wrap justify-content-between">
            <div class="friends-list d-flex gap-3 align-items-center text-center">
                <ul class="d-flex align-items-center justify-content-center">
                    <li><img src="/images/avatar-2.png" alt="image"></li>
                    <li><img src="/images/avatar-3.png" alt="image"></li>
                    <li><img src="/images/avatar-4.png" alt="image"></li>
                    <li><span class="mdtxt d-center">8+</span></li>
                </ul>
            </div>
            <div class="react-list d-flex flex-wrap gap-6 align-items-center text-center">
                <button class="mdtxt">4 Comments</button>
                <button class="mdtxt">1 Shares</button>
            </div>
        </div>
        <div class="like-comment-share py-5 d-center flex-wrap gap-3 gap-md-0 justify-content-between">
            <button class="d-center gap-1 gap-sm-2 mdtxt">
                <i class="material-symbols-outlined mat-icon"> favorite </i>
                Like
            </button>
            <button class="d-center gap-1 gap-sm-2 mdtxt">
                <i class="material-symbols-outlined mat-icon"> chat </i>
                Comment
            </button>
            <button class="d-center gap-1 gap-sm-2 mdtxt">
                <i class="material-symbols-outlined mat-icon"> share </i>
                Share
            </button>
        </div>
        <form action="#">
            <div class="d-flex mt-5 gap-3">
                <div class="profile-box d-none d-xxl-block">
                    <a href="#"><img src="/images/add-post-avatar.png" class="max-un" alt="icon"></a>
                </div>
                <div class="form-content input-area py-1 d-flex gap-2 align-items-center w-100">
                    <input placeholder="Write a comment..">
                    <div class="file-input d-flex gap-1 gap-md-2">
                        <div class="file-upload">
                            <label class="file">
                                <input type="file">
                                <span class="file-custom border-0 d-grid text-center">
                                    <span class="material-symbols-outlined mat-icon m-0 xxltxt"> gif_box </span>
                                </span>
                            </label>
                        </div>
                        <div class="file-upload">
                            <label class="file">
                                <input type="file">
                                <span class="file-custom border-0 d-grid text-center">
                                    <span class="material-symbols-outlined mat-icon m-0 xxltxt"> perm_media </span>
                                </span>
                            </label>
                        </div>
                        <span class="mood-area">
                            <span class="material-symbols-outlined mat-icon m-0 xxltxt"> mood </span>
                        </span>
                    </div>
                </div>
                <div class="btn-area d-flex">
                    <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                        <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                    </button>
                </div>
            </div>
        </form>
    </div> --}}
@endforeach

@push('incscripts')
<script>
    $(document).ready(function() {
        // like and unlike toggle functionality (OG)
        let likeBtn = $('.newsfeed-like-btn');
        likeBtn.click(function() {
            var button = $(this);
            var postId = button.data('id');
            var likeIcon = button.find('.newsfeed-like-icon');

            // Simulate like/unlike functionality (replace with actual like/unlike logic)
            if (button.hasClass('active')) {
                button.removeClass('active');
                button.html('<i class="material-symbols-outlined mat-icon newsfeed-like-icon"> favorite_border </i> Like');
            } else {
                button.addClass('active');
                button.html('<i class="material-symbols-outlined mat-icon newsfeed-like-icon"> favorite_border </i> Unlike');
            }

            // send an AJAX request to like/unlike the post
            $.ajax({
                url: '/newsfeed/' + postId + '/like-toggle'
                , method: 'POST'
                , headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                , success: function(data) {}
                , error: function(error) {
                    console.error("Error liking the post:", error);

                    if (error.status == 401) {
                        location.href = '/signin'
                    }
                }
            });
        });

        // comment functionality
        let commentToggleBtn = $('button.newsfeed-comments-toggle-btn');
        let commentInput = $('input.newsfeed-comment-input');
        let commentBtn = $('button.newsfeed-comment-btn');

        commentToggleBtn.click(function() {
            var button = $(this);
            var postId = button.data('post_id');
            var commentInput = $('input.newsfeed-comment-input[data-post_id="' + postId + '"]');
            var commentContainer = $('div.newsfeed-comments-container[data-post_id="' + postId + '"]');

            commentInput.focus();
            commentContainer.removeClass('d-none');
        });

        // commentInput.keypress(function(e) {
        //     if (e.key == "Enter") {
        //         e.preventDefault();
        //         var input = $(this);
        //         var postId = input.data('post_id');

        //         saveComment(input.val(), postId);
        //     }
        // });

        commentBtn.click(function(e) {
            e.preventDefault();
            var button = $(this);
            var postId = button.data('post_id');
            var comment = $('input.newsfeed-comment-input[data-post_id="' + postId + '"]');

            saveComment(comment.val(), postId)
        })

        // reply functionality
        let replyBtn = $('button.newsfeed-reply-btn');
        replyBtn.click(function(e) {
            e.preventDefault();
            var button = $(this);
            var postId = button.data('post_id');
            var commentId = button.data('comment_id');
            var reply = $('input.newsfeed-reply-input[data-comment_id="' + commentId + '"]');

            saveReply(reply.val(), postId, commentId);
        })


        function saveComment(body, postId) {
            var commentContainer = $('div.newsfeed-comments-container[data-post_id="' + postId + '"]');

            if (body.trim() == '') return false;

            // send an AJAX request to comment on the post
            $.ajax({
                url: '/newsfeed/' + postId + '/comment'
                , method: 'POST'
                , data: {
                    comment: body
                }
                , headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                , success: function(data) {
                    $('input.newsfeed-comment-input[data-post_id="' + postId + '"]').val('');

                    var comment = `
                        <div class="comments-area mt-5">
                            <div class="single-comment-area ms-1 ms-xxl-15">
                                <div class="d-flex gap-4">
                                    <div class="avatar-item d-center align-items-baseline">
                                        <img class="avatar-img max-un" src="${data.comment.user.avatar}" alt="avatar">
                                    </div>
                                    <div class="info-item w-100">
                                        <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                            <div class="title-area">
                                                <h6 class="m-0 mb-3"><a href="public-profile-post.html">${data.comment.user.first_name}</a></h6>
                                                <p class="mdtxt">${data.comment.body}</p>
                                            </div>
                                            <div class="btn-group dropend cus-dropdown">
                                                <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide Comments</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> flag </i>
                                                            <span>Report Comments</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="like-share d-flex gap-6 mt-2">
                                            <ul class="like-share d-flex gap-6 mt-2">
                                                <li class="d-center">
                                                    <button class="mdtxt">Like</button>
                                                </li>
                                                <li class="d-center flex-column">
                                                    <button class="mdtxt reply-btn">Reply</button>
                                                </li>
                                                <li class="d-center">
                                                    <button class="mdtxt">Share</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                    commentContainer.prepend(comment);
                    commentContainer.removeClass('d-none');

                    console.log("Comment saved successfully:", data);
                }
                , error: function(error) {
                    console.error("Error liking the post:", error);
                }
            });
        }

        function saveReply(body, postId, commentId) {
            var replyContainer = $('div.newsfeed-replies-container[data-comment_id="' + commentId + '"]');

            if (body.trim() == '') return false;

            // send an AJAX request to comment on the post
            $.ajax({
                url: '/newsfeed/' + postId + '/comment/' + commentId + '/reply'
                , method: 'POST'
                , data: {
                    reply: body
                }
                , headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                , success: function(data) {
                    $('input.newsfeed-reply-input[data-comment_id="' + commentId + '"]').val('');

                    var reply = `
                        <div class="comments-area mt-5">
                            <div class="single-comment-area ms-1 ms-xxl-15">
                                <div class="d-flex gap-4">
                                    <div class="avatar-item d-center align-items-baseline">
                                        <img class="avatar-img max-un" src="${data.reply.user.avatar}" alt="avatar">
                                    </div>
                                    <div class="info-item w-100">
                                        <div class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                            <div class="title-area">
                                                <h6 class="m-0 mb-3"><a href="public-profile-post.html">${data.reply.user.first_name}</a></h6>
                                                <p class="mdtxt">${data.reply.body}</p>
                                            </div>
                                            <div class="btn-group dropend cus-dropdown">
                                                <button type="button" class="dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                                </button>
                                                <ul class="dropdown-menu p-4 pt-2">
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                            <span>Hide Comments</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                                            <i class="material-symbols-outlined mat-icon"> flag </i>
                                                            <span>Report Comments</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="like-share d-flex gap-6 mt-2">
                                            <ul class="like-share d-flex gap-6 mt-2">
                                                <li class="d-center">
                                                    <button class="mdtxt">Like</button>
                                                </li>
                                                <li class="d-center flex-column">
                                                    <button class="mdtxt reply-btn">Reply</button>
                                                </li>
                                                <li class="d-center">
                                                    <button class="mdtxt">Share</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                    replyContainer.prepend(reply);
                    replyContainer.removeClass('d-none');

                    console.log("Reply saved successfully:", data);
                }
                , error: function(error) {
                    console.error("Error liking the post:", error);
                }
            });
        }
    });

</script>
@endpush