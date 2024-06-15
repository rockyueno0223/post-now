@if (count($users) > 0)
    <ul class="list-unstyled">
        @foreach ($users as $user)
        <li class="media">
            {{-- <img class="mr-2 rounded" src="{{ Gravatar::get($user->email, ['size' => 50]) }}" alt=""> --}}
            <img src="..." alt="img">
            <div class="media-body">
                <div>
                    {{ $user->name }}
                </div>
                <div>
                    {{-- Link to User Detail --}}
                    <a href="{{ route('users.show', ['user' => $user->id]) }}">View profile</a>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    {{-- Pagenation --}}
    {{ $users->links() }}
@endif
