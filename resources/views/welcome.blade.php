@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 d-flex justify-content-center align-items-center">
                <img src="{{ asset('storage/image/main-visual.png') }}" alt="Post Now!" class="w-100">
            </div>
            <div style="height: 280px" class="col-md-5 text-center d-flex flex-column justify-content-center align-items-center">
                <h1 style="font-family: 'Barlow Condensed'" class="">Post Now!</h1>
                <p class="fs-1 fw-medium mb-4" style="font-family: 'Barlow Condensed'">Share Now!</p>
                <a href="{{ route('register') }}" class="btn btn-lg btn-dark">Start Now!</a>
            </div>
        </div>
    </div>
@endsection
