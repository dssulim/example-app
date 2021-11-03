<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNews($categoryId, $categoryName): array{
        //return [];
        $faker = Factory::create();
        $data = [];
        for($i = 1; $i < 5; $i++) {
            $data[] = [
                'id' => $categoryId . $i,
                'categoryId' => $categoryId,
                'categoryName' => $categoryName,
                'title' => $faker->jobTitle(),
                'author' => $faker->userName(),
                'image' => null,
                'description' => $faker->sentence(10)
            ];
        }
        return $data;
    }

    public function getCategoriesNews(): array{
        //return [];
        $faker = Factory::create();
        $categories = [];
        for($i = 1; $i < 6; $i++){
            $categoryName = $faker->colorName();
            $categories[] = [
                'id' => $i,
                'name' => $categoryName,
                'newsList' => $this->getNews($i, $categoryName)
            ];
        }
        //dd($categories);
        return $categories;
    }

    public function getDataFromJsonFileAsArray(string $filePath){
        $dataFromFile = [];
        if (file_exists(storage_path($filePath))){
            $dataFromFile = json_decode(file_get_contents(storage_path($filePath)), true);
        }
//        if (is_null($feedback)) {
//
//        }
        return $dataFromFile;
    }

}
