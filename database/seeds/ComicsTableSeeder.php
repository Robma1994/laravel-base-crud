<?php

use Illuminate\Database\Seeder;
use App\Comic;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach($comics as $comic) {
            $data_comic = new Comic;
            $data_comic->title = $comic['title'];
            $data_comic->description = $comic['description'];
            $data_comic->thumb = $comic['thumb'];
            $data_comic->price = $comic['price'];
            $data_comic->series = $comic['series'];
            $data_comic->sale_date = $comic['sale_date'];
            $data_comic->type = $comic['type'];
            $data_comic->save();
        }
    }
}
