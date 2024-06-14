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
                    <p>{!! link_to_route('users.show', 'View profile', ['user' => $user->id]) !!}</p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    {{-- Pagenation --}}
    {{ $users->links() }}
@endif
