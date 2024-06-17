<div class="card mb-3">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>
    <div class="card-body p-5">
        @include("users.avatar")
    </div>
</div>
{{-- Follow / Unfollow Button --}}
@include('user_follow.follow_button')
