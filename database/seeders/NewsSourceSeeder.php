<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_sources')->insert($this->getData());
    }

    protected function getData(): array {
        $faker = Factory::create();
        $data = [];
        for ($i=0; $i<10; $i++){
            $data[] = [
                'title' => 'News Source ' . $faker->sentence(mt_rand(1, 2)),
                'description' => $faker->text(mt_rand(10, 30))
            ];
        }
        return $data;
    }
}
