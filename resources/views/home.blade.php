@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <aside class="col-sm-4">
                {{-- User --}}
                @include('users.card')
            </aside>
            <div class="col-sm-8">
                {{-- Link to User detail view (delete latar if not necessary) --}}
                <a href="{{ route('users.show', ['user' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.show') ? 'active' : '' }}">
                    User detail
                    <span class="badge badge-secondary">{{ $user->posts_count }}</span>
                </a>
                {{-- Post Form --}}
                @include('posts.form')
                {{-- Posts --}}
                @include('posts.posts')
            </div>
        </div>
    </div>
@endsection
