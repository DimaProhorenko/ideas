@extends('layout.layout_simple')

@section('simple-content')
    <div class="row">
        <div class="col-3">
            @include('layout.left_sidebar')
        </div>
        <div class="col-6">
            @yield('content')
        </div>
        <div class="col-3">
            @include('layout.right_sidebar')
        </div>
    </div>
@endsection
