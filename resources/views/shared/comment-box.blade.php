<div>
    <form action="{{ route('idea.comments.store', $idea ->id) }}" method="POST">
        @csrf
        <div class="mb-3">

            <textarea name="comment" id="comment" class="fs-6 form-control" rows="1"></textarea>

            @error('comment')
                <span class="text-danger mt-2"> {{ $message }} </span>
            @enderror
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-sm"> Post Comment </button>
        </div>

    </form>
    @if ($idea->comments->count() > 0)
        <hr>
    @endif

    @foreach($idea->comments as $comment)
    <div class="d-flex align-items-start">
        <img style="width:35px ;height:35px" class="me-2 avatar-sm rounded-circle"
            src="{{ $comment->user->getImageURL() }}" alt="Luigi Avatar">
        <div class="w-100">
            <div class="d-flex mt-2 justify-content-between">
                <a href="{{ route('users.show',$comment ->user->id) }}" class="mb-0">{{ $comment->user->name }}
            </a>
                <small class="fs-6 fw-light text-muted"> {{$comment ->created_at->diffForHumans()}}</small>
            </div>
            <p class="fs-6 mt-1 fw-light">
               {{ $comment->comment }}
            </p>
        </div>
    </div>
    @endforeach
</div>
