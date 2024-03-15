<style>
    .dragover {
        border: 2px dashed #007bff;
        background-color: #f0f0f0;
    }
</style>

<!-- link popup start -->
<div class="go-live-popup video-popup">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="modal cmn-modal fade" id="linkMod">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content p-5">
                            <div class="modal-header justify-content-center">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="material-symbols-outlined mat-icon xxltxt"> close </i>
                                </button>
                            </div>

                            <div class="top-content pb-5">
                                <h5>Add link</h5>
                            </div>
                            
                            <div class="mid-area">
                                <div class="d-flex mb-5 gap-3">
                                    <div class="profile-box">
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
                                    <textarea name="link" cols="10" rows="2" placeholder="Paste a link.."></textarea>
                                </div>

                                <div class="link-preview file-upload d-none">
                                    <label class="file mt-1">
                                        <span class="link-custom pt-8 pb-8 d-grid text-center">
                                            <a href="#" target="_blank" class="row d-flex gap-3">
                                                <div class="col-12 post-img">
                                                    <img src="https://via.placeholder.com/150" class="link-img max-un w-100" alt="image">
                                                </div>
                                                <div class="col-12 text-area">
                                                    <h6 class="link-title m-0">Link Title</h6>
                                                    <p class="link-desc mdtxt">Link Description</p>
                                                </div>
                                            </a>
                                        </span>
                                        <p class="badge bg-danger d-none">Invalid link</p>
                                    </label>
                                </div>
                                <div class="link-preview-loader text-center d-none">
                                    <i class="material-symbols-outlined mat-icon"> autorenew </i>
                                </div>
                            </div>

                            <div class="footer-area pt-5">
                                <div class="btn-area d-flex justify-content-end gap-2">
                                    <button type="button" class="cmn-btn alt" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button class="add-link-btn cmn-btn">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- link popup end -->

<!-- image popup start -->
<div class="go-live-popup video-popup">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="modal cmn-modal fade" id="imageMod">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content p-5">
                            <div class="modal-header justify-content-center">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="material-symbols-outlined mat-icon xxltxt"> close </i>
                                </button>
                            </div>
                            <div class="top-content pb-5">
                                <h5>Add images</h5>
                            </div>
                            <div class="mid-area">
                                <div class="file-upload">
                                    <label>Upload images</label>
                                    <label class="file mt-1">
                                        <input type="file" name="images[]" multiple max="4" accept="image/*">
                                        <span class="image-dropzone file-custom pt-8 pb-8 d-grid text-center">
                                            <i class="material-symbols-outlined mat-icon"> perm_media </i>
                                            <span>Drag here or click to upload image.</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="footer-area pt-5">
                                <div class="btn-area d-flex justify-content-end gap-2">
                                    <button type="button" class="cmn-btn alt" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button class="cmn-btn">Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- image popup end -->

<!-- youtube popup start -->
<div class="go-live-popup video-popup">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="modal cmn-modal fade" id="youtubeMod">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content p-5">
                            <div class="modal-header justify-content-center">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="material-symbols-outlined mat-icon xxltxt"> close </i>
                                </button>
                            </div>
                            <div class="top-content pb-5">
                                <h5>Add Youtube Video</h5>
                            </div>
                            <div class="mid-area">
                                <div class="d-flex mb-5 gap-3">
                                    <div class="profile-box">
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
                                    <textarea name="youtube" cols="10" rows="2" placeholder="Paste youtube video link.."></textarea>
                                </div>

                                <div class="youtube-preview file-upload d-none">
                                    <label>Youtube preview</label>
                                    <label class="file mt-1">
                                        <div class="post-img video-item">
                                            <div class="plyr__video-embed player">
                                                <iframe src="#" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <p class="badge bg-danger d-none">Invalid youtube link</p>
                                    </label>
                                </div>
                                <div class="youtube-preview-loader text-center d-none">
                                    <i class="material-symbols-outlined mat-icon"> autorenew </i>
                                </div>
                            </div>
                            <div class="footer-area pt-5">
                                <div class="btn-area d-flex justify-content-end gap-2">
                                    <button type="button" class="cmn-btn alt" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button class="add-youtube-btn cmn-btn">Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- youtube popup end -->

<!-- Go Live Popup start -->
<div class="go-live-popup">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="modal cmn-modal fade" id="goLiveMod">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content p-5">
                            <div class="modal-header justify-content-center">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="material-symbols-outlined mat-icon xxltxt"> close </i>
                                </button>
                            </div>
                            <div class="top-content pb-5">
                                <h5>Go Live</h5>
                            </div>
                            <div class="mid-area">
                                <div class="d-flex mb-5 gap-3">
                                    <div class="profile-box">
                                        <a href="#"><img src="/images/add-post-avatar.png" class="max-un"
                                                alt="icon"></a>
                                    </div>
                                    <textarea cols="10" rows="2"
                                        placeholder="Write something to Lerio.."></textarea>
                                </div>
                                <div class="file-upload">
                                    <label>Upload attachment</label>
                                    <label class="file mt-1">
                                        <input type="file">
                                        <span class="file-custom pt-8 pb-8 d-grid text-center">
                                            <i class="material-symbols-outlined mat-icon"> perm_media </i>
                                            <span>Drag here or click to upload photo.</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="footer-area pt-5">
                                <div class="btn-area d-flex justify-content-end gap-2">
                                    <button type="button" class="cmn-btn alt" data-bs-dismiss="modal"
                                        aria-label="Close">Cancel</button>
                                    <button class="cmn-btn">Go Live</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Go Live Popup end -->

<!-- video popup start -->
<div class="go-live-popup video-popup">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="modal cmn-modal fade" id="photoVideoMod">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content p-5">
                            <div class="modal-header justify-content-center">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="material-symbols-outlined mat-icon xxltxt"> close </i>
                                </button>
                            </div>
                            <div class="top-content pb-5">
                                <h5>Add post photo/video</h5>
                            </div>
                            <div class="mid-area">
                                <div class="d-flex mb-5 gap-3">
                                    <div class="profile-box">
                                        <a href="#"><img src="/images/add-post-avatar.png" class="max-un"
                                                alt="icon"></a>
                                    </div>
                                    <textarea cols="10" rows="2"
                                        placeholder="Write something to Lerio.."></textarea>
                                </div>
                                <div class="file-upload">
                                    <label>Upload attachment</label>
                                    <label class="file mt-1">
                                        <input type="file">
                                        <span class="file-custom pt-8 pb-8 d-grid text-center">
                                            <i class="material-symbols-outlined mat-icon"> perm_media </i>
                                            <span>Drag here or click to upload photo.</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="footer-area pt-5">
                                <div class="btn-area d-flex justify-content-end gap-2">
                                    <button type="button" class="cmn-btn alt" data-bs-dismiss="modal"
                                        aria-label="Close">Cancel</button>
                                    <button class="cmn-btn">Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- video popup end -->

<!-- Go Live Popup start -->
<div class="go-live-popup">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="modal cmn-modal fade" id="activityMod">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content p-5">
                            <div class="modal-header justify-content-center">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="material-symbols-outlined mat-icon xxltxt"> close </i>
                                </button>
                            </div>
                            <div class="top-content pb-5">
                                <h5>Create post</h5>
                            </div>
                            <div class="mid-area">
                                <div class="d-flex mb-5 gap-3">
                                    <div class="profile-box">
                                        <a href="#"><img src="/images/add-post-avatar.png" class="max-un"
                                                alt="icon"></a>
                                    </div>
                                    <textarea cols="10" rows="2"
                                        placeholder="Write something to Lerio.."></textarea>
                                </div>
                                <div class="file-upload">
                                    <label>Upload attachment</label>
                                    <label class="file mt-1">
                                        <input type="file">
                                        <span class="file-custom pt-8 pb-8 d-grid text-center">
                                            <i class="material-symbols-outlined mat-icon"> perm_media </i>
                                            <span>Drag here or click to upload photo.</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="tooltips-area d-flex mt-3 gap-2">
                                    <button type="button" class="btn d-center" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Fallings/Activity">
                                        <i class="material-symbols-outlined mat-icon"> mood </i>
                                    </button>
                                    <button type="button" class="btn d-center" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Video">
                                        <i class="material-symbols-outlined mat-icon"> movie </i>
                                    </button>
                                    <button type="button" class="btn d-center" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Maps">
                                        <i class="material-symbols-outlined mat-icon"> location_on </i>
                                    </button>
                                    <button type="button" class="btn d-center" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Tag">
                                        <i class="material-symbols-outlined mat-icon"> sell </i>
                                    </button>
                                </div>
                            </div>
                            <div class="footer-area d-flex justify-content-between pt-5">
                                <div class="left-area">
                                    <select>
                                        <option value="1">Public</option>
                                        <option value="2">Only Me</option>
                                        <option value="3">Friends</option>
                                        <option value="4">Custom</option>
                                    </select>
                                </div>
                                <div class="btn-area d-flex justify-content-end gap-2">
                                    <button type="button" class="cmn-btn alt" data-bs-dismiss="modal"
                                        aria-label="Close">Cancel</button>
                                    <button class="cmn-btn">Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Go Live Popup end -->

<!-- Share Popup start -->
<div class="go-live-popup">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="modal cmn-modal fade" id="shareMod">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content p-5">
                            <div class="modal-header justify-content-center">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="material-symbols-outlined mat-icon xxltxt"> close </i>
                                </button>
                            </div>
                            <div class="top-content pb-5">
                                <h5>Share</h5>
                            </div>
                            <div class="mid-area">
                                <div class="file-upload">
                                    <label>Select platform to share</label>
                                    <div class="d-flex gap gap-3">
                                        <button type="button" class="btn d-center">
                                            <i class="material-symbols-outlined mat-icon"> facebook </i>
                                        </button>
                                        <button type="button" class="btn d-center">
                                            <i class="material-symbols-outlined mat-icon"> twitter </i>
                                        </button>
                                        <button type="button" class="btn d-center">
                                            <i class="material-symbols-outlined mat-icon"> linkedin </i>
                                        </button>
                                        <button type="button" class="btn d-center">
                                            <i class="material-symbols-outlined mat-icon"> whatsapp </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Share Popup end -->

@push('incscripts')
<script>
    $(document).ready(function() {
        // handle paste link on link modal
        $('#linkMod').on('shown.bs.modal', function() {
            $('textarea[name="link"]').focus();

            $('textarea[name="link"]').on('input', function() {
                var self = $(this);
                setTimeout(function() {
                    var link = self.val();

                    // validate link as url
                    if (!isValidURL(link)) {
                        self.closest('.mid-area').find('.link-preview .badge').removeClass('d-none');
                        return;
                    }

                    fetchLinkPreview(link, self);
                }, 100);
            });

            $('button.add-link-btn').on('click', function() {
                let link = $('textarea[name="link"]');
                var linkPreview = link.closest('.mid-area').find('.link-preview');
                var linkCustom = linkPreview.find('.link-custom');

                let linkImg = linkCustom.find('.link-img');
                let linkTitle = linkCustom.find('.link-title');
                let linkDesc = linkCustom.find('.link-desc');

                if (linkTitle === '' || linkDesc === '') {
                    alert('Invalid link');
                    return;
                }

                // store data in hidden input
                $('input[name="link"]').val(link.val());
                $('input[name="link_img"]').val(linkImg.attr('src'));
                $('input[name="link_title"]').val(linkTitle.text());
                $('input[name="link_desc"]').val(linkDesc.text());

                // show the link preview under newsfeed input
                let newsfeed_link_url = $('.newsfeed-link-preview .link-url');
                let newsfeed_link_title = $('.newsfeed-link-preview .link-title');
                let newsfeed_link_desc = $('.newsfeed-link-preview .link-desc');
                let newsfeed_link_img = $('.newsfeed-link-preview .link-img');

                newsfeed_link_url.attr('href', link.val());
                newsfeed_link_title.text(linkTitle.text());
                newsfeed_link_desc.text(linkDesc.text());
                newsfeed_link_img.attr('src', linkImg.attr('src'));
                $('.newsfeed-link-preview').removeClass('d-none');

                // hide link modal
                $('#linkMod').modal('hide');
            });
        });

        // handle paste youtube link on youtube modal
        $('#youtubeMod').on('shown.bs.modal', function() {
            $('textarea[name="youtube"]').focus();

            $('textarea[name="youtube"]').on('input', function() {
                var self = $(this);
                setTimeout(function() {
                    var youtube = self.val();

                    // validate link as url
                    if (!isValidYoutubeURL(youtube)) {
                        self.closest('.mid-area').find('.youtube-preview .badge').removeClass('d-none');
                        return;
                    }

                    fetchYoutubePreview(youtube, self);
                }, 100);
            });

            $('button.add-youtube-btn').on('click', function() {
                let youtube = $('textarea[name="youtube"]');
                if (youtube === '') {
                    alert('Invalid youtube link');
                    return;
                }

                // store data in hidden input
                $('input[name="youtube"]').val(youtube.val());

                // show the youtube preview under newsfeed input
                let newsfeed_youtube_iframe = $('.newsfeed-youtube-preview iframe');

                newsfeed_youtube_iframe.attr('src', youtube.val().replace('watch?v=', 'embed/'));
                $('.newsfeed-youtube-preview').removeClass('d-none');

                // hide youtube modal
                $('#youtubeMod').modal('hide');
            });
        });

        // handle images drag, drop and click
        $('#imageMod').on('shown.bs.modal', function() {
            let fileInput = $('#imageMod input[type="file"]')
            fileInput.change(function() {

            });

            let dropzone = $('#imageMod .image-dropzone')
            dropzone.on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
                e.preventDefault();
                e.stopPropagation();

                if (e.type === 'dragover' || e.type === 'dragenter') {
                    dropzone.addClass('dragover');
                } else {
                    dropzone.removeClass('dragover');
                }

                if (e.type === 'drop') {
                    let files = e.originalEvent.dataTransfer.files;
                    handleFiles(files);
                }
            })
        });

        function isValidURL(url) {
            // regular expression for validating URL
            var urlRegex = /(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/;
            return url.match(urlRegex);
        }

        function isValidYoutubeURL(url) {
            // regular expression for validating youtube URL
            var youtubeRegex = /^(https?\:\/\/)?(www\.)?(youtube\.com|youtu\.?be)\/.+$/
            return url.match(youtubeRegex);
        }

        function fetchLinkPreview(url, textarea) {
            // show loader
            textarea.closest('.mid-area').find('.link-preview-loader').removeClass('d-none');

            // AJAX request to fetch URL preview
            $.ajax({
                url: 'https://api.linkpreview.net',
                dataType: 'jsonp',
                data: { q: url, key: "2f6891cf2fb01285939f0b6996296c3d", fields: "image, title, description" },
                success: function(response) {
                    // hide loader
                    textarea.closest('.mid-area').find('.link-preview-loader').addClass('d-none');

                    var linkPreview = textarea.closest('.mid-area').find('.link-preview');
                    var linkCustom = linkPreview.find('.link-custom');
                    var linkImg = linkCustom.find('.link-img');
                    var linkTitle = linkCustom.find('.link-title');
                    var linkDesc = linkCustom.find('.link-desc');
                    var linkBadge = linkPreview.find('.badge');

                    if (response.error) {
                        linkBadge.removeClass('d-none');
                        return;
                    }

                    linkBadge.addClass('d-none');
                    linkCustom.attr('href', url);
                    linkImg.attr('src', response.image);
                    linkTitle.text(response.title);
                    linkDesc.text(response.description);
                    linkPreview.removeClass('d-none');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching URL preview:', error);
                }
            });
        }

        function fetchYoutubePreview(url, textarea) {
            // show loader
            textarea.closest('.mid-area').find('.youtube-preview-loader').removeClass('d-none');

            // convert youtube link to embed link
            var youtubeEmbedLink = url.replace('watch?v=', 'embed/');

            let iframe = textarea.closest('.mid-area').find('.youtube-preview .video-item iframe');
            iframe.attr('src', youtubeEmbedLink);

            // wait 3 seconds
            setTimeout(function() {
                // hide loader
                textarea.closest('.mid-area').find('.youtube-preview-loader').addClass('d-none');

                // show youtube preview
                textarea.closest('.mid-area').find('.youtube-preview').removeClass('d-none');
            }, 3000);
        }

        function handleFiles(files) {
            if (files.length > 0) {
                let container = document.createElement('div');
                container.className = 'container position-relative mt-2';

                let row = document.createElement('div');
                row.className = 'row';

                for (let i = 0; i < files.length; i++) {
                    let file = files[i];
                    let reader = new FileReader();

                    reader.onload = function(e) {
                        let col = document.createElement('div');
                        col.className = 'col-4 mt-2';

                        let img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'w-100 h-100 object-fit-cover';
                        img.alt = 'image';
                        
                        col.appendChild(img);
                        row.appendChild(col);
                    }

                    reader.readAsDataURL(file);
                }

                container.appendChild(row);
                $('#imageMod .image-dropzone').append(container);
            }
        }
    });
</script>
@endpush