@extends('layouts.app')
@section('seo_title', __('main.nav.reset_password'))

@section('content')

@include('partials.page_top', ['title' => __('main.reset_password')])

<div class="section">
    <div class="custom-container">

        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="login_form_inner">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <label for="email">{{ __('main.form.email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('main.new_password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required >
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('main.password_confirmation') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required >
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('main.form.send') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
</div>

@endsection
