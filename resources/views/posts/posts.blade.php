@if (count($posts) > 0)
    @foreach ($posts as $post)
        <div class="card">
            <div class="px-3 pt-3 pb-2">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        {{-- Avatar --}}
                        @include("posts.postAvatar")
                        {{-- User Name --}}
                        <div>
                            <h5 class="card-title mb-0">{{ $post->user->name }}</h5>
                        </div>
                    </div>
                    <div>
                        <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                            {{ $post->created_at }} </span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-end justify-content-between">
                    {{-- Post Content --}}
                    <div class="pe-2">
                        <p class="fs-6 fw-light text-muted mb-2">
                            {!! nl2br(e($post->content)) !!}
                        </p>
                    </div>
                    <div>
                        @if (Auth::id() == $post->user_id)
                            {{-- Delete Form --}}
                            <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Pagenation --}}
    {{ $posts->links() }}
@endif
