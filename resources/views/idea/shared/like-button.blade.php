<div>
    @if (!($editingidea ?? false))
    @auth()
        @if (!Auth::user()->likesIdea($idea))
            <form action="{{ route('idea.like', $idea->id) }}" method="post">
                @csrf
                <button type="submit" class="btn btn
                +-primary btn-sm mb-2"> <span class="fas fa-thumbs-up"></span>
                    {{ $idea->likes()->count() }} </button>



            </form>
        @else
            <form action="{{ route('idea.unlike', $idea->id) }}" method="post">
                @csrf

                <button class="btn btn-danger btn-sm mb-2"> <span class="fas fa-thumbs-down"></span>
                    {{ $idea->likes()->count() }} </button>

            </form>
        @endif
    @endauth
    @guest
        <a href="{{ route('login') }}" class="btn btn-primary btn-sm mb-2"> <span class="fas fa-thumbs-up"></span>
            {{ $idea->likes()->count() }} </a>
    @endguest
    @endif
</div>
