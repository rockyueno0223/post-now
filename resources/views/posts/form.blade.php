<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <textarea name="content" class="form-control" rows="2"></textarea>
        <button type="submit" class="btn btn-primary btn-block">Post</button>
    </div>
</form>
