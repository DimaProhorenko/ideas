@extends('layout.layout_simple')

@section('simple-content')
    <div class="col-12 col-sm-8 col-md-6 mx-auto">
        @include ('shared.messages.error_message')
        <form class="form mt-5" action="{{ route('login') }}" method="POST">
            @csrf
            <h3 class="text-center text-dark">Login</h3>
            <div class="form-group mt-3">
                <label for="email" class="text-dark">Email:</label><br>
                <input type="email" name="email" id="email" class="form-control">
                @error('email')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="password" class="text-dark">Password:</label><br>
                <input type="text" name="password" id="password" class="form-control">
                @error('password')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="remember-me" class="text-dark"></label><br>
                <input type="submit" name="submit" class="btn btn-dark btn-md" value="submit">
            </div>
            <div class="text-right mt-2">
                <a href="{{ route('register') }}" class="text-dark">Register here</a>
            </div>
        </form>
    </div>
@endsection
