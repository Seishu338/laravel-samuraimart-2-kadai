<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_names=[
            'ダミー1', 'ダミー2', 'ダミー3', 'ダミー4', 'ダミー5', 'ダミー6',
             'ダミー7', 'ダミー8', 'ダミー9', 'ダミー10', 'ダミー11', 'ダミー12',
             'ダミー13', 'ダミー14', 'ダミー15', 'ダミー16', 'ダミー17', 'ダミー18'
        ];

        $target_id=mt_rand(1,18);

        foreach ($product_names as $product_name){
            Product::create([
                'name' => $product_name,
                'description' =>$product_name,
                'price'=>1000,
                'category_id' =>$target_id
            ]);
        }
    }
}
