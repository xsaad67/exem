@extends('auth.layouts.authMain')


@section('content')

 
<div class="form-holder">
    <div class="form-content">
        <div class="form-items">
            <h3>Join the most exciting community</h3>
            
            <div class="page-links">
                <a href="{{url('login')}}">Login</a>
                <a href="{{url()->current()}}" class="active">Register</a>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="Full Name" value="{{ old('name') }}">

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif


                <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" placeholder="E-mail Address" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif


                <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password">

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif


                 <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password_confirmation" placeholder="Confirm Password">
                 
                <div class="form-button">
                    <button id="submit" type="submit" class="ibtn">Register</button> 
                    <a href="forget6.html">Forget password?</a>
                </div>
            </form>

            <div class="other-links">
                <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
            </div>
        </div>
    </div>
</div>
       

@endsection