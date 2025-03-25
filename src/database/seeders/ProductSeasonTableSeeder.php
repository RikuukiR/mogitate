<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeasonTableSeeder extends Seeder
{
    public function run()
    {
        // // 商品IDと季節IDを手動で関連付け
        // $productSeasons = [
        //     // キウイの商品IDと季節IDを関連付け
        //     ['product_id' => 1, 'season_id' => 1], // 秋
        //     ['product_id' => 1, 'season_id' => 2], // 冬
        //     ['product_id' => 2, 'season_id' => 3], // 春
        //     ['product_id' => 3, 'season_id' => 4], // 冬
        //     // 他の商品と季節のIDを関連付け...
        // ];

        // // 中間テーブルに挿入
        // DB::table('product_season')->insert($productSeasons);
    }
}
