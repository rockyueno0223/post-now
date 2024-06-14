@extends('layouts.app')

@section('content')
    <div class="row">
        {{-- User Aside --}}
        <aside class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    {{-- <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt=""> --}}
                </div>
            </div>
        </aside>
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified mb-3">
                {{-- User Detail Tab --}}
                <li class="nav-item">
                    <a href="{{ route('users.show', ['user' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.show') ? 'active' : '' }}">
                        TimeLine
                        <span class="badge badge-secondary">{{ $user->posts_count }}</span>
                    </a>
                </li>
                {{-- Follow Tab --}}
                <li class="nav-item"><a href="#" class="nav-link">Followings</a></li>
                {{-- Follower Tab --}}
                <li class="nav-item"><a href="#" class="nav-link">Followers</a></li>
            </ul>
            @if (Auth::id() == $user->id)
                {{-- Post Form --}}
                @include('posts.form')
            @endif
            {{-- Posts --}}
            @include('posts.posts')
        </div>
    </div>
@endsection
