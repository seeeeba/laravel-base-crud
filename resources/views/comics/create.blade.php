@extends('layouts.app')

@section('main_content')
    <h1>Crea un nuovo fumetto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>    
    @endif

    <form action="{{route('comics.store')}}"method="post">
        @csrf
        @method('POST')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        </div>
        
        <div class="mb-3">
            <label for="type" class="form-label">Tipo fumetto</label>
            <input type="text" class="form-control" id="type" name="type" value="{{old('type')}}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie Fumetto: </label>
            <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">In vendita dal: </label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Url immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Conferma</button>
      </form>
@endsection