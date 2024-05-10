@auth
    @if (Auth::user()->likesIdea($idea))
        @include('shared.buttons.unlike_button')
    @else
        @include('shared.buttons.like_button')
    @endif
@endauth

@guest
    @include('shared.buttons.like_button')
@endguest
