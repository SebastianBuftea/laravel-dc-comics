<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics'); /* recupero il contenuto di comics nel file config */
        foreach ($comics as $comic) {
            $new_comic = new Comic();
            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            $writerstring = '';
            foreach ($comic['writers'] as $writer) {
                $writerstring .= $writer . ', ';
            }
            $new_comic->writers = $writerstring;

            $artiststring = '';
            foreach ($comic['artists'] as $artist) {
                $artiststring .= $artist . ', ';
            }
            $new_comic->artists = $artiststring;
            $new_comic->save();
        }
    }
}
