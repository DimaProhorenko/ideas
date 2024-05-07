@extends('layout.layout')

@section('content')
    <div>
        @include ('shared.messages.success_message')
        @include ('shared.messages.error_message')

        @include('shared.submit_idea')
        <hr>
        @forelse ($ideas as $idea)
            <div class="mb-3">
                @include('idea.idea_card')
            </div>
        @empty
            <h3 class="text-center mt-4">No results found.</h3>
        @endforelse
        <div>
            {{ $ideas->withQueryString()->links() }}
        </div>
    </div>
@endsection
