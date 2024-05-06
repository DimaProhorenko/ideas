<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                <div>
                    <h5 class="card-title mb-0"><a href="#"> {{ $idea->user->name }}
                        </a></h5>
                </div>
            </div>
            <div class="d-flex gap-3 align-items-center">
                <a href="{{ route('ideas.show', $idea->id) }}">View</a>
                @if (auth()->id() === $idea->user_id)
                    <a href="{{ route('ideas.edit', $idea->id) }}">Edit</a>
                    <form action="{{ route('ideas.destroy', $idea->id) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm">X</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
    <div class="card-body">
        <p class="fs-6 fw-light text-muted">
            {{ $idea->body }}
        </p>
        <div class="d-flex justify-content-between">
            <div>
                <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                    </span> {{ $idea->liked }} </a>
            </div>
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $idea->created_at }} </span>
            </div>
        </div>
        @include('forms.comment_form')
        @foreach ($idea->comments as $comment)
            @include('shared.comment')
        @endforeach
    </div>
</div>
