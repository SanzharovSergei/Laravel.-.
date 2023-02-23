<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert($this->getData());
    }

    private function getData()
    {
        $faker = Factory::create();
        $data = [];
        for ($i =0; $i<5; $i++) {
            $data[] = [
                'user_id' => $faker->numberBetween(1, 11),
                'title' => $faker->sentence(),
                'excerpt' => $faker->realText(),
                'body' => $faker->realText(600)
            ];
        }
        return $data;
    }
}
