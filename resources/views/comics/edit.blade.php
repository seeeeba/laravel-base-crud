@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <h2>Modifica Fumetto</h2>

            

            <form action="{{route('comics.update', ['comic'=>$comic->id])}}"method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo di fumetto</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie Fumetto</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">In vendita dal</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Url immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
                    <img src="{{$comic->thumb}}" alt="">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description">{{$comic->description}}"</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Conferma</button>
            </form>
        </div>
    </section>
@endsection