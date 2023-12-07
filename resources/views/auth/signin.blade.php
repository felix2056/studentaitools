@extends('layouts.app')

@section('title', 'Sign In')

@section('content')
<main class="authentication" data-background="assets/images/auth-line.png">
    <section class="authentication-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                    <div class="authentication__content section">
                        <div class="intro">
                            <h2 class="light-title-sm title-animation fw-7 text-white mt-12">Login</h2>
                            <p>welcome back scholar, we missed you.</p>
                        </div>
                        <div class="authentication__inner">
                            <form method="post">
                                @csrf
                                <div class="input-single">
                                    <label for="userName">Email</label>
                                    <div class="ic-group">
                                        <input type="text" name="email" class="@error('email') is-invalid @enderror" id="userName" placeholder="E-mail" required="" value="{{ old('email') }}" autocomplete="email" autofocus />
                                        <span class="material-symbols-outlined">
                                            person
                                        </span>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-single">
                                    <label for="userPassword">Password</label>
                                    <div class="ic-group pass">
                                        <span class="material-symbols-outlined show-pass">
                                            visibility_off
                                        </span>
                                        <input type="password" name="password" class="@error('password') is-invalid @enderror" id="userPassword" placeholder="Enter Password" required="">
                                        <span class="material-symbols-outlined">
                                            key
                                        </span>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <a href="contact-us.html">Forget Password?</a>
                                </div>

                                <div class="section__content-cta">
                                    <button type="submit" class="btn btn--primary">Sign In</button>
                                </div>

                                <div class="divider">
                                    <span></span>
                                    <p>Or continue with</p>
                                    <span></span>
                                </div>
                            </form>
                            <div class="auth-cta">
                                <button>
                                    <img src="/images/google.png" alt="Image">
                                </button>
                                <button>
                                    <img src="/images/apple.png" alt="Image">
                                </button>
                                <button>
                                    <img src="/images/meta.png" alt="Image">
                                </button>
                            </div>
                        </div>

                        <div class="auth-footer">
                            <p>
                                Don't have an account?
                                <a href="{{ route('auth.signup') }}">Sign Up!</a>
                            </p>
                            <div class="section__content-cta">
                                <a href="/" class="btn btn--primary">Back To Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
