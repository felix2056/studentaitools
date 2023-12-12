@extends('layouts.app')

@section('title', 'Success')

@section('content')
<main>
    <!-- ==== banner start ==== -->
    <section class="cmn-banner" data-background="assets/images/banner/cmn-bg.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xxl-8">
                    <div class="cmn-banner__content text-center">
                        <h2 class="light-title fw-7 text-white title-animation">Success</h2>
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
    <!-- ==== error start ==== -->
    <section class="section error">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section__header text-center mb-0">
                        <h2 class="title title-animation mt-12">Thank you for submitting your tool!</h2>
                        <p>
                            We will review your submission and get back to you shortly.
                        </p>
                        <div class="section__cta">
                            <a href="/" class="btn btn--primary">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / error end ==== -->

    <!-- ==== product details start ==== -->
    <section class="section p-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="row align-items-center gaper">
                            <div class="col-12 col-lg-6">
                                <div class="product__thumb">
                                    <div class="large-product-img">
                                        <div class="single-lg-img">
                                            <img src="{{ $tool->screenshot1 }}" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="product__content">
                                    <h2 class="title-animation fw-7 text-white">{{ $tool->name }}</h2>
                                    <div class="product-meta">
                                        <div class="product-price">
                                            <p class="product-discount primary-text">
                                                <span class="dis-per">{{ $tool->pricing }}</span>
                                            </p>

                                            <div class="product-m-price">
                                                {{-- <p class="primary-text ">
                                                    <span class="deleted-price">$50.00</span>
                                                    <span class="current-price">$40.00</span>
                                                </p> --}}
                                                <div class="product-review">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="paragraph">
                                        <p>
                                            {{ $tool->description ?? 'No description provided for this tool. Please contact the tool owner or admin to add a description.' }}
                                        </p>
                                    </div>

                                    <div class="tags">
                                        <p class="text-white">Tags</p>
                                        @if ($tool->tags && count($tool->tags) > 0)
                                        <div class="tags-wrapper">
                                            @foreach ($tool->tags as $tag)
                                            <a href="/tools?tag={{ $tag }}" class="tag">{{ $tag }}</a>
                                            @endforeach
                                        </div>
                                        @endif
                                    </div>

                                    <div class="product-cta section__content-cta">
                                        <!-- delete -->
                                        <form action="/tools/{{ $tool->slug }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn--primary">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                        <!-- /delete -->

                                        <!-- edit -->
                                        <button class="btn btn--primary" onclick="window.location.href='/tools/{{ $tool->slug }}/edit'">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <!-- /edit -->

                                        <!-- update screenshots -->
                                        <button class="btn btn--primary" onclick="window.location.href='/tools/{{ $tool->slug }}/update-screenshots'">
                                            <i class="bi bi-image"></i>
                                        </button>
                                        <!-- /update screenshots -->

                                        {{-- <button >
                                            <span class="material-symbols-outlined">
                                                favorite
                                            </span>
                                        </button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="p-details__tab">
                        <div class="p-details__tab-btn">
                            <button data-target="#pDescription" class="p-d-t-btn p-d-t-btn-active">Overview</button>
                            {{-- <button data-target="#pReview" class="p-d-t-btn">Review</button>
                            <button data-target="#pAuthor" class="p-d-t-btn">Author</button> --}}
                        </div>

                        <div class="p-d-t-wrapper">
                            <div class="p-details__tab-single" id="pDescription">
                                <div class="description-content">
                                    <p>
                                        {!! $tool->content !!}
                                    </p>
                                </div>
                            </div>

                            {{-- <div class="p-details__tab-single" id="pReview">
                                <div class="review-content">
                                    <div class="row">
                                        <div class="col-12 col-xl-9">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment-single">
                                                    <div class="thumb">
                                                        <img src="images/a-one.png" alt="Image">
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
                                                                <img src="images/a-one.png" alt="Image">
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
                                                        <img src="images/a-two.png" alt="Image">
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
                                                                <img src="images/a-two.png" alt="Image">
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
                                                    <div class="input-group">
                                                        <div class="input-single">
                                                            <input type="text" name="a-name" id="aName" placeholder="Your Name" required="">
                                                        </div>
                                                        <div class="input-single">
                                                            <input type="email" name="a-email" id="aemail" placeholder="Your Email" required="">
                                                        </div>
                                                    </div>
                                                    <div class="input-single">
                                                        <textarea name="a-comment" id="aComment" cols="30" rows="10" placeholder="Write Your Comment"></textarea>
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
                                    <img src="images/a-one.png" alt="Image">
                                </div>
                                <div class="content">
                                    <h4>@Esther </h4>
                                    <p class="tertiary-text">Product: 24</p>
                                    <p class="tertiary-text">Review: 4.5/5</p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== product details end ==== -->
</main>
@endsection
