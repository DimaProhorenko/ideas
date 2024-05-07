<div class="card">
    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="px-3 pt-4 pb-2">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center gap-3">
                    @include('users.profile_image')
                    <div>
                        <input name="name" type="text" value="{{ $user->name }}" class="form-control">
                        @error('name')
                            <small class="d-block my-1 text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="image" class="d-block mb-1">Profile Picture</label>
                <input type="file" class="form-control" name="image", id="image">
                @error('image')
                    <small class="d-block my-1 text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="px-2 mt-4">
                <h5 class="fs-5"> About : </h5>
                <div class="form-group">
                    <textarea name="bio" id="bio" cols="30" rows="3" class="form-control mb-3">{{ $user->bio ?? '' }}</textarea>
                    @error('bio')
                        <small class="d-block my-1 text-danger">{{ $message }}</small>
                    @enderror

                </div>
                <button type="submit" class="btn btn-dark mb-3">Save</button>
                <div class="d-flex justify-content-start">
                    <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-user me-1">
                        </span> 120 Followers </a>
                    <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-brain me-1">
                        </span> {{ $user->ideas()->count() }} </a>
                    <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-comment me-1">
                        </span> {{ $user->comments()->count() }} </a>
                </div>
            </div>
        </div>
    </form>
</div>
