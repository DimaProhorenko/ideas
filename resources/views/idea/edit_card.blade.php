<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-3">
                @include('idea.profile_image')
                {{-- <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar"> --}}
                <div>
                    <h5 class="card-title mb-0"><a href="#"> Mario
                        </a></h5>
                </div>
            </div>
            <div class="d-flex gap-3 align-items-center">
                <a href="{{ route('ideas.show', $idea->id) }}">View</a>
                <form action="{{ route('ideas.destroy', $idea->id) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('ideas.update', $idea->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <textarea name="idea" class="form-control" id="idea" rows="3">{{ $idea->body }}</textarea>
                @error('idea')
                    <small class="fs-6 text-danger d-block mt-1">{{ $message }}</small>
                @enderror
            </div>
            <div class="">
                <button class="btn btn-dark"> Update </button>
                <a href="{{ URL::previous() }}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>
