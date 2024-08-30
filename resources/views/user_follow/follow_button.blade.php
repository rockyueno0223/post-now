@if (Auth::id() != $user->id)
    @if (Auth::user()->is_following($user->id))
    <!-- Unfollow button form -->
    <form action="{{ route('user.unfollow', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-danger" type="button">Unfollow</button>
        </div>
    </form>
    @else
    <!-- Follow button form -->
    <form action="{{ route('user.follow', $user->id) }}" method="POST">
        @csrf
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-dark" type="button">Follow</button>
        </div>
    </form>
    @endif
@endif
