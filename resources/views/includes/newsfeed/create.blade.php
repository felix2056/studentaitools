<div class="share-post d-flex gap-3 gap-sm-5 p-3 p-sm-5">
    <div class="profile-box">
        @auth
        <a href="#">
            <img src="{{ Auth::user()->avatar }}" class="max-un" alt="icon">
        </a>
        @else
        <a href="{{ route('auth.signin') }}">
            <img src="/images/add-post-avatar.png" class="max-un" alt="icon">
        </a>
        @endauth
    </div>

    <form action="{{ route('newsfeed.post.create') }}" class="newsfeed-form w-100 position-relative" method="POST" enctype="multipart/form-data">
        @csrf
        <textarea name="content" cols="10" rows="2" placeholder="Write something on Student AI Tools. Hit ENTER to post.."></textarea>

        <div class="newsfeed-link-preview file-upload mb-5 d-none">
            <label class="file mt-1">
                <span class="link-custom pt-8 pb-8 d-grid text-center">
                    <a href="#" target="_blank" class="link-url row d-flex gap-3">
                        <div class="col-12 post-img">
                            <img src="https://via.placeholder.com/150" class="link-img max-un w-100" alt="image">
                        </div>
                        <div class="col-12 text-area">
                            <h6 class="link-title m-0">Link Title</h6>
                            <p class="link-desc mdtxt">Link Description</p>
                        </div>
                    </a>
                </span>
            </label>
        </div>

        <div class="newsfeed-images-preview file-upload mb-5 d-none">
            <!-- <label class="row file mt-1">
                <div class="col-4 post-img mb-2">
                    <img src="https://via.placeholder.com/150" class="max-un w-100" alt="image">
                </div>
            </label> -->
        </div>

        <div class="newsfeed-youtube-preview file-upload mb-5 d-none">
            <label class="file mt-1">
                <div class="post-img video-item">
                    <div class="plyr__video-embed player">
                        <iframe src="javascript:;" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </label>
        </div>
        
        <div class="abs-area position-absolute d-none d-sm-block">
            <i class="material-symbols-outlined mat-icon xxltxt"> sentiment_satisfied </i>
        </div>
        
        <ul class="link-area d-flex justify-content-between flex-wrap mt-3 gap-3">
            <li class="d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#linkMod">
                <img src="/images/link.png" class="max-un" alt="icon">
                <span>Link</span>

                <input type="hidden" name="link">
                <input type="hidden" name="link_title">
                <input type="hidden" name="link_desc">
                <input type="hidden" name="link_img">
            </li>
            <li class="images-area d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#imageMod">
                <img src="/images/vgallery.png" class="max-un" alt="icon">
                <span>Image</span>

                <!-- to be replaced by clonedFileInput -->
                {{-- <input type="file" name="images[]" class="images d-none" multiple max="4" accept="image/*"> --}}
            </li>
            <li class="youtube-area d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#youtubeMod">
                <img src="/images/youtube.png" class="max-un" alt="icon">
                <span>Video</span>

                <input type="hidden" name="youtube">
            </li>
            {{-- <li class="d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#goLiveMod">
                <img src="/images/live-video.png" class="max-un" alt="icon">
                <span>Live</span>
            </li> --}}
            {{-- <li class="d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#photoVideoMod">
                <img src="/images/vgallery.png" class="max-un" alt="icon">
                <span>Photo/Video</span>
            </li> --}}
            {{-- <li class="d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#activityMod">
                <img src="/images/emoji-laughing.png" class="max-un" alt="icon">
                <span>Fallings/Activity</span>
            </li> --}}
        </ul>
    </form>
</div>

@push('incscripts')
<script>
    $(document).ready(function() {
        let form = $('form.newsfeed-form');
        let content = form.find('textarea[name="content"]');
        
        // on enter press, submit form
        content.keypress(function(e) {
            if (e.which == 13) {
                e.preventDefault();

                if (content.val().trim() != '') {
                    form.submit();
                }
            }
        });
    });
</script>
@endpush