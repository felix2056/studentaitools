@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <!-- ==== banner start ==== -->
    <section class="banner-four">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-12 col-xxl-10">
                    <div class="banner-four__content text-center">
                        <h1 class="title-animation fw-7 text-white">
                            Everything You Need For School In
                            <span class="text-primary text-capitalize">One Place</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner end ==== -->
    <!-- ==== product filter start ==== -->
    <section class="section pt-0 pb-0 product-filter fade-wrapper">
        <div class="container">
            <div class="row gaper justify-content-end">
                <div class="col-12 col-lg-5 col-xxl-12">
                    <div class="product-search">
                        <form action="{{ route('tools.index') }}" method="get">
                            <input type="text" name="search" id="productSearch" placeholder="Search">
                            <button type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                            @csrf
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-xxl-12 offset-xxl-1">
                    <div class="product-filter__wrapper justify-content-start justify-content-lg-end">
                        <button type="button" aria-label="Filter Product" data-filter="*" class="active">All</button>
                        @foreach(\App\Models\Category::all() as $category)
                            <a href="{{ route('categories.show', $category->slug) }}" aria-label="{{ $category->name }}" data-filter=".{{ $category->slug }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-12">
                    <div class="product-item-wrapper masonry-grid">
                        <div class="product-filter__single grid-item-main design creative business fade-top topy-tilt">
                            <div class="thumb">
                                <a href="product-single.html">
                                    <img src="/images/one_7.png" alt="Image">
                                </a>
                                <button>
                                    <span class="material-symbols-outlined">
                                        favorite
                                    </span>
                                </button>
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="product-single.html">Robo Girl</a>
                                </h4>
                                <h5>$25.00</h5>
                            </div>
                        </div>
                        <div class="product-filter__single grid-item-main ai nft fade-top topy-tilt">
                            <div class="thumb">
                                <a href="product-single.html">
                                    <img src="/images/three_8.png" alt="Image">
                                </a>
                                <button>
                                    <span class="material-symbols-outlined">
                                        favorite
                                    </span>
                                </button>
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="product-single.html">Robo Girl</a>
                                </h4>
                                <h5>$25.00</h5>
                            </div>
                        </div>
                        <div class="product-filter__single grid-item-main business ai fade-top topy-tilt">
                            <div class="thumb">
                                <a href="product-single.html">
                                    <img src="/images/six.png" alt="Image">
                                </a>
                                <button>
                                    <span class="material-symbols-outlined">
                                        favorite
                                    </span>
                                </button>
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="product-single.html">Robo Girl</a>
                                </h4>
                                <h5>$25.00</h5>
                            </div>
                        </div>
                        <div class="product-filter__single grid-item-main creative ai fade-top topy-tilt">
                            <div class="thumb">
                                <a href="product-single.html">
                                    <img src="/images/two_7.png" alt="Image">
                                </a>
                                <button>
                                    <span class="material-symbols-outlined">
                                        favorite
                                    </span>
                                </button>
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="product-single.html">Robo Girl</a>
                                </h4>
                                <h5>$25.00</h5>
                            </div>
                        </div>
                        <div class="product-filter__single grid-item-main design creative nft fade-top topy-tilt">
                            <div class="thumb">
                                <a href="product-single.html">
                                    <img src="/images/four_6.png" alt="Image">
                                </a>
                                <button>
                                    <span class="material-symbols-outlined">
                                        favorite
                                    </span>
                                </button>
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="product-single.html">Robo Girl</a>
                                </h4>
                                <h5>$25.00</h5>
                            </div>
                        </div>
                        <div class="product-filter__single grid-item-main nft business fade-top topy-tilt">
                            <div class="thumb">
                                <a href="product-single.html">
                                    <img src="/images/five_4.png" alt="Image">
                                </a>
                                <button>
                                    <span class="material-symbols-outlined">
                                        favorite
                                    </span>
                                </button>
                            </div>
                            <div class="content">
                                <h4>
                                    <a href="product-single.html">Robo Girl</a>
                                </h4>
                                <h5>$25.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- ==== / product filter end ==== -->

    <!-- ==== category start ==== -->
    <section class="section pb-0 category">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section__header text-center">
                        <h2 class="title-animation fw-7 text-white">All the Category</h2>
                    </div>
                </div>
            </div>
            <div class="row gaper fade-wrapper">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="category-overview__single fade-top">
                        <a href="shop.html">
                            <span>Ai</span>
                            <img src="/images/one_8.png" alt="Images">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="category-overview__single fade-top">
                        <a href="shop.html">
                            <span>3D</span>
                            <img src="/images/two_8.png" alt="Images">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="category-overview__single fade-top">
                        <a href="shop.html">
                            <span>Stock</span>
                            <img src="/images/three_7.png" alt="Images">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="category-overview__single fade-top">
                        <a href="shop.html">
                            <span>Logos</span>
                            <img src="/images/four_5.png" alt="Images">
                        </a>
                    </div>
                </div>
            </div>

            <hr>
            
            <div class="row ">
                <div class="col-12">
                    <div class="category-filter">
                        <button aria-label="Filter Product" data-filter="*" class="active">All</button>
                        <button aria-label="Filter Product" data-filter=".chat-g">
                            <img src="/images/chat.png" alt="Image">
                            Chatgpt
                        </button>
                        <button aria-label="Filter Product" data-filter=".mid-j">
                            <img src="/images/mid.png" alt="Image">
                            Midjourney
                        </button>
                    </div>
                </div>
            </div>

            <div class="row category-masonry fade-wrapper">
                <! -- get random tools -->
                @foreach (App\Models\Tool::inRandomOrder()->limit(8)->get() as $tool)
                <div class="col-12  col-md-6 col-lg-4 col-xxl-3 category-item chat-g fade-top">
                    <div class="category__single topy-tilt">
                        <div class="thumb">
                            <a href="{{ route('tools.show', $tool->slug) }}" target="_blank" class="thumb-img">
                                <img src="{{ $tool->screenshot1 }}" alt="Image">
                            </a>
                            <a href="{{ route('tools.show', $tool->slug) }}" class="tag">
                                <img src="{{ $tool->favicon }}" alt="Image" width="30">
                            </a>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="{{ route('tools.show', $tool->slug) }}" target="_blank">{{ $tool->name }}</a>
                                <a href="{{ $tool->link }}" class="ml-3" target="_blank">
                                    <i class="bi bi-box-arrow-up-right" style="font-size: 20px"></i>
                                </a>
                            </h5>
                            <p class="tertiary-text">{{ $tool->pricing }}</p>
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
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="section__cta text-center">
                        <a href="{{ route('tools.index') }}" class="btn btn--primary">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / category end ==== -->

    <!-- ==== new tools start ==== -->
    <section class="section pb-0 new-prompts fade-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__header text-start">
                        <h2 class="title title-animation mt-12">New Tools</h2>
                    </div>
                </div>
            </div>
            <div class="row gaper">
                <! -- get new tools -->
                @foreach (App\Models\Tool::orderBy('created_at', 'desc')->limit(8)->get() as $tool)
                <div class="col-12 col-md-6 col-lg-4 col-xxl-3 fade-top">
                    <div class="category__single topy-tilt">
                        <div class="thumb">
                            <a href="{{ route('tools.show', $tool->slug) }}" target="_blank" class="thumb-img">
                                <img src="{{ $tool->screenshot1 }}" alt="Image">
                            </a>
                            <a href="{{ route('tools.show', $tool->slug) }}" class="tag">
                                <img src="{{ $tool->favicon }}" alt="Image" width="30">
                            </a>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="{{ route('tools.show', $tool->slug) }}" target="_blank">{{ $tool->name }}</a>
                                <a href="{{ $tool->link }}" class="ml-3" target="_blank">
                                    <i class="bi bi-box-arrow-up-right" style="font-size: 20px"></i>
                                </a>
                            </h5>
                            <p class="tertiary-text">{{ $tool->pricing }}</p>
                        </div>
                        <hr>
                        <div class="meta">
                            <div class="meta-info">
                                <div class="meta-thumb">
                                    <img src="{{ $tool->user->avatar }}" alt="Image">
                                </div>
                                <p class="tertiary-text">{{ '@' . $tool->user->first_name }}</p>
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
    <!-- ==== / new tools end ==== -->

    <!-- ==== text slider large start ==== -->
    <section class="text-slider-large-wrapper section pb-0">
        <div class="text-slider-large">
            <div class="text-slider__single">
                <h2 class="large-title">
                    <a href="services.html">
                        STUDENT AI
                        <span class="text-stroke" data-text="Tools"> Tools</span>
                    </a>
                </h2>
            </div>
            <div class="text-slider__single">
                <h2 class="large-title">
                    <a href="services.html">
                        STUDENT AI
                        <span class="text-stroke" data-text="Tools"> Tools</span>
                    </a>
                </h2>
            </div>
            <div class="text-slider__single">
                <h2 class="large-title">
                    <a href="services.html">
                        STUDENT AI
                        <span class="text-stroke" data-text="Tools"> Tools</span>
                    </a>
                </h2>
            </div>
            <div class="text-slider__single">
                <h2 class="large-title">
                    <a href="services.html">
                        STUDENT AI
                        <span class="text-stroke" data-text="Tools"> Tools</span>
                    </a>
                </h2>
            </div>
        </div>
    </section>
    <!-- ==== / text slider large end ==== -->

    <!-- ==== top rated tools start ==== -->
    <section class="section pb-0 best-prompts fade-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__header text-start">
                        <h2 class="title title-animation mt-12">Top Rated Tools</h2>
                    </div>
                </div>
            </div>
            <div class="row gaper">
                @foreach (App\Models\Tool::with('ratings')->get()->sortByDesc(function($tool) {
                    return $tool->ratings->avg('rating');
                })->take(8) as $tool)
                <div class="col-12 col-md-6 col-lg-4 col-xxl-3 fade-top">
                    <div class="category__single topy-tilt">
                        <div class="thumb">
                            <a href="{{ route('tools.show', $tool->slug) }}" target="_blank" class="thumb-img">
                                <img src="{{ $tool->screenshot1 }}" alt="Image">
                            </a>
                            <a href="{{ route('tools.show', $tool->slug) }}" class="tag">
                                <img src="{{ $tool->favicon }}" alt="Image" width="30">
                            </a>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="{{ route('tools.show', $tool->slug) }}" target="_blank">{{ $tool->name }}</a>
                                <a href="{{ $tool->link }}" class="ml-3" target="_blank">
                                    <i class="bi bi-box-arrow-up-right" style="font-size: 20px"></i>
                                </a>
                            </h5>
                            <p class="tertiary-text">{{ $tool->pricing }}</p>
                        </div>
                        <hr>
                        <div class="meta">
                            <div class="meta-info">
                                <div class="meta-thumb">
                                    <img src="{{ $tool->user->avatar }}" alt="Image">
                                </div>
                                <p class="tertiary-text">{{ '@' . $tool->user->first_name }}</p>
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
    <!-- ==== / top rated tools end ==== -->

    {{-- <!-- ==== chat tools start ==== -->
    <section class="section pb-0 chat-prompts fade-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__header text-start">
                        <h2 class="title title-animation mt-12">Chat GPT Prompts</h2>
                    </div>
                </div>
            </div>
            <div class="row gaper">
                <div class="col-12 col-md-6 col-lg-4 col-xxl-3 fade-top">
                    <div class="category__single topy-tilt">
                        <div class="thumb">
                            <a href="product-single.html" class="thumb-img">
                                <img src="/images/sixteen.png" alt="Image">
                            </a>
                            <a href="shop.html" class="tag">
                                <img src="/images/chat.png" alt="Image">
                                Chatgpt
                            </a>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="product-single.html">Prompt Player</a>
                            </h5>
                            <p class="tertiary-text">$25.00</p>
                        </div>
                        <hr>
                        <div class="meta">
                            <div class="meta-info">
                                <div class="meta-thumb">
                                    <img src="/images/a-twelve.png" alt="Image">
                                </div>
                                <p class="tertiary-text">@Esther</p>
                            </div>
                            <div class="meta-review">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <div class="cta">
                            <a href="product-single.html" class="btn btn--quaternary">Get Prompts</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xxl-3 fade-top">
                    <div class="category__single topy-tilt">
                        <div class="thumb">
                            <a href="product-single.html" class="thumb-img">
                                <img src="/images/fourteen.png" alt="Image">
                            </a>
                            <a href="shop.html" class="tag">
                                <img src="/images/chat.png" alt="Image">
                                Chatgpt
                            </a>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="product-single.html">Blog wright</a>
                            </h5>
                            <p class="tertiary-text">$25.00</p>
                        </div>
                        <hr>
                        <div class="meta">
                            <div class="meta-info">
                                <div class="meta-thumb">
                                    <img src="/images/a-eleven.png" alt="Image">
                                </div>
                                <p class="tertiary-text">@Esther</p>
                            </div>
                            <div class="meta-review">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <div class="cta">
                            <a href="product-single.html" class="btn btn--quaternary">Get Prompts</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xxl-3 fade-top">
                    <div class="category__single topy-tilt">
                        <div class="thumb">
                            <a href="product-single.html" class="thumb-img">
                                <img src="/images/thirteen.png" alt="Image">
                            </a>
                            <a href="shop.html" class="tag">
                                <img src="/images/chat.png" alt="Image">
                                Chatgpt
                            </a>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="product-single.html">Article</a>
                            </h5>
                            <p class="tertiary-text">$25.00</p>
                        </div>
                        <hr>
                        <div class="meta">
                            <div class="meta-info">
                                <div class="meta-thumb">
                                    <img src="/images/a-ten.png" alt="Image">
                                </div>
                                <p class="tertiary-text">@Esther</p>
                            </div>
                            <div class="meta-review">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <div class="cta">
                            <a href="product-single.html" class="btn btn--quaternary">Get Prompts</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xxl-3 fade-top">
                    <div class="category__single topy-tilt">
                        <div class="thumb">
                            <a href="product-single.html" class="thumb-img">
                                <img src="/images/twelve.png" alt="Image">
                            </a>
                            <a href="shop.html" class="tag">
                                <img src="/images/mid.png" alt="Image">
                                Midjourney
                            </a>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="product-single.html">Logo Ideas</a>
                            </h5>
                            <p class="tertiary-text">$25.00</p>
                        </div>
                        <hr>
                        <div class="meta">
                            <div class="meta-info">
                                <div class="meta-thumb">
                                    <img src="/images/a-eight.png" alt="Image">
                                </div>
                                <p class="tertiary-text">@Esther</p>
                            </div>
                            <div class="meta-review">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <div class="cta">
                            <a href="product-single.html" class="btn btn--quaternary">Get Prompts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / chat tools end ==== --> --}}

    <!-- ==== featured tools start ==== -->
    <section class="section pb-0 feature fade-wrapper fade-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__header text-start">
                        <h2 class="title title-animation mt-12">Featured Tools</h2>
                    </div>
                </div>
            </div>
            <div class="row gaper">
                @foreach(App\Models\Tool::where('is_featured', true)->limit(4)->get() as $tool)
                <div class="col-12 col-md-6 col-lg-4 col-xxl-3 fade-top">
                    <div class="feature__single topy-tilt">
                        <div class="thumb">
                            <img src="{{ $tool->user->avatar }}" alt="Image">
                            <span class="check">
                                <i class="bi bi-check2"></i>
                            </span>
                        </div>
                        <div class="thumb-content">
                            <p class="fw-6 text-white">{{ '@' . $tool->user->first_name }}</p>
                            <p>
                                <span>4.5 /</span>
                                05
                            </p>
                        </div>
                        <hr>
                        <div class="feature__thumb">
                            <a href="{{ route('tools.show', $tool->slug) }}" target="_blank" class="thumb-img">
                                <img src="{{ $tool->screenshot1 }}" alt="Image">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ==== / featured tools end ==== -->

    <!-- ==== sponsor start ==== -->
    <div class="sponsor section overflow-hidden">
        <div class="sponsor__slider">
            <div class="sponsor__single text-center">
                <img src="/images/six_2.png" alt="Image">
            </div>
            <div class="sponsor__single text-center">
                <img src="/images/seven_1.png" alt="Image">
            </div>
            <div class="sponsor__single text-center">
                <img src="/images/eight.png" alt="Image">
            </div>
            <div class="sponsor__single text-center">
                <img src="/images/nine.png" alt="Image">
            </div>
            <div class="sponsor__single text-center">
                <img src="/images/six_2.png" alt="Image">
            </div>
            <div class="sponsor__single text-center">
                <img src="/images/seven_1.png" alt="Image">
            </div>
            <div class="sponsor__single text-center">
                <img src="/images/eight.png" alt="Image">
            </div>
            <div class="sponsor__single text-center">
                <img src="/images/nine.png" alt="Image">
            </div>
        </div>
    </div>
    <!-- ==== / sponsor end ==== -->
</main>
@endsection
