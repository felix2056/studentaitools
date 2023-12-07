@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<main>
    <!-- ==== banner start ==== -->
    <section class="cmn-banner" data-background="assets/images/banner/cmn-bg.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xxl-8">
                    <div class="cmn-banner__content text-center">
                        <h2 class="light-title fw-7 text-white title-animation">Contact Us</h2>
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

    <!-- ==== contact start ==== -->
    <section class="section m-contact fade-wrapper">
        <div class="container">
            <div class="row gaper section pt-0">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="m-contact__single fade-top">
                        <div class="thumb">
                            <img src="/images/mail.png" alt="Image">
                        </div>
                        <div class="content">
                            <h3>Email</h3>
                            <p>
                                <a href="/cdn-cgi/l/email-protection#83e2efeee2adefe2f4f0ecedc3e6fbe2eef3efe6ade0ecee"><span class="__cf_email__" data-cfemail="70111c1d115e1c1107031f1e301508111d001c155e131f1d">[email&nbsp;protected]</span></a>
                            </p>
                            <p>
                                <a href="/cdn-cgi/l/email-protection#88e5e1ebe0e9ede4a6e5e1fcebc8edf0e9e5f8e4eda6ebe7e5"><span class="__cf_email__" data-cfemail="b8d5d1dbd0d9ddd496d5d1ccdbf8ddc0d9d5c8d4dd96dbd7d5">[email&nbsp;protected]</span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="m-contact__single fade-top">
                        <div class="thumb">
                            <img src="/images/phone.png" alt="Image">
                        </div>
                        <div class="content">
                            <h3>Phone</h3>
                            <p>
                                <a href="tel:219-555-0114">(480) 555-0103</a>
                            </p>
                            <p>
                                <a href="tel:219-555-0114">(219) 555-0114</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="m-contact__single fade-top">
                        <div class="thumb">
                            <img src="/images/location.png" alt="Image">
                        </div>
                        <div class="content">
                            <h3>Location</h3>
                            <p>
                                <a href="tel:219-555-0114" target="_blank">4517 Washington Ave. Manchester, Kentucky
                                    39495</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row gaper align-items-center">
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="m-contact__form">
                        <h3 class="title-animation fw-7 text-white text-uppercase mt-12">PLEASE MESSAGE ME, IF YOU
                            HAVE ANY QUERIES</h3>
                        <form action="#" method="post">
                            <div class="input-single">
                                <input type="text" name="c-name" id="cName" placeholder="Your Name" required="">
                            </div>
                            <div class="input-single">
                                <input type="email" name="c-Email" id="cEmail" placeholder="Your Email" required="">
                            </div>
                            <div class="input-single">
                                <input type="text" name="c-number" id="cnumber" placeholder="Phone Number" required="">
                            </div>
                            <div class="input-single">
                                <textarea name="c-message" id="cMessage" cols="30" rows="10" placeholder="Type A Message"></textarea>
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
    </section>
    <!-- ==== / contact end ==== -->
</main>
@endsection
