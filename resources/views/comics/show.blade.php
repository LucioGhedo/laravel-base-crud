@extends('layouts.app')

@section('main_content')
    <h1>{{$comic->title}}</h1>
    <div>
        Descrizione: {{$comic->description}}
    </div>
    <img src="{{ $comic->thumb }}" alt="{{$comic->title}}">
    <div>
        Prezzo: {{$comic->price}}
    </div>
    <div>
        Series: {{$comic->series}}
    </div>
    <div>
        Sale date: {{$comic->sale_date}}
    </div>
    <div>
        Tipo: {{$comic->type}}
    </div>
    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
        @csrf
        @method('DELETE')

        <input type="submit" value="cancella elemento" onClick="return confirm('Sicuro?');">
    </form>
@endsection