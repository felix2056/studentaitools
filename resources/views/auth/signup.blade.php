@extends('layouts.app')

@section('title', 'Sign Up')

@section('content')
<main class="authentication auth-create" data-background="assets/images/auth-line.png">
    <section class="authentication-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                    <div class="authentication__content section">
                        <div class="intro">
                            <h2 class="light-title-sm title-animation fw-7 text-white mt-12">Sign Up</h2>
                            <p>Getting started is easy</p>
                        </div>
                        <div class="authentication__inner">
                            <form method="post">
                                @csrf
                                <div class="input-single">
                                    <label for="name">Your Name</label>
                                    <div class="ic-group">
                                        <input type="text" name="name" class="@error('name') is-invalid @enderror" id="name" placeholder="Enter Full Name" required="" value="{{ old('name') }}" autocomplete="name" autofocus />
                                        <span class="material-symbols-outlined">
                                            person
                                        </span>
                                    </div>
                                    @error('name')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-single">
                                    <label for="email">Your Email</label>
                                    <div class="ic-group">
                                        <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email" placeholder="Enter E-Mail" required="" value="{{ old('email') }}" autocomplete="email" autofocus />
                                        <span class="material-symbols-outlined">
                                            mail
                                        </span>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-single">
                                    <label for="password">Password</label>
                                    <div class="ic-group pass">
                                        <span class="material-symbols-outlined show-pass">
                                            visibility_off
                                        </span>
                                        <input type="password" name="password" class="@error('password') is-invalid @enderror" id="password" placeholder="Enter Password" required="">
                                        <span class="material-symbols-outlined">
                                            key
                                        </span>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                                <div class="input-single">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <div class="ic-group pass">
                                        <span class="material-symbols-outlined show-pass">
                                            visibility_off
                                        </span>
                                        <input type="password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm Password" required="">
                                        <span class="material-symbols-outlined">
                                            key
                                        </span>
                                    </div>
                                    @error('password_confirmation')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="section__content-cta">
                                    <button type="submit" class="btn btn--primary">Create Account</button>
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
                                Have an account?
                                <a href="{{ route('auth.signin') }}">Sign In!</a>
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
