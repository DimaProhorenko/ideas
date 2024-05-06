<form action="{{ route('ideas.comments.store', $idea->id) }}" method="POST">
    @csrf
    <div class="mb-3">
        <textarea name="body" class="fs-6 form-control" rows="1"></textarea>
    </div>
    <div>
        <button class="btn btn-primary btn-sm"> Post Comment </button>
    </div>
</form>
