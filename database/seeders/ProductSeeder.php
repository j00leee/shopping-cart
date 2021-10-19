<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::firstOrCreate([
            'name' => 'Green Clean',
            'price' => 22,
            'description' => 'Cleanser + makeup remover balm',
            'image' => 'http://cdn.shopify.com/s/files/1/2474/1834/products/Farmacy_GreenClean_100ml_2021PCRPackaging_Shadow_600x.jpg?v=1628797823'
        ]);
        Product::firstOrCreate([
            'name' => 'Green Matcha Hand Cream',
            'price' => 10,
            'description' => 'Anti-pollution, organic hand cream',
            'image' => 'https://cdn-ec.niceshops.com/upload/image/product/facebook/default/urtekram-green-matcha-hand-cream-75-ml-1420306-en.jpg'
        ]);
        Product::firstOrCreate([
            'name' => 'You are the one',
            'price' => 15,
            'description' => 'aloe + vitamin e shower gel',
            'image' => 'https://www.bathandbodyworks.com/dw/image/v2/BBDL_PRD/on/demandware.static/-/Sites-master-catalog/default/dw761f2125/hires/026139371.jpg?sh=1500&sfrm=jpg'
        ]);
        Product::firstOrCreate([
            'name' => 'You are the one extratest',
            'price' => 15,
            'description' => 'aloe + vitamin e shower gel',
            'image' => 'https://www.bathandbodyworks.com/dw/image/v2/BBDL_PRD/on/demandware.static/-/Sites-master-catalog/default/dw761f2125/hires/026139371.jpg?sh=1500&sfrm=jpg'
        ]);
    }
}
