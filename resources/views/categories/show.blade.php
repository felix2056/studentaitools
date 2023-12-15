@extends('layouts.app')

@section('title', $category->name)

@section('content')
<main>
    <!-- ==== banner start ==== -->
    <section class="cmn-banner" data-background="/images/cmn-bg.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xxl-8">
                    <div class="cmn-banner__content text-center">
                        <h2 class="light-title fw-7 text-white title-animation">{{ $category->name }}</h2>
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
    <!-- ==== shop section start ==== -->
    <section class="section shop">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="shop__sidebar">
                        <div class="shop-sidebar-single shop-search-bar">
                            <form action="{{ route('tools.index') }}" method="get">
                                @csrf
                                <div class="search-group">
                                    <input type="text" name="search" id="ProductSearch" placeholder="Search.." required="">
                                    <button type="submit">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="shop-sidebar-single shop-category">
                            <h3 class="title-animation fw-6 text-white mt-12">Category</h3>
                            <ul class="check-group">
                                @foreach (\App\Models\Category::all() as $cat)
                                <li class="check-group-single">
                                    <input type="checkbox" name="product-{{ $cat->slug }}" id="product{{ $cat->slug }}" {{ $cat->slug == $category->slug ? 'checked' : '' }}>
                                    <label for="product{{ $cat->slug }}">{{ $cat->name }}</label>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="shop-sidebar-single shop-sorting">
                            <h3 class="title-animation fw-6 text-white mt-12">Pricing</h3>
                            <ul class="check-group">
                                <li class="check-group-single">
                                    <input type="checkbox" name="product-Free" id="productFree" checked="">
                                    <label for="productFree">Free</label>
                                </li>
                                <li class="check-group-single">
                                    <input type="checkbox" name="product-Freemium" id="productFreemium">
                                    <label for="productFreemium">Freemium</label>
                                </li>
                                <li class="check-group-single">
                                    <input type="checkbox" name="product-Paid" id="productPaid">
                                    <label for="productPaid">Paid</label>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-sidebar-single shop-type">
                            <h3 class="title-animation fw-6 text-white mt-12">Technology</h3>
                            <ul class="check-group">
                                <li class="check-group-single">
                                    <input type="checkbox" name="product-Chatgpt" id="productChatgpt" checked="">
                                    <label for="productChatgpt">Chatgpt</label>
                                </li>
                                <li class="check-group-single">
                                    <input type="checkbox" name="product-Midjourney" id="productMidjourney">
                                    <label for="productMidjourney">Midjourney</label>
                                </li>
                                <li class="check-group-single">
                                    <input type="checkbox" name="product-Bard" id="productBard">
                                    <label for="productBard">Bard</label>
                                </li>
                                <li class="check-group-single">
                                    <input type="checkbox" name="product-Dalle" id="productDalle">
                                    <label for="productDalle">Dalle</label>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-sidebar-single shop-rating">
                            <h3 class="title-animation fw-6 text-white mt-12">Rating</h3>
                            <ul class="check-group">
                                <li class="check-group-single">
                                    <input type="checkbox" name="product-FiveStar" id="productFiveStar" checked="">
                                    <label for="productFiveStar">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </label>
                                </li>
                                <li class="check-group-single">
                                    <input type="checkbox" name="product-FourStar" id="productFourStar">
                                    <label for="productFourStar"><i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i></label>
                                </li>
                                <li class="check-group-single">
                                    <input type="checkbox" name="product-ThreeStar" id="productThreeStar">
                                    <label for="productThreeStar">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </label>
                                </li>
                                <li class="check-group-single">
                                    <input type="checkbox" name="product-TwoStar" id="productTwoStar">
                                    <label for="productTwoStar">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </label>
                                </li>
                                <li class="check-group-single">
                                    <input type="checkbox" name="product-OneStar" id="productOneStar">
                                    <label for="productOneStar">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="shop__content">
                        <div class="row gaper">
                            @foreach($tools as $tool)
                            <div class="col-12 col-md-6 slide-top">
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
                                    {{-- <div class="cta">
                                        <a href="product-single.html" class="btn btn--quaternary">Get Prompts</a>
                                    </div> --}}
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <div class="col-12">
                                {{ $tools->links('vendor.pagination.default') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / shop section end ==== -->
</main>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('input[type="checkbox"]').click(function() {
            var inputValue = $(this).attr("id");
            $("." + inputValue).toggle();
        });
    });
</script>
@endsection
