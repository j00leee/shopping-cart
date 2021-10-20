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
            'name' => 'Eyeliner',
            'price' => 5,
            'description' => 'liquid eyeliner',
            'image' => 'https://cdn.shopify.com/s/files/1/0054/5796/9240/products/MTM-punk-open_3000x3000-903BU-l389Ps-92kWK_3000x.jpg?v=1630365250'
        ]);
        Product::firstOrCreate([
            'name' => 'Dove Shampoo',
            'price' => 8.14,
            'description' => 'Daily moisture shampoo',
            'image' => 'https://m.media-amazon.com/images/I/61Y3WWoRphS._SL1500_.jpg'
        ]);
        Product::firstOrCreate([
            'name' => 'Concealer',
            'price' => 4,
            'description' => 'Face concealer',
            'image' => 'https://www.maybelline.com/~/media/mny/global/face-makeup/concealer/fit-me-concealer/maybelline-fit-me-concealer-15-light-041554247718-c.jpg'
        ]);
        Product::firstOrCreate([
            'name' => 'Face Gel Cream',
            'price' => 4,
            'description' => 'Neutrogena',
            'image' => 'https://ntg-catalog.imgix.net/products/brightboost/6811121-SF10-2.jpg?w=1200&h=1443&sfrm=jpg&fit=crop'
        ]);
        Product::firstOrCreate([
            'name' => 'Sun Block Cream',
            'price' => 4,
            'description' => 'Lotus herbals safe sun block cream spf 30',
            'image' => 'https://m.media-amazon.com/images/I/6141wynCCoL._SL1200_.jpg'
        ]);
        Product::firstOrCreate([
            'name' => 'Soak Infusion',
            'price' => 25,
            'description' => 'Infused Bath Salts',
            'image' => 'https://assets.verishop.com/salt-by-hendrix-soak-infusion-bath-salts/E10036009000000-3180472387.jpg?auto=format&cs=strip&fit=max&w=1200'
        ]);
    }
}
