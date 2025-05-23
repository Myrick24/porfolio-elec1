<div class="card mt-2">
    <div class="card-header pb-0 mb-0 border-0 mt-2">
        <h5 class=" mb-0">Top Users</h5>
    </div>
    <div class="card-body">
        @foreach ($topUsers as $users )
            <div class="hstack gap-2 mb-3">
                <div class="avatar">
                    <a href="{{ route('users.show',$users->id) }}"><img style="height: 35px;width:35px" class="avatar-img rounded-circle"
                            src="{{ $users->getImageURL() }}" alt=""></a>
                </div>
                <div class="overflow-hidden">
                    <a class="h6 mb-0" href="{{ route('users.show',$users->id) }}">{{ $users->name }}</a>
                    <p class="mb-0 small text-truncate"> {{ $users->email }}</p>
                </div>
                <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="{{ route('users.show',$users->id) }}">
                    <span class="fas fa-brain me-1">
                    </span> {{ $users->ideas()->count() }} </a></a>
            </div>
        @endforeach

    </div>
</div>
