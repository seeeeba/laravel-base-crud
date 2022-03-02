@extends('layouts.app')

@section('main_content')

    <div class="card">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$comic->title}}</h5>
          <div class="card-text">{{$comic->description}}</div>
          <div class="card-text">Tipo fumetto: {{$comic->type}}</div>
          <div class="card-text">Prezzo: {{$comic->price}}</div>
          <div class="card-text">Serie fumetto: {{$comic->series}}</div>
          <div class="card-text">In vendita dal: {{$comic->sale_date}}</div>
          <div><a class="btn btn-primary" href="{{route('comics.edit',['comic'=>$comic->id])}}">Modifica</a></div>
          <div>
            <form action="{{route('comics.destroy',['comic'=>$comic->id])}}" method="post">
              @csrf
              @method('DELETE')

              <button class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare l\'articolo?')">Elimina</button>
            </form>
          </div>
        </div>
    </div>
@endsection