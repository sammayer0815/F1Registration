@extends('layouts.app')

@section('content')
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>F1 Registration App</h1>
        <p>CREATE</p>
    </div>

    <div class="col-8 offset-2">
        <form action="{{ route('profiles.store') }}" method="post">
            @csrf
            <input type="hidden" name="user-id" value="{{ Auth::user()->id }}">
            <label for="firstname">First name:</label>
            <input type="text" name="firstname" />
            <label for="lastname">Last name:</label>
            <input type="text" name="lastname" />
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection