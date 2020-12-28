@extends('layouts.app')

@section('content')
@push('styles')
<style>
.login-btn{
    width:150px;
    padding:5px;
    color:#fff;
    background: #19AAF8;
    border:none;
    font-size:20px;
    cursor:pointer;
    font-family:lato;
}
.login{
    font-family:lato;
    /* margin: 0;
    margin-top:-50px !important;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%); */
    /* position:relative; */
}
.parent-container{
    position:relative;
    height:100%:
    height:100vh;
}
.all-container{
    margin: 0;
    margin-top:-50px !important;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.log-text{
    margin-left:-13px;
}
@media screen and (max-width:768px){
    .log-heading{
        font-size:20px;
    }
    .card-body{
        padding:20px !important;
    }
    .card-content{
        height:90%;
    }
}
</style>
@endpush
<div class="container-fluid parent-container" style="height: 100vh; height: 100%; background-image: url('{{URL::asset('public/assets/images/background.png')}}')">
    <section class="login" >
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-8 col-md-10 col-sm-12 all-container">
                <div class="card p-4 card-content">
                    <div class="login_img text-center">
                        <img style="width:120px;" src="{{URL::asset('public/assets/images/full_width_logo.png')}}" alt="">
                    </div>
                    <div class="card-body" style="padding:50px;">
                        <div class="log-text">
                            <h3 class="text-left mb-4 log-heading">Log in to your account</h3>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row d-flex flex-column">
                            <div class="label">
                            <label for="email" class="col col-form-label text-md-left pl-0">{{ __('E-Mail Address') }}</label>
                            </div>

                                <div class="input">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>

                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row d-flex flex-column">
                            <div class="label">
                            <label for="password" class="col col-form-label text-md-left pl-0">{{ __('Password') }}</label>
                            </div>


                                <div class="input">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                              <span class="text-right"><a href="{{ route('password.request')}}">Forget password ?</a></span>

                            </div>
                            <div class="form-group text-center mb-0">
                                <div class="btn-block">
                                    <button type="submit" class="login-btn">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="sign-up">
                                <p>Haven't account? <a href="{{ route('register') }}">Sign Up</a></p>
                                </div>

                            </div>


                            <div class="form-group">
                                <a href="{{ url('/login/google') }}" class="btn btn-block text-light font-weight-bold" style="background: #ED3739;"> <i class="fab fa-google"></i>   Login with Google</a>
                                <a href="{{ url('/login/facebook') }}" class="btn btn-block text-light font-weight-bold" style="background:  #3b5998;"><i class="fab fa-facebook-f"></i>   Login with Facebook</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

