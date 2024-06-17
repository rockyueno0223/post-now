@if (count($users) > 0)
    <div class="container">
        <ul class="list-unstyled">
            @foreach ($users as $user)
                <div class="px-3 pt-3 pb-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            {{-- Avatar --}}
                            <div style="width:40px" class="me-2 avatar-sm rounded-circle">
                                @include("users.avatar")
                            </div>
                            {{-- User Name linking to User Page --}}
                            <div class="ps-2">
                                <a class="text-decoration-none" href="{{ route('users.show', ['user' => $user->id]) }}">
                                    <h5 class="mb-0">{{ $user->name }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>
        {{-- Pagenation --}}
        {{ $users->links() }}
    </div>
@endif
