<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        \DB::table('admins')->insert([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => \Hash::make(123456),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        \DB::table('products')->insert([
            [
                'products_name' => "Wall's Ice Cream Paddle Pop Twister Mermaid 55Ml",
                'products_code' => "KD001",
                'products_price' => "4100",
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'products_name' => "Wall's Ice Cream Mini Cornetto Unicorn 12X28ml",
                'products_code' => "KD002",
                'products_price' => "4100",
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'products_name' => "Wall's Ice Cream Paddle Pop Mochi Choco Vanilla 45Ml",
                'products_code' => "KD003",
                'products_price' => "4100",
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'products_name' => "Wall's Ice Cream Cornetto Disc Oreo 110Ml",
                'products_code' => "KD004",
                'products_price' => "12200",
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'products_name' => "Wall's Ice Cream Magnum Double Choco 95Ml",
                'products_code' => "KD005",
                'products_price' => "20200",
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'products_name' => "Wall's Ice Cream Magnum Mini Almond 6X45ml",
                'products_code' => "KD006",
                'products_price' => "50800",
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'products_name' => "Indomaret Bamboo Facial Tissue 2Ply 150'S",
                'products_code' => "KD007",
                'products_price' => "11500",
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'products_name' => "Hilo Teen Susu Bubuk HI-Calsium Vanilla Caramel 750g",
                'products_code' => "KD008",
                'products_price' => "104200",
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
