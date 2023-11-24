@extends('layouts.app')

@section('content')
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>F1 Registration App</h1>
        <p>INDEX</p>
    </div>
    <div class="offset-2 col-8">
        @foreach($profiles as $profile)
            <p>
                <a href="{{ route('profile.show', $profile->id) }}">
                    {{$profile->firstname }}</a>
            </p>
        @endforeach
    </div>
@endsection
