<div class="card">
    <div class="px-3 pt-4 pb-2">
        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:150px;height:150px" class="me-3 avatar-sm rounded-circle"
                    src="{{ $user->getImageURL() }}" alt="Mario Avatar">
                <div>
                    <h3 class="card-title mb-0">
                        <input type="text" name="name" class="form-control" id="name"
                            value="{{ $user->name }}">
                        @error('user')
                            <span class="text-danger fs-6"> {{ $message }} </span>
                        @enderror
                    </h3>
                </div>
            </div>
            <div>

                @auth()
                    @if (Auth::id() === $user->id)
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm"> Show Profile </a>
                    @endif
                @endauth
            </div>
        </div>
        <div class="mt-3">
            <label for="image" class="form-label"> Change Profile Picture </label>
            <input type="file" class="form-control" id="image" name="image">
            @error('profile_image')
                <span class="text-danger mt-2"> {{ $message }} </span>

            @enderror
        </div>
        <div class="px-2 mt-4">
            <h5 class="fs-5"> Bio : </h5>

            <textarea name="bio" class="form-control" id="bio" rows="3"> {{$user -> bio }}</textarea>

            @error('bio')
                <span class="text-danger mt-2"> {{ $message }} </span>
            @enderror
            <button class="btn btn-primary btn-sm mt-3"> Save Bio </button>

            <div class="d-flex justify-content-start mt-2">
                <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-user me-1">
                    </span> 0 Followers </a>
                <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-brain me-1">
                    </span> {{ $user->ideas()->count() }} </a>
                <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-comment me-1">
                    </span> {{ $user->comments()->count() }} </a>
            </div>
        </div>
        </form>
    </div>
</div>
