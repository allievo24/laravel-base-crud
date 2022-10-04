@extends('layout.app')
@section('title','lista dei formati')

@section('content')
<div class="container">
    <table class="table table-striped">


    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">thumb</th>
            <th scope="col">price</th>
            <th scope="col">series</th>
            <th scope="col">sale_date</th>
            <th scope="col">type</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
          <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->thumb}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>


          </tr>
          @endforeach
        </tbody>
      </table>
  </table>
</div>
    
@endsection