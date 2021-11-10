<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    protected function getData(): array {
        $faker = Factory::create();
        $data = [];
        for ($i=0; $i<10; $i++){
            $data[] = [
                'title' => 'Category ' . $faker->sentence(mt_rand(1, 2)),
                'description' => $faker->text(mt_rand(100, 300))
            ];
        }
        return $data;
    }
}
