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
            'name' => '展望台',
            'image' => 'https://ntech-test-transcoder-in.s3-ap-northeast-1.amazonaws.com/griffith-observatory-849639_1920.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => '水族館',
            'image' => 'https://ntech-test-transcoder-in.s3-ap-northeast-1.amazonaws.com/nur-taufik-zamari-rgZ9MY39Q54-unsplash.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => '博物館',
            'image' => 'https://ntech-test-transcoder-in.s3-ap-northeast-1.amazonaws.com/berlin-3333482_1920.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => '植物園',
            'image' => 'https://ntech-test-transcoder-in.s3-ap-northeast-1.amazonaws.com/berlin-3333482_1920.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => '動物園',
            'image' => 'https://ntech-test-transcoder-in.s3-ap-northeast-1.amazonaws.com/berlin-3333482_1920.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => '記念館',
            'image' => 'https://ntech-test-transcoder-in.s3-ap-northeast-1.amazonaws.com/berlin-3333482_1920.jpg',
        ]);
    }
}
