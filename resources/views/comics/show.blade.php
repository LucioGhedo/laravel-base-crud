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
@endsection