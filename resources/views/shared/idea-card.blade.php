<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px;height:50px" class="me-2 avatar-sm rounded-circle"
                    src="{{ $idea->user->getImageURL() }}" alt="{{ $idea->user->name }}">
                <div>
                    <h5 class="card-title mb-0"><a href="{{ route('users.show',$idea ->user->id) }}"> {{ $idea->user->name }}
                        </a></h5>
                </div>
            </div>

            <div>
                <form method="POST" action="{{ route('idea.destroy', $idea->id) }}">
                    @csrf
                    @method('DELETE')
                    @if (!$idea ->id == request() ->segment(count(request() ->segments())))
                        <a href={{ route('idea.show', $idea->id) }} class="btn btn-primary btn-sm"> <span class="fas fa-eye"></span></a>
                    @endif

                    @if(auth()->id() == $idea->user_id)
                    @if (!($editingidea ?? false))
                        <a href={{ route('idea.edit', $idea->id) }} class="btn btn-primary btn-sm"> <span class="fas fa-pencil"></span></a>
                        @endif

                        <button class="btn btn-danger btn-sm"> <span class="fas fa-trash"></span></button>

                        
                    @endif
                </form>

            </div>

        </div>
    </div>



    <div class="card-body">
        @if ($editingidea ?? false)
            <form action="{{ route('idea.update',$idea->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <textarea name="content" class="form-control" id="content" rows="3">{{$idea -> content}}</textarea>

                    @error('content')
                        <span class="text-danger mt-2"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="">
                    <button class="btn btn-dark btn-sm mb-2"> Update </button>
                </div>
            </form>
        @else
            <p class="fs-6 fw-light text-muted">
                {{ $idea->content }}
            </p>
        @endif
        <div class="d-flex justify-content-between">
            @include('idea.shared.like-button')
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $idea->created_at ->diffForHumans() }} </span>
            </div>
        </div>
        @if (!($editingidea ?? false))
            @include('shared.comment-box')
        @endif
    </div>
</div>
