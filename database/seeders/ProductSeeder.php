<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Apple MacBook Pro',
                'details' => 'Apple M2 Pro chip, 14.2-inch, 16GB, 512GB SSD',
                'description' => 'Supercharged by M2 Pro or M2 Max, MacBook Pro takes its power and efficiency further than ever. It delivers exceptional performance whether it’s plugged in or not, and now has even longer battery life. Combined with a stunning Liquid Retina XDR display and all the ports you need — this is a pro laptop without equal.',
                'brand' => 'Apple',
                'price' => 1999,
                'shipping_cost' => 25,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Samsung Galaxy Book3 Pro 360',
                'details' => '13.3” / 15.6” FHD (1920 x 1080) AMOLED, 16GB RAM + 512GB SSD',
                'description' => 'Take big PC power anywhere. Featuring a minimal design and slim profile, Galaxy Book3 Pro 360 slips easily into a bag or carry-on, so you’ll always be ready to capture ideas no matter where you’re calling home today.',
                'brand' => 'Samsung',
                'price' => 1299,
                'shipping_cost' => 25,
                'image_path' => 'storage/product1.png'
            ]
        ];

        foreach ($products as $key => $value)
        {
            Product::create($value);
        }
    }
}
