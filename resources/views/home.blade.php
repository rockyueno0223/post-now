@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <aside class="col-sm-4">
                {{-- User --}}
                @include('users.card')
            </aside>
            <div class="col-sm-8">
                {{-- Post Form --}}
                @include('posts.form')
                {{-- Posts --}}
                @include('posts.posts')
            </div>
        </div>
    </div>
@endsection
