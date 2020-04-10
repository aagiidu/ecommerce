@extends('layouts.app')

@section('content')

<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header sign-up-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-8 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">Create The</h2>
                    <h2 class="font-bold">Account To Unlock</h2>
                    <h2 class="font-xlight">Unlimited</h2>
                    <h3 class="font-light pt-2">Offers And Facilities Provided By Us</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Signup</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item hover-light">Signup</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Main sign-up section starts -->
<section id="ourfaq" class="bglight position-relative padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn" data-wow-delay="300ms">
                <h2 class="heading bottom40 darkcolor font-light2"><span class="font-normal">Sign</span> Up
                    <span class="divider-center"></span>
                </h2>
                <div class="col-md-8 offset-md-2 heading_space">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores explicabo laudantium, omnis provident quam reiciendis voluptatum?</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 pr-lg-0 whitebox">
                <div class="widget logincontainer">
                    <h3 class="darkcolor bottom35 text-center text-md-left">Create Your account </h3>
                    <form method="POST" action="{{ route('register') }}" 
                    	class="getin_form border-form" id="register">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="registerName" class="d-none"></label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" 
                                    placeholder="Full Name:" autofocus />

	                                @error('name')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="registerEmail" class="d-none"></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email:" />

	                                @error('email')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="registerPass" class="d-none"></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password:" />

	                                @error('password')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="registerPassConfirm" class="d-none"></label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password:" />
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <div class="form-check text-left">
                                        <input class="form-check-input" checked type="checkbox" value="" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">
                                            Remember me on this device
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="button gradient-btn w-100">Register</button>
                                <p class="top20 log-meta"> Already have an account? &nbsp;<a href="login.html" class="defaultcolor">Sign In</a> </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block pl-lg-0">
                <div class=" image login-image h-100">
                    <img src="images/register-section.jpg" alt="" class="h-100">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main sign-up section ends -->
@endsection
