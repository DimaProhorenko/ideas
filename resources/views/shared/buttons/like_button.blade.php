<form action="{{ route('ideas.like', $idea->id) }}" method="POST">
    @csrf
    <button type="submit" class="fw-light nav-link fs-6">
        <span class="far fa-heart me-1"></span> {{ $idea->likes()->count() }}
    </button>
</form>
