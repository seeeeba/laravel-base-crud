@extends('layouts.app')

@section('main_content')

    <div class="card">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$comic->title}}</h5>
          <div class="card-text">{{$comic->description}}</div>
          <div>Tipo fumetto: {{$comic->type}}</div>
          <div>Prezzo: {{$comic->price}}</div>
          <div>Serie fumetto: {{$comic->series}}</div>
          <div>In vendita dal: {{$comic->sale_date}}</div>
        </div>
    </div>
@endsection