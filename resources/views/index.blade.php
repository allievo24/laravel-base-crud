@extends('layout.app')
@section('title','lista dei formati')

@section('content')

<div class="container-fluid">
   
 <a href="{{route('comics.create')}}" class='btn btn-primary mt-3'>Inserisci Comic</a>
 
 <table class="table table-striped">
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
            <th scope="col">azioni</th>


          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
          <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->thumb}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
            <td><a class="btn btn-primary"href="{{route('comics.show',['comic'=>$comic->id])}}">Vedi</a></td>
            <td><a class="btn btn-warning"href="{{route('comics.edit',['comic'=>$comic->id])}}">Modifica</a></td>
            
            <td>
            <form action="{{route('comics.destroy',['comic' =>$comic])}}" method="POST" onsubmit="return confirm('sicuro dii voler canccellare il dato');">
              @method('DELETE')
              @csrf  
              <button type="submit" class="btn btn-danger">Elimina</button>
            </form> 



            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
    
@endsection