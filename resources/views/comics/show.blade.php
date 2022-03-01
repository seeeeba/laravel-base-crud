@extends('layouts.app')

@section('main_content')

    <div class="card">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$comic->title}}</h5>
          <div class="card-text">{{$comic->description}}</div>
        </div>
    </div>
@endsection