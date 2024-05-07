<div class="card">
    <form action="">

        <div class="px-3 pt-4 pb-2">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center">
                    <img style="width:150px" class="me-3 avatar-sm rounded-circle"
                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                    <div>
                        <input name="name" type="text" value="{{ $user->name }}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="image" class="d-block mb-1">Profile Picture</label>
                <input type="file" class="form-control">
            </div>
            <div class="px-2 mt-4">
                <h5 class="fs-5"> About : </h5>
                <textarea name="bio" id="bio" cols="30" rows="3" class="form-control mb-3">{{ $user->bio ?? '' }}</textarea>
                <div class="d-flex justify-content-start">
                    <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-user me-1">
                        </span> 120 Followers </a>
                    <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-brain me-1">
                        </span> {{ $user->ideas()->count() }} </a>
                    <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-comment me-1">
                        </span> {{ $user->comments()->count() }} </a>
                </div>
                @auth()
                    @if (Auth::id() !== $user->id)
                        <div class="mt-3">
                            <button class="btn btn-primary btn-sm"> Follow </button>
                        </div>
                    @endif
                @endauth
            </div>
        </div>
    </form>
</div>
