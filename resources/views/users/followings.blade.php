@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- User --}}
            @include('users.card')
        </aside>
        <div class="col-sm-8">
            {{-- Tabs --}}
            @include('users.navtabs')
            {{-- Users --}}
            @include('users.users')
        </div>
    </div>
@endsection
