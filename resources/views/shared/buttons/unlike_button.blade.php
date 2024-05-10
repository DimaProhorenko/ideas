<form action="{{ route('ideas.unlike', $idea->id) }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="fw-light nav-link fs-6">
        <span class="fas fa-heart me-1"></span> {{ $idea->likes()->count() }}
    </button>
</form>
