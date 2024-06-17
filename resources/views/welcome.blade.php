@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div style="height: 360px" class="w-75 bg-secondary rounded text-center text-light d-flex flex-column justify-content-center align-items-center">
                <h1 class="mb-3">Post Now!</h1>
                <a href="{{ route('register') }}" class="btn btn-lg btn-primary">Register now!</a>
            </div>
        </div>
    </div>
@endsection
