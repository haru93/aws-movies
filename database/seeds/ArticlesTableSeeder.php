<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'category_id' => 4,
            'name' => 'ホワイトタイガーの赤ちゃん（３）',
            'body' => '動物園のホワイトタイガーの親子の映像。お母さんのまわりで元気に遊ぶホワイトタイガーの赤ちゃんたち。埼玉県宮代町、東武動物公園にて２０１５年５月、６月撮影。',
            'image' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest08/thumbnails+/+fvc-00002-320x180.jpg',
            'movie' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest08/playlist.m3u8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articles')->insert([
            'category_id' => 4,
            'name' => 'オーストラリアのコアラ　のんびり省エネ生活',
            'body' => 'オーストラリア東部のユーカリの森のコアラ。実はコアラの大好物、ユーカリには毒がある。解毒（げどく）するにはたくさんのエネルギーを使う。コアラがいつも寝ているのは、そのエネルギーをためておくため。いわば省エネ生活。２００４年１２月撮影。',
            'image' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest07/thumbnails+/+fvc-00003-320x180.jpg',
            'movie' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest07/playlist.m3u8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articles')->insert([
            'category_id' => 4,
            'name' => 'フィンランド・ヘルシンキ（６）　シベリウス公園',
            'body' => 'フィンランドの首都ヘルシンキにある、シベリウス公園の映像。ヘルシンキ生まれの作曲家ヤン・シベリウスの肖像のレリーフとステンレスパイプの彫刻を見ることができる。２００９年撮影。',
            'image' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest04/thumbnails+/+fvc-00003-320x180.jpg',
            'movie' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest04/playlist.m3u8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articles')->insert([
            'category_id' => 4,
            'name' => 'フランス・パリのオペラ座（オペラ・ガルニエ）',
            'body' => 'パリに２つあるオペラ座のうちの一つ、オペラ・ガルニエの外観。外観および内装は、豪華な装飾のネオ・バロック様式。「オペラ座の怪人」の舞台としても知られている。フランス、パリにて２００４年撮影。',
            'image' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest05/thumbnails+/+fvc-00006-320x180.jpg',
            'movie' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest05/playlist.m3u8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articles')->insert([
            'category_id' => 4,
            'name' => '高松塚古墳　空撮',
            'body' => '高松塚古墳は、国営飛鳥歴史公園内にある二段式の円墳。７世紀末から８世紀初頭にかけて築造された。２００９年１０月、奈良県高市郡にて撮影。',
            'image' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest06/thumbnails+/+fvc-00003-320x180.jpg',
            'movie' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest06/playlist.m3u8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articles')->insert([
            'category_id' => 4,
            'name' => '迎賓館赤坂離宮（２）　主庭の噴水',
            'body' => '迎賓館赤坂離宮（旧東宮御所）の主庭の噴水の映像。迎賓館赤坂離宮（旧東宮御所）は創建１００年後の２００９年に国宝に指定された。東京都港区にて２００９年撮影。',
            'image' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest02/thumbnails+/+fvc-00031-192x108.jpg',
            'movie' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest02/playlist.m3u8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articles')->insert([
            'category_id' => 4,
            'name' => '迎賓館赤坂離宮（１）　外観',
            'body' => '迎賓館赤坂離宮（旧東宮御所）の外観の映像。迎賓館赤坂離宮（旧東宮御所）は創建１００年後の２００９年に国宝に指定された。東京都港区にて２００９年撮影。',
            'image' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest/thumbnails+/+fvc-00005-192x108.png',
            'movie' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest/playlist.m3u8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('articles')->insert([
            'category_id' => 4,
            'name' => '迎賓館赤坂離宮（３）　玄関ホール階段',
            'body' => '迎賓館赤坂離宮（旧東宮御所）の玄関ホール階段の映像。迎賓館赤坂離宮（旧東宮御所）は創建１００年後の２００９年に国宝に指定された。東京都港区にて２００９年撮影。',
            'image' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest03/thumbnails+/+fvc-00003-192x108.jpg',
            'movie' => 'https://ntech-test-transcoder-out.s3-ap-northeast-1.amazonaws.com/HLS/NHKtest03/playlist.m3u8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
