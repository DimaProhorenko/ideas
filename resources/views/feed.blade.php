@extends('layout.layout')

@section('content')
    <div>
        @include ('shared.messages.success_message')
        @include ('shared.messages.error_message')

        @include('shared.submit_idea')
        <hr>
        @foreach ($ideas as $idea)
            <div class="mb-3">
                @include('idea.idea_card')
            </div>
        @endforeach
        <div>
            {{ $ideas->links() }}
        </div>
    </div>
@endsection
