<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => '舞台',
            'btnimage' => 'https://ntech-test-transcoder-in.s3-ap-northeast-1.amazonaws.com/gabriel-varaljay-TwP4GjKC_3w-unsplash.jpg',
            'backimage' => 'https://ntech-test-transcoder-in.s3-ap-northeast-1.amazonaws.com/opera-594592_1280.jpg',
            'created_at' => date('2020-09-19 12:00:00'),
            'updated_at' => date('2020-09-19 12:00:00'),
        ]);

        DB::table('categories')->insert([
            'name' => '動物園',
            'btnimage' => 'https://ntech-test-transcoder-in.s3-ap-northeast-1.amazonaws.com/mammal-4211083_640.jpg',
            'backimage' => 'https://ntech-test-transcoder-in.s3-ap-northeast-1.amazonaws.com/lion-4581841_1280.jpg',
            'created_at' => date('2020-09-20 12:00:00'),
            'updated_at' => date('2020-09-20 12:00:00'),
        ]);

        DB::table('categories')->insert([
            'name' => '歴史博物館',
            'btnimage' => 'https://ntech-test-transcoder-in.s3-ap-northeast-1.amazonaws.com/paris-5004727_640.jpg',
            'backimage' => 'https://ntech-test-transcoder-in.s3-ap-northeast-1.amazonaws.com/museum-2203648_1280.jpg',
            'created_at' => date('2020-09-21 12:00:00'),
            'updated_at' => date('2020-09-21 12:00:00'),
        ]);

        DB::table('categories')->insert([
            'name' => '美術館',
            'btnimage' => 'https://ntech-test-transcoder-in.s3-ap-northeast-1.amazonaws.com/gloria-villa--5K9kZYBq_o-unsplash.jpg',
            'backimage' => 'https://ntech-test-transcoder-in.s3-ap-northeast-1.amazonaws.com/agnieszka-kowalczyk-kL1Zmr37sXg-unsplash.jpg',
            'created_at' => date('2020-09-22 12:00:00'),
            'updated_at' => date('2020-09-22 12:00:00'),
        ]);
    }
}
