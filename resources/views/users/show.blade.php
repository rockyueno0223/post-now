@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <aside class="col-sm-4">
                {{-- User --}}
                @include('users.card')
            </aside>
            <div class="col-sm-8">
                {{-- Tab --}}
                @include('users.navtabs')
                @if (Auth::id() == $user->id)
                    {{-- Post Form --}}
                    @include('posts.form')
                @endif
                {{-- Posts --}}
                @include('posts.posts')
            </div>
        </div>
    </div>
@endsection
