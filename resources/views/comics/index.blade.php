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
                <div>
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica prodotto</a>
                </div>
                <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
            
                    <input type="submit" value="cancella elemento" onClick="return confirm('Sicuro?');">
                </form>
            </div>
            <br> <br>
        @endforeach
    </div>
@endsection