@extends('layouts.auth')

@section('title', 'Choose Username')

@section('content')
<div class="sm:flex">
    <div class="relative lg:w-[580px] md:w-96 w-full p-10 min-h-screen bg-white shadow-xl flex items-center pt-10 dark:bg-slate-900 z-10">
        <div class="w-full lg:max-w-sm mx-auto space-y-10" uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
            <!-- logo image-->
            <a href="/" style="" class="uk-scrollspy-inview "> <img src="/images/logo/png/logo_transparent_background.png" class="w-45 absolute top-10 left-10 dark:hidden" alt=""></a>
            <a href="/" style="" class="uk-scrollspy-inview "> <img src="/images/logo/png/logo_transparent_background.png" class="w-45 absolute top-10 left-10 hidden dark:!block" alt=""></a>

            <!-- logo icon optional -->
            <div class="hidden" style="opacity: 0;">
                <img class="w-20" src="/images/logo/png/white_logo_transparent_background_favicon.png" alt="Student AI Tools">
            </div>

            <!-- title -->
            <div style="" class="uk-scrollspy-inview ">
                <h2 class="text-2xl font-semibold mb-1.5"> Choose your preferred username </h2>
            </div>

            <!-- form -->
            <form method="POST" class="space-y-7 text-sm text-black font-medium dark:text-white uk-scrollspy-inview " uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                @csrf

                <!-- user name -->
                <div style="" class="uk-scrollspy-inview ">
                    <label for="username" class="">Username</label>
                    <div class="mt-2.5">
                        <input id="username" name="username" type="text" autofocus="" placeholder="Choose a Username" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">
                        @error('username')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong class="text-danger">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <!-- submit button -->
                <div style="" class="uk-scrollspy-inview ">
                    <button type="submit" class="button bg-primary text-white w-full">Continue</button>
                </div>
            </form>
        </div>
    </div>

    <!-- image slider -->
    <div class="flex-1 relative bg-primary max-md:hidden">
        <div class="relative w-full h-full uk-slideshow" tabindex="-1" uk-slideshow="animation: slide; autoplay: true">
            <ul class="uk-slideshow-items w-full h-full" style="min-height: 528.188px;">
                <li class="w-full uk-active uk-transition-active" tabindex="-1" style="transform: translate3d(0px, 0px, 0px);">
                    <img src="/images/happy-student-auth-4.png" alt="" class="w-full h-full object-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <div class="absolute bottom-0 w-full uk-tr ansition-slide-bottom-small z-10">
                        <div class="max-w-xl w-full mx-auto pb-32 px-5 z-30 relative" uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                            <img class="w-20 uk-scrollspy-inview " src="/images/logo/png/white_logo_transparent_background_favicon.png" alt="Student AI Tools" style="">
                            <h4 class="!text-white text-2xl font-semibold mt-7 uk-scrollspy-inview " uk-slideshow-parallax="y: 600,0,0" style="transform: translateY(0px);"> Join The Smart Student's Toolbox </h4>
                            <p class="!text-white text-lg mt-7 leading-8 uk-scrollspy-inview " uk-slideshow-parallax="y: 800,0,0;" style="transform: translateY(0px);"> From study hacks to genius solutions, Student AI Tools has everything you need to study smarter. </p>
                        </div>
                    </div>
                    <div class="w-full h-96 bg-gradient-to-t from-black absolute bottom-0 left-0"></div>
                </li>
                <li class="w-full" tabindex="-1" style="transform: translate3d(-100%, 0px, 0px);">
                    <img src="/images/happy-student-auth-3.png" alt="" class="w-full h-full object-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <div class="absolute bottom-0 w-full uk-tr ansition-slide-bottom-small z-10">
                        <div class="max-w-xl w-full mx-auto pb-32 px-5 z-30 relative" uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                            <img class="w-20 " src="/images/logo/png/white_logo_transparent_background_favicon.png" alt="Student AI Tools" style="opacity: 0;">
                            <h4 class="!text-white text-2xl font-semibold mt-7" uk-slideshow-parallax="y: 800,0,0" style="transform: translateY(0px); opacity: 0;">AI-Powered Learning Made Simple </h4>
                            <p class="!text-white text-lg mt-7 leading-8" uk-slideshow-parallax="y: 800,0,0;" style="transform: translateY(0px); opacity: 0;"> Whether you're a seasoned student or just starting your academic journey, explore how AI tools can help you navigate the learning curve with ease and confidence.</p>
                        </div>
                    </div>
                    <div class="w-full h-96 bg-gradient-to-t from-black absolute bottom-0 left-0"></div>
                </li>
            </ul>

            <!-- slide nav -->
            <div class="flex justify-center">
                <ul class="inline-flex flex-wrap justify-center  absolute bottom-8 gap-1.5 uk-dotnav uk-slideshow-nav">
                    <li uk-slideshow-item="0" class="uk-active"><a href=""></a></li>
                    <li uk-slideshow-item="1" class=""><a href=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
