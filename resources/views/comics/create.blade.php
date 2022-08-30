@extends('layouts.app')

@section('main_content')
    <h1>Aggiungi prodotto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">titolo</label>
            <input type="text" name="title" id="title">
        </div>
        <br>
        <div>
            <label for="description">descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <br>
        <div>
            <label for="thumb">url immagine</label>
            <input type="text" name="thumb" id="thumb">
        </div>
        <br>
        <div>
            <label for="price">prezzo</label>
            <input type="text" name="price" id="price">
        </div>
        <br>
        <div>
            <label for="series">serie</label>
            <input type="text" name="series" id="series">
        </div>
        <br>
        <div>
            <label for="sale_date">prima pubblicazione</label>
            <input type="datetime-local" name="sale_date" id="sale_date">
        </div>
        <br>
        <div>
            <label for="type">tipo del comic</label>
            <input type="text" name="type" id="type">
        </div>
        <br>
        <button>Salva</button>
    </form>
@endsection