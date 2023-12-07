@extends('layouts.app')

@section('title', 'Submit Tool')

@section('content')
<main>
    <!-- ==== banner start ==== -->
    <section class="cmn-banner" data-background="/images/cmn-bg.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xxl-8">
                    <div class="cmn-banner__content text-center">
                        <h2 class="light-title fw-7 text-white title-animation">Submit Tool</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="thumb-left">
            <img src="/images/cmn-thumb-left.png" alt="Image">
        </div>
        <div class="thumb-right">
            <img src="/images/cmn-thumb-right.png" alt="Image">
        </div>
    </section>
    <!-- ==== / banner end ==== -->

    <!-- ==== tool submit start ==== -->
    <section class="section m-contact fade-wrapper">
        <div class="container">
            <div class="case-details__reviews">
                <div class="row gaper align-items-center">
                    <div class="col-12 col-lg-6 col-xl-6">
                        <div class="m-contact__form">
                            <h3 class="title-animation fw-7 text-white mt-12">Quickly submit your student AI tool to be featured.</h3>
                            <form action="#" method="post">
                                <div class="input-single">
                                    <input type="text" name="tool_name" id="tName" placeholder="Tool Name" required="">
                                </div>
                                <div class="input-single">
                                    <input type="url" name="tool_website" id="tWebsite" placeholder="Tool Website URL" required="">
                                </div>
                                <div class="input-single">
                                    <textarea name="tool_description" id="tDescription" cols="30" rows="10" placeholder="Describe your tool"></textarea>
                                </div>
                                <div class="section__content-cta text-center">
                                    <button type="submit" class="btn btn--primary">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <div class="m-contact__thumb reveal-img parallax-img">
                            <img src="/images/thumb_1.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / tool submit end ==== -->

    <div>
        <div class="container">
            <hr class="horizon">
        </div>
    </div>
</main>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.tWebsite').on('input', function() {
                var url = $(this).val();
                if (url.length > 0) {
                    // validate url
                    var regex = /^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}/;
                    if (regex.test(url)) {
                        // navigate to url and screenshot it
                        $.ajax({
                            url: '/tools/screenshot',
                            type: 'POST',
                            data: {
                                '_token': '{{ csrf_token() }}',
                                'url': url
                            },
                            success: function(data) {
                                if (data.success) {
                                    $('.tWebsite').css('background-image', 'url(' + data.image + ')');
                                }
                            }
                        });
                    }
                }
            });
        });
    </script>
@endsection
