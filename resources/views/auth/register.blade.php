@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
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

                        <div class="row mb-3">
                            <label for="avatar" class="col-md-4 col-form-label text-md-end">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
                                {{-- Avatar Form --}}
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="card w-50" for="dog">
                                        <label for="dog">
                                            <img src="{{ asset('storage/image/dog.png') }}" class="card-img-top" alt="dog">
                                            <div class="card-body d-flex justify-content-center">
                                                <input type="radio" name="avatar" id="dog" value="dog" class="form-check-input">
                                            </div>
                                        </label>
                                    </div>
                                    <div class="card w-50">
                                        <label for="cat">
                                            <img src="{{ asset('storage/image/cat.png') }}" class="card-img-top" alt="cat">
                                            <div class="card-body d-flex justify-content-center">
                                                <input type="radio" name="avatar" id="cat" value="cat" class="form-check-input">
                                            </div>
                                        </label>
                                    </div>
                                    <div class="card w-50">
                                        <label for="pig">
                                            <img src="{{ asset('storage/image/pig.png') }}" class="card-img-top" alt="pig">
                                            <div class="card-body d-flex justify-content-center">
                                                <input type="radio" name="avatar" id="pig" value="pig" class="form-check-input">
                                            </div>
                                        </label>
                                    </div>
                                    <div class="card w-50">
                                        <label for="lion">
                                            <img src="{{ asset('storage/image/lion.png') }}" class="card-img-top" alt="lion">
                                            <div class="card-body d-flex justify-content-center">
                                                <input type="radio" name="avatar" id="lion" value="lion" class="form-check-input">
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark">
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
