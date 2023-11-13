@extends('layouts.app')
@section('style1')
    {{ asset('css/imagen.css') }}
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                          <div class="col-12 text-center mt-5">
                            <img src="
                            https://s3-alpha-sig.figma.com/img/910f/57f9/8dc60c054e2e8a802d0cc7f7a7fc1c97?Expires=1701043200&Signature=q6iaa51oCDZacGoq3QTMDDJYYsl1e7pZe1mwEzO0dMOufkT7qVB1gTaKAfM0c0Y8766TLU53lSAy8-4QO-52drnsnatR-2Y5I1noMCscZcAjj-gSsbQnzY-XJBFiMH377JFer-yLHlDJG~djnQHQIuYn3GD5PGlepgFjJM6nrZKa0Pwv7OJ3JxksOQI0pxUA-omDj7nCxDtE9FSNQXvNvozxsehiZwih~nvOlZ62kJtl7xPKed2cL0XsQ3aTs~khEx77YK5ToHc6WHRHVZbk9g2LsaLIkAh4Sz-hcbw47KKYYc3Q3z5P3vWDP8oBnompSC7ip54AcDAO0l97DcaGcA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4 
                            " alt="Avatar" class="img-fluid mx-auto mb-3 avatar-img">
                          </div>
                        </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
