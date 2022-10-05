@extends('layout.app')
@section('title', 'Inserici Comic')



@section('content')
  <div class="container">
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}"/>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
        <textarea id="description" name="description" class="form-control">value="{{$comic->title}}"</textarea>   
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="url" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}"/>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="title" name="price" value="{{$comic->price}}"/>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="title" name="series" value="{{$comic->series}}"/>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="date" class="form-control" id="title" name="sale_date" value="{{$comic->sale_date}}" />
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" id="type">
                <option {{($comic->type=="comic book")?'selected':''}} value="comic book">Comic book</option>
                <option {{($comic->type=="graphic novel")?'selected':''}} value="graphic novel">Graphic novel</option>

            </select>
        
        </div>

        
        <button type="submit" class="btn btn-danger">Salva</button>
    </form>    
  </div>
@endsection
