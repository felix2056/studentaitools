@extends('layouts.app')

@section('title', 'Edit Tool')

@section('styles')
<script src="https://cdn.tiny.cloud/1/89wibrodin74xxczxdk9eqmk20bhmmhphl3gh2dj3owgi3fo/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endsection

@section('content')
<main>
    <!-- ==== banner start ==== -->
    <section class="cmn-banner" data-background="/images/cmn-bg.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xxl-8">
                    <div class="cmn-banner__content text-center">
                        <h2 class="light-title fw-7 text-white title-animation">Edit {{ $tool->name }}</h2>
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
                            <h3 class="title-animation fw-7 text-white mt-12">Editing your tool will require it to be re-evaluated.</h3>
                            <form method="post">
                                @csrf
                                <div class="input-single">
                                    <input type="text" name="tool_name" id="tName" placeholder="Tool Name" required="" class="@error('tool_name') is-invalid @enderror" value="{{ old('tool_name') ?? $tool->name }}">
                                    @error('tool_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-single">
                                    <input type="url" name="tool_website" id="tWebsite" placeholder="Tool Website URL" required="" class="@error('tool_website') is-invalid @enderror" value="{{ old('tool_website') ?? $tool->link }}">
                                    @error('tool_website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-single">
                                    <textarea name="tool_content" id="tContent" cols="30" rows="10" placeholder="Describe your tool" class="@error('tool_content') is-invalid @enderror">{{ old('tool_content') ?? $tool->content }}</textarea>
                                    @error('tool_content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-single">
                                    <input type="text" name="tool_tags" id="tTags" placeholder="Tags (comma separated)" required="" class="@error('tool_tags') is-invalid @enderror" value="{{ old('tool_tags') ?? $tool->comma_separated_tags }}">
                                    @error('tool_tags')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-single">
                                    <select name="tool_pricing" id="tPricing" required="" class="@error('tool_pricing') is-invalid @enderror" value="{{ old('tool_pricing') }}">
                                        <option value="free" @if ($tool->pricing == 'free') selected @endif>Free</option>
                                        <option value="freemium" @if ($tool->pricing == 'freemium') selected @endif>Freemium</option>
                                        <option value="paid" @if ($tool->pricing == 'paid') selected @endif>Paid</option>
                                    </select>
                                    @error('tool_pricing')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-single">
                                    <select name="tool_categories[]" id="tCategories" required="" multiple class="@error('tool_categories') is-invalid @enderror">
                                        @foreach (\App\Models\Category::all() as $category)
                                            <option value="{{ $category->id }}" @if ($tool->categories->contains($category->id)) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tool_categories')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="section__content-cta text-center">
                                    <button type="submit" class="btn btn--primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <div class="m-contact__thumb reveal-img parallax-img">
                            <img src="{{ $tool->screenshot1 }}" alt="Image">
                        </div>

                        <div class="section__content-cta text-center mt-5">
                            <a href="{{ route('tools.update-screenshots', $tool->slug) }}" class="btn btn--primary">Update <i class="fa fa-picture-o"></i></a>
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
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });

        $('#tWebsite').on('input', function() {
            var url = $(this).val();
            if (url.length > 0) {
                // validate url
                var regex = /^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}/;
                if (!regex.test(url)) {
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                }
            }
        });
    });

</script>
@endsection
