@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{ route('users.show', ['user' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.show') ? 'active' : '' }}">
                    User detail
                    <span class="badge badge-secondary">{{ $user->posts_count }}</span>
                </a>
                <div class="card">
                    <div class="card-header">{{ __('Timeline') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- Post Form --}}
                        @include('posts.form')
                        {{-- Posts --}}
                        @include('posts.posts')
                        {{-- @if(Auth::@check()) --}}
                            {{-- @include('posts.posts') --}}
                        {{-- @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
