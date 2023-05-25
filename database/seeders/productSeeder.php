<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'S21 mobile',
                'price' => '30000',
                'category' => 'mobile',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjvUShIuVqxnCq0vvmupFu7ve7zA1NwIfXIDwWr0K4y5EdG0lm-44MAa9ou1tfKEWysC8&usqp=CAU',
                'description' => 'a smart phone with 6GB ram and much more future'
            ],
            [
                'name' => 'S23 mobile',
                'price' => '34000',
                'category' => 'mobile',
                'gallery' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.gadgetbridge.com%2Fnews%2Fcomparison-oneplus-11-vs-samsung-galaxy-s23%2F&psig=AOvVaw2cgkmrdJThRvjaWMbND9a2&ust=1684997008964000&source=images&cd=vfe&ved=2ahUKEwjLsM2SrY3_AhUDktgFHdu5DlMQr4kDegUIARDUAQ',
                'description' => 'a smart phone with 6GB ram and much more future'
            ],
            [
                'name' => '1+ mobile',
                'price' => '30000',
                'category' => 'mobile',
                'gallery' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.91mobiles.com%2Fhub%2Fsamsung-galaxy-s22-ultra-review%2F&psig=AOvVaw2cgkmrdJThRvjaWMbND9a2&ust=1684997008964000&source=images&cd=vfe&ved=2ahUKEwjLsM2SrY3_AhUDktgFHdu5DlMQr4kDegUIARDaAQ',
                'description' => 'a smart phone with 6GB ram and much more future'
            ]
        ]);
    }
}
