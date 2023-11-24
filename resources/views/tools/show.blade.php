@extends('layouts.app')

@section('title', $tool->name)

@section('content')
<main>
    <!-- ==== banner start ==== -->
    <section class="cmn-banner" data-background="/images/cmn-bg.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xxl-8">
                    <div class="cmn-banner__content text-center">
                        <h2 class="light-title fw-7 text-white title-animation">{{ $tool->name }}</h2>
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

    <!-- ==== case study details start ==== -->
    <section class="section case-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="case-details__inner">
                        <div class="poster-img mb-0 slide-top">
                            <img src="{{ $tool->screenshot1 }}" alt="Image">
                        </div>
                        <div class="case-details-meta">
                            <div class="row gaper align-items-center">
                                <div class="col-12 col-xl-5">
                                    <div class="case-meta-left">
                                        <h2 class="title-animation fw-7 text-white">{{ $tool->name }}</h2>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7">
                                    <div class="case-meta-right justify-content-start justify-content-xl-end">
                                        <div class="case-meta-single">
                                            <p class="tertiary-text text-primary">Category</p>
                                            <h5 class="fw-6 text-white">AI</h5>
                                        </div>
                                        <span class="line"></span>
                                        <div class="case-meta-single">
                                            <p class="tertiary-text text-primary">Pricing</p>
                                            <h5 class="fw-6 text-white">{{ $tool->pricing }}</h5>
                                        </div>
                                        {{-- <span class="line"></span>
                                        <div class="case-meta-single">
                                            <p class="tertiary-text text-primary">Service</p>
                                            <h5 class="fw-6 text-white">AI</h5>
                                        </div> --}}
                                        <span class="line"></span>
                                        <div class="case-meta-single">
                                            <p class="tertiary-text text-primary">Website</p>
                                            <h5 class="fw-6 text-white">
                                                <a href="{{ $tool->link }}" target="_blank">
                                                    {{ $tool->domain }}
                                                    <i class="bi bi-box-arrow-up-right" style="font-size: 20px"></i>
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="case-details__content">
                            <div class="row gaper">
                                <div class="col-12 col-lg-2">
                                    <div class="case-d-content-left">
                                        <p class="tertiary-text text-white">Share</p>
                                        <div class="social">
                                            <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook" title="facebook">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a href="https://www.twitter.com/" target="_blank" aria-label="share us on twitter" title="twitter">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                            <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on pinterest" title="linkedin">
                                                <i class="bi bi-linkedin"></i>
                                            </a>
                                            <a href="https://www.instagram.com/" target="_blank" aria-label="share us on instagram" title="instagram">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-10">
                                    <div class="case-d-content-right">
                                        {!! $tool->content !!}

                                        <div class="text-group">
                                            <div class="img-group fade-wrapper">
                                                <div class="poster-img mb-0 fade-top">
                                                    <img src="{{ $tool->screenshot1 }}" alt="Image">
                                                </div>
                                                <div class="poster-img mb-0 fade-top">
                                                    <img src="{{ $tool->screenshot2 }}" alt="Image">
                                                </div>
                                                <div class="poster-img mb-0 fade-top">
                                                    <img src="{{ $tool->screenshot3 }}" alt="Image">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="text-group">
                                            <div class="quote-group">
                                                <img src="/images/quote.png" alt="Image">
                                                <div class="content">
                                                    <q class="primary-text text-white">And the day came when the risk to
                                                        remain tight in a bud was more painful than the risk it took to
                                                        blossom.</q>
                                                    <p class="tertiary-text">Alen Marlo</p>
                                                </div>
                                            </div>
                                            <p>Prepare to embark on thrilling adventures, engage in strategic battles,
                                                and explore captivating narratives, all enriched by the seamless
                                                integration of artificial intelligence. Our commitment to innovation and
                                                cutting-edge technology ensures that each gaming experience is tailored
                                                to your preferences</p>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / case study details end ==== -->

    <!-- ==== tool reviews start ==== -->
    <section class="section pb-0 p-details">
        <div class="container">
            <div class="case-details__reviews">
                <div class="row gaper align-items-center">
                    <div class="col-12">
                        <div class="p-details__tab">
                            <div class="p-details__tab-btn">
                                <button data-target="#pReview" class="p-d-t-btn p-d-t-btn-active">Reviews</button>
                                <button data-target="#pAuthor" class="p-d-t-btn">Owners / Devs</button>
                            </div>
                            <div class="p-d-t-wrapper">
                                <div class="p-details__tab-single" id="pReview">
                                    <div class="review-content">
                                        <div class="row">
                                            <div class="col-12 col-xl-9">
                                                <div class="b-comment__wrapper">
                                                    <div class="b-comment-single">
                                                        <div class="thumb">
                                                            <img src="/images/a-one.png" alt="Image">
                                                        </div>
                                                        <div class="content">
                                                            <div class="intro">
                                                                <h4 class="text-white">Alen</h4>
                                                                <span class="tertiary-text">05 day ago</span>
                                                            </div>
                                                            <p>Dui id ornare arcu odio ut. Mi quis hendrerit dolor magna eget
                                                                est lorem. Quisque sagittis purus sit amet volutpat consequat
                                                                mauris. Convallis convallis tellus id interdum velit laoreet id
                                                                donec ultrices.</p>
                                                            <div class="content-meta">
                                                                <button class="open-reply">
                                                                    Reply
                                                                </button>
                                                                <a href="index.html">
                                                                    Share
                                                                    <span class="material-symbols-outlined">
                                                                        send
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="reply-box-wrapper">
                                                                <div class="reply-box">
                                                                    <img src="/images/a-one.png" alt="Image">
                                                                    <input type="text" name="reply-me" id="remplyMe" placeholder="Join the discussion" required="">
                                                                    <button>
                                                                        <span class="material-symbols-outlined">
                                                                            send
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="b-comment-single">
                                                        <div class="thumb">
                                                            <img src="/images/a-two.png" alt="Image">
                                                        </div>
                                                        <div class="content">
                                                            <div class="intro">
                                                                <h4 class="text-white">Melina</h4>
                                                                <span class="tertiary-text">05 day ago</span>
                                                            </div>
                                                            <p>Dui id ornare arcu odio ut. Mi quis hendrerit dolor magna eget
                                                                est lorem. Quisque sagittis purus sit amet volutpat consequat
                                                                mauris. Convallis convallis tellus id interdum velit laoreet id
                                                                donec ultrices.</p>
                                                            <div class="content-meta">
                                                                <button class="open-reply">
                                                                    Reply
                                                                </button>
                                                                <a href="index.html">
                                                                    Share
                                                                    <span class="material-symbols-outlined">
                                                                        send
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="reply-box-wrapper">
                                                                <div class="reply-box">
                                                                    <img src="/images/a-two.png" alt="Image">
                                                                    <input type="text" name="reply-meTwo" id="remplyMeTwo" placeholder="Join the discussion" required="">
                                                                    <button>
                                                                        <span class="material-symbols-outlined">
                                                                            send
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-comment">
                                                    <h3 class="fw-7 title-animation text-white">Write a comment</h3>
                                                    <form action="#" method="post">
                                                        {{-- <div class="input-group">
                                                            <div class="input-single">
                                                                <input type="text" name="a-name" id="aName" placeholder="Your Name" required="">
                                                            </div>
                                                            <div class="input-single">
                                                                <input type="email" name="a-email" id="aemail" placeholder="Your Email" required="">
                                                            </div>
                                                        </div> --}}
                                                        <div class="input-single">
                                                            <textarea name="a-comment" id="aComment" cols="30" rows="10" placeholder="Let people know what you think about {{ $tool->name }}" required=""></textarea>
                                                        </div>
                                                        <div class="section__content-cta">
                                                            <button type="submit" class="btn btn--primary">Submit Now</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-details__tab-single author-content" id="pAuthor">
                                    <div class="thumb">
                                        <img src="{{ $tool->user->avatar }}" alt="{{ $tool->user->name }}">
                                    </div>
                                    <div class="content">
                                        <h4>{{ '@' . $tool->user->first_name }}</h4>'
                                        <p class="tertiary-text">Product: 24</p>
                                        <p class="tertiary-text">Review: 4.5/5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / tool reviews end ==== -->

    <div>
        <div class="container">
            <hr class="horizon">
        </div>
    </div>

    <!-- ==== related product start ==== -->
    <section class="section new-prompts fade-wrapper" data-background="/images/s-j-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__header--secondary">
                        <div class="row align-items-center gaper">
                            <div class="col-12 col-lg-8">
                                <div class="section__header mb-0 text-center text-lg-start">
                                    <h2 class="title mt-12 title-animation">Related Student Tools</h2>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="text-center text-lg-end">
                                    <a href="shop.html" class="btn btn--primary">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gaper">
                @foreach (App\Models\Tool::inRandomOrder()->limit(3)->get() as $tool)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="category__single fade-top">
                        <div class="thumb">
                            <a href="{{ route('tools.show', $tool->slug) }}" target="_blank" class="thumb-img">
                                <img src="{{ $tool->screenshot1 }}" alt="Image">
                            </a>
                            <a href="shop.html" class="tag">
                                <img src="/images/chat.png" alt="Image">
                                Chatgpt
                            </a>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="{{ route('tools.show', $tool->slug) }}" target="_blank">{{ $tool->name }}</a>
                                <a href="{{ $tool->link }}" class="ml-3" target="_blank">
                                    <i class="bi bi-box-arrow-up-right" style="font-size: 20px"></i>
                                </a>
                            </h5>
                            {{-- <p class="tertiary-text">$25.00</p> --}}
                        </div>
                        <hr>
                        <div class="meta">
                            <div class="meta-info">
                                <div class="meta-thumb">
                                    <img src="{{ $tool->user->avatar }}" alt="Image">
                                </div>
                                <p class="tertiary-text text-capitalize">{{ '@' . $tool->user->first_name }}</p>
                            </div>
                            <div class="meta-review">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        {{-- <div class="cta">
                            <a href="product-single.html" class="btn btn--quaternary">Get Prompts</a>
                        </div> --}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ==== / related product end ==== -->

    {{-- <!-- ==== case study start ==== -->
    <section class="section h-s-case-alter fade-wrapper" data-background="assets/images/s-j-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__header--secondary">
                        <div class="row align-items-center gaper">
                            <div class="col-12 col-lg-5">
                                <div class="section__header mb-0 text-center text-lg-start">
                                    <h2 class="title mt-12 title-animation">Related Projects</h2>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <div class="text-center text-lg-end">
                                    <a href="case-study.html" class="btn btn--primary">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gaper">
                <div class="col-12 col-md-6 fade-top">
                    <div class="h-s-case-single topy-tilt">
                        <div class="thumb">
                            <a href="case-study-single.html">
                                <img src="/images/one_9.png" alt="Image">
                            </a>
                        </div>
                        <div class="h-case-content">
                            <div class="case-title">
                                <h2 class="light-title">
                                    <a href="case-study-single.html">Ai Club x</a>
                                </h2>
                            </div>
                            <div class="h-c-continent">
                                <p>AI-powered inpainting algorithms seamlessly restore the beauty and completeness
                                </p>
                                <a href="case-study-single.html" class="cta">
                                    <span class="arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 fade-top">
                    <div class="h-s-case-single topy-tilt">
                        <div class="thumb">
                            <a href="case-study-single.html">
                                <img src="/images/two_9.png" alt="Image">
                            </a>
                        </div>
                        <div class="h-case-content">
                            <div class="case-title">
                                <h2 class="light-title">
                                    <a href="case-study-single.html">Soal xp</a>
                                </h2>
                            </div>
                            <div class="h-c-continent">
                                <p>AI-powered inpainting algorithms seamlessly restore the beauty and completeness
                                </p>
                                <a href="case-study-single.html" class="cta">
                                    <span class="arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 fade-top">
                    <div class="h-s-case-single topy-tilt">
                        <div class="thumb">
                            <a href="case-study-single.html">
                                <img src="/images/three_9.png" alt="Image">
                            </a>
                        </div>
                        <div class="h-case-content">
                            <div class="case-title">
                                <h2 class="light-title">
                                    <a href="case-study-single.html">Robo x pro</a>
                                </h2>
                            </div>
                            <div class="h-c-continent">
                                <p>AI-powered inpainting algorithms seamlessly restore the beauty and completeness
                                </p>
                                <a href="case-study-single.html" class="cta">
                                    <span class="arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 fade-top">
                    <div class="h-s-case-single  topy-tilt">
                        <div class="thumb">
                            <a href="case-study-single.html">
                                <img src="/images/four_7.png" alt="Image">
                            </a>
                        </div>
                        <div class="h-case-content">
                            <div class="case-title">
                                <h2 class="light-title">
                                    <a href="case-study-single.html">Manto ai</a>
                                </h2>
                            </div>
                            <div class="h-c-continent">
                                <p>AI-powered inpainting algorithms seamlessly restore the beauty and completeness
                                </p>
                                <a href="case-study-single.html" class="cta">
                                    <span class="arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / case study end ==== --> --}}
</main>
@endsection
