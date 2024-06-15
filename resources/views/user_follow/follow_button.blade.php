@if (Auth::id() != $user->id)
    @if (Auth::user()->is_following($user->id))
    <!-- Unfollow button form -->
    <form action="{{ route('user.unfollow', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-block">Unfollow</button>
    </form>
    @else
    <!-- Follow button form -->
    <form action="{{ route('user.follow', $user->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary btn-block">Follow</button>
    </form>
    @endif
@endif
