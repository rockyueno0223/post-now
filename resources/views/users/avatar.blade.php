@if ($user->avatar == "dog")
    <img class="rounded img-fluid" src="{{ asset('storage/image/dog.png') }}" alt="dog">
@elseif ($user->avatar == "cat")
    <img class="rounded img-fluid" src="{{ asset('storage/image/cat.png') }}" alt="cat">
@elseif ($user->avatar == "pig")
    <img class="rounded img-fluid" src="{{ asset('storage/image/pig.png') }}" alt="pig">
@elseif ($user->avatar == "lion")
    <img class="rounded img-fluid" src="{{ asset('storage/image/lion.png') }}" alt="lion">
@endif
