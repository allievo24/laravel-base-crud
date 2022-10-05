

@extends('layout.app')

@section('title','Comic')
 
@section('content')

<div class="container">


   <h1>{{$comic->title}}</h1>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$comic->thumb}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$comic->type}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$comic->series}}</h6>
          <p class="card-text">{{$comic->description}}</p>
            <span mb-2>{{$comic->price}}</span>
          <a href="{{route('comics.index')}}" class="btn btn-primary">Torna alla lista</a>
        </div>
      </div>

</div>

@endsection