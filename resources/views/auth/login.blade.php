@extends('layouts.app') 
@section('links')
<style type="text/css">
.login{
    margin:auto;
}
.dtulog{
    
    margin-left: auto;
    margin-right: auto;
    display: block;
    max-width: 40%;
    max-height: 40%;
}

</style>
@endsection
@section('content')
<section class="cover cover-fullscreen height-100 imagebg" data-gradient-bg="#4876BD,#5448BD,#8F48BD,#BD48B1">

    <div class="container pos-vertical-center">
        <div class="row" >
            <div class="login col-md-4 col-lg-4" >

                

                
                <form method="POST" action="http://dtutimes.me/login" class="row">
                    <input type="hidden" name="_token" value="GQRDgzl4WOdyAhm1fgSFr2Iknhj3YGCTsyuKFD9C">
                        <div class="col-md-12 text-center">
                            <img src="{{ asset('img/logo-white.png') }}">
                        </div>
                        <div class="col-md-12 text-center">
                            <h3>DTUTIMES</h3>
                        </div>
                        <div class="col-md-12">
                            <input placeholder="Email" type="email" name="email" value=""
                                required autofocus> 
                                                        </div>
                        <div class="col-md-12">
                            <input placeholder="Password" type="password" name="password"
                                required>
                        </div>
                        
                        
                        <div class="col-md-12">
                            <button class="btn btn--primary type--uppercase" type="submit">Login</button>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="input-checkbox">
                                <input id="checkbox" type="checkbox" name="remember" >
                                <label for="checkbox"></label>
                            </div>
                            <span>Remember me</span>

                            <br>
                            <span class="type--fine-print block" >Forgot your username or password?
                                <a href="http://dtutimes.me/password/email">Recover account</a>
                            </span>
                           
                        </div>
                </form>
                
                <div class="text-block text-center">
                    
                </div>
            </div>
        </div>
     </div>
</section>
    

@endsection
 
{{-- 

    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
             @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                

                <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
            </div>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

            <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
        </div>
    </div>
</form> --}}