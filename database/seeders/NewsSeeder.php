<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    protected function getData(): array {
        $faker = Factory::create();
        $data = [];
        for ($i=0; $i<10; $i++){
            $data[] = [
                'category_id' => mt_rand(1, 10),
                'news_source_id' => mt_rand(1, 10),
                'title' => $faker->sentence(mt_rand(3, 10)),
                'author' => $faker->firstName() . '-' . $faker->lastName(),
                'description' => $faker->text(mt_rand(100, 300))
            ];
        }
        return $data;
    }
}
