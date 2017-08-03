@extends('layouts.no-header')
@section('content')


<div class="auth-box">
    <div class="row m-b-20">
        <div class="col-md-12">
            <h3 class="text-left txt-primary">Sign In</h3>
        </div>
    </div>
    <hr/>
    <form class="md-float-material" role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control" placeholder="{{ Lang::get('views.email_address') }}"
                   name="email" value="{{ old('email') }}" required autofocus>
        </div>
        <span class="md-line"></span>
        @if ($errors->has('email'))
            <span class="help-block text-danger">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="form-control" name="password"
                   placeholder="{{ Lang::get('views.password') }}" required>
        </div>
        <span class="md-line"></span>
        @if ($errors->has('password'))
            <span class="help-block text-danger">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <div class="row m-t-25 text-left">
            <div class="col-sm-7 col-xs-12">
                <div class="checkbox-fade fade-in-primary">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                        <span class="text-inverse f-14">Remember me</span>
                    </label>

                </div>
            </div>
            <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                <a class="text-right f-w-600 text-inverse" href="{{ route('password.request') }}">
                    Fogot Your Password
                </a>
            </div>
        </div>
        <div class="row m-t-30">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                    Sign in
                </button>
            </div>
        </div>
    </form>
    <hr/>
</div>

@endsection