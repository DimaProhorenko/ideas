@extends('layout.layout')
@section('content')
    @include('users.card')
    <hr>
    @forelse($ideas as $idea)
        <div class="my-3">
            @include('idea.idea_card')
        </div>

    @empty
        <h3 class="text-center">You haven't created any ideas yet</h3>
    @endforelse
    @if (count($ideas) > 0)
        {{ $ideas->withQueryString()->links() }}
    @endif
@endsection
