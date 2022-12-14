<?php
use Illuminate\Database\Seeder;
use App\Comic;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //recupero dati dal file comics.php da config
        
        $comicList = config('comics');
       
        foreach($comicList as $comic){
            
            $newComic = new Comic();
            $newComic->title=$comic['title'];
            $newComic->description =$comic['description'];
            $newComic->thumb =$comic['thumb'];
            $newComic->price =$comic['price'];
            $newComic->series =$comic['series'];
            $newComic->sale_date =$comic['sale_date'];
            $newComic->type =$comic['type'];
            $newComic->save();
        }
    }
}
