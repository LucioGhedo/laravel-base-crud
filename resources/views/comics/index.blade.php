@extends('layouts.app')

@section('main_content')
    <h1>Comics:</h1>
    
    <div>
        @foreach ($comics as $comic)
            <div>
                <div>
                    Titolo: {{$comic->title}}
                </div>
                <img src="{{ $comic->thumb }}" alt="{{$comic->title}}">
                <div>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Comic Details</a>
                </div>
            </div>
            <br> <br>
        @endforeach
    </div>
@endsection