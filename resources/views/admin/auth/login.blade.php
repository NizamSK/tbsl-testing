@extends('admin.common.main')
@section('content')

<div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center min-vh-100">
                    <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                        <div class="row">
                            <div class="col-lg-5 rounded-left justify-content-center">
                                <img src="{{ asset('assets/images/tbsl-award.png') }}" width="95%" style="margin-top: 40px;margin-left: 40px;" >
                            </div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center mb-5">
                                        <a href="{{ route('admin.home') }}" class="text-dark font-size-22 font-family-secondary" >
                                            <img src="{{ asset('website/assets/images/logo.png') }}">
                                        </a>
                                    </div>
                                    <h1 class="h5 mb-1">Welcome Back!</h1>
                                    <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                                    <form method="POST" action="{{ route('login') }}" class="user">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Email Address">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password"  placeholder="Password" equired autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success btn-block waves-effect waves-light"> Log In </button>

                                        <div class="text-center mt-4">
                                            <h5 class="text-muted font-size-16">Follow us:</h5>

                                            <ul class="list-inline mt-3 mb-0">
                                                <li class="list-inline-item">
                                                    <a target="_blank"  href="https://www.facebook.com/ConcentrixIN" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a target="_blank"  href="https://www.instagram.com/concentrixindia" class="social-list-item border-danger text-danger"><i class="mdi mdi-instagram"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a  target="_blank" href="https://twitter.com/concentrixind" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a target="_blank"  href="https://www.linkedin.com/company/concentrix/" class="social-list-item border-info text-info"><i class="mdi mdi-linkedin"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a target="_blank"  href="https://youtube.com/CNXCorporation" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-youtube"></i></a>
                                                </li>
                                            </ul>
                                        </div>

                                    </form>

                                    <div class="row mt-4">
                                        <div class="col-12 text-center">
                                            <p class="text-muted mb-2"><a href="pages-recoverpw.html" class="text-muted font-weight-medium ml-1">Forgot your password?</a></p>
                                            {{-- <p class="text-muted mb-0">Don't have an account? <a href="pages-register.html" class="text-muted font-weight-medium ml-1"><b>Sign Up</b></a></p> --}}
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div> <!-- end .padding-5 -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- end .w-100 -->
                </div> <!-- end .d-flex -->
            </div> <!-- end col-->
        </div> <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

@endsection
