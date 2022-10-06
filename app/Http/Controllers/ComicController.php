<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view ('index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {          
        $request->validate(
            [
             "title"       =>'required|size:50|min:7',
             "description" =>'nullable|max:65535',
             "thumb"       =>'required|size:255|url',
             "price"       =>'required|max:7|min:4',
             "series"      =>'required|size:50|min:7',
             "sale_date"   =>'required|data|',
             'type'        =>['required', Rule::in(['comic book','graphic novel'])],
            ]
        );
          


        $data = $request->all();

        $newComic =new Comic();
        $newComic->title=$data['title'];
        $newComic->description =$data['description'];
        $newComic->thumb =$data['thumb'];
        $newComic->price =$data['price'];
        $newComic->series =$data['series'];
        $newComic->sale_date =$data['sale_date'];
        $newComic->type=$data['type'];
        $newComic->save();
        return redirect()->route('comics.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $comic = Comic::find($id);
       return view('show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
        
    {
        
        $comic = Comic::find($id);
        if($comic){
           return view('edit', compact('comic'));
        }else{
            abort(404);
        }
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
        $request->validate(
                           [
                            "title"       =>'required|size:50|min:7',
                            "description" =>'nullable|max:65535',
                            "thumb"       =>'required|size:255|url',
                            "price"       =>'required|max:7|min:4',
                            "series"      =>'required|size:50|min:7',
                            "sale_date"   =>'required|data|',
                            'type'        =>['required', Rule::in(['comic book','graphic novel'])],
                           ]
        );

        $comic = Comic::find($id);
        
        if($comic){

        $data = $request->all();
        $comic->update($data);
        $comic->save();
        return redirect()->route('comics.index'); 
        
        
        }else{
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $comic = Comic:: find($id);
       if($comic){
        $comic->delete();
        return redirect()->route('comics.index'); 

       }else{
        abort(404);
       }
    }
}
