<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;

class PopulateComicsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $data = [
                'title' => $faker->word,
                'author' => $faker->word,
                'year' => $faker->year,
                'overview' => $faker->text,
                'vote' => $faker->numberBetween($min = 0, $max = 5)
            ];
            $comic = new Comic;
            $comic->fill($data);
            $comic->save();
        }
    }
}
