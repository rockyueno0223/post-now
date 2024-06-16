<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <textarea name="content" class="form-control" rows="2"></textarea>
        <div class="d-grid gap-3 col-4 mx-auto">
            <button type="submit" class="btn btn-primary mt-2 mb-3" type="button">Post</button>
        </div>
    </div>
</form>
