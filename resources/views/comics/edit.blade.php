@extends('layouts.app')

@section('main_content')
    <h1>Aggiungi prodotto</h1>

    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
        @csrf
        @method('PUT')

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <label for="title">titolo</label>
            <input type="text" name="title" id="title" value="{{ old('title') ? old('title') : $comic->title }}">
        </div>
        <br>
        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10">{{ old('description') ? old('description') : $comic->description }}</textarea>
        </div>
        <br>
        <div>
            <label for="thumb">url immagine</label>
            <input type="text" name="thumb" id="thumb" value="{{ old('thumb') ? old('thumb') : $comic->thumb }}">
        </div>
        <br>
        <div>
            <label for="price">prezzo</label>
            <input type="text" name="price" id="price" value="{{ old('price') ? old('price') : $comic->price }}">
        </div>
        <br>
        <div>
            <label for="series">serie</label>
            <input type="text" name="series" id="series" value="{{ old('series') ? old('series') : $comic->series }}">
        </div>
        <br>
        <div>
            <label for="sale_date">prima pubblicazione</label>
            <input type="text" name="sale_date" id="sale_date" value="{{ old('sale_date') ? old('sale_date') : $comic->sale_date }}">
        </div>
        <br>
        <div>
            <label for="type">tipo del comic</label>
            <input type="text" name="type" id="type" value="{{ old('type') ? old('type') : $comic->type }}">
        </div>
        <br>
        <button>Salva</button>
    </form>
@endsection