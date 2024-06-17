@if ($post->user->avatar == "dog")
    <img style="width:40px" class="me-2 avatar-sm rounded-circle" src="{{ asset('storage/image/dog.png') }}" alt="dog">
@elseif ($post->user->avatar == "cat")
    <img style="width:40px" class="me-2 avatar-sm rounded-circle" src="{{ asset('storage/image/cat.png') }}" alt="cat">
@elseif ($post->user->avatar == "pig")
    <img style="width:40px" class="me-2 avatar-sm rounded-circle" src="{{ asset('storage/image/pig.png') }}" alt="pig">
@elseif ($post->user->avatar == "lion")
    <img style="width:40px" class="me-2 avatar-sm rounded-circle" src="{{ asset('storage/image/lion.png') }}" alt="lion">
@endif
