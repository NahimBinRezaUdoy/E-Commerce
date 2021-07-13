<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Samsung Galaxy Fold',
                'price' => '250',
                'description' => "A device unlike any before. Galaxy Fold doesn't just define a new category, it defies category.",
                'category' => 'Samsung',
                'gallery' => 'https://th.bing.com/th/id/OIP.Bv7wRlL8SXIfMrnCAtVjIQHaHa?pid=ImgDet&rs=1'
            ],
            [
                'name' => 'Samsung Galaxy Note10 | 10+',
                'price' => '300',
                'description' => "With Galaxy Note10 and Note10+ we've designed a mobile experience that’s like a computer, a gaming console, a movie-tech camera, and an intelligent pen, all in one device.",
                'category' => 'Samsung',
                'gallery' => 'https://www.samsung.com/global/galaxy/galaxy-note10/images/galaxy-note10_highlights_mobile_kv.jpg'
            ],
            [
                'name' => 'Samsung Galary A80',
                'price' => '220',
                'description' => "Camera that lets you see more , we've designed a mobile experience that’s like a computer, a gaming console, a movie-tech camera,",
                'category' => 'Samsung',
                'gallery' => 'https://th.bing.com/th/id/Rd83f8477e7fecb9a04549a192c313933?rik=KfOfpkZv0%2ba%2b4w&pid=ImgRaw'
            ],

            [
                'name' => 'Samsung Galary S6 edge',
                'price' => '200',
                'description' => "8gb ram , 256 gb storage ,we've designed a mobile experience that’s like a computer, a gaming console, a movie-tech camera,",
                'category' => 'Samsung',
                'gallery' => 'https://th.bing.com/th/id/R565731295d3c429eed875b4151c0a586?rik=6m%2bKVzOwIwIWYg&pid=ImgRaw'
            ],
            [
                'name' => 'Samsung Galary S5 edge',
                'price' => '200',
                'description' => "Camera that lets you see more , we've designed a mobile experience that’s like a computer, a gaming console, a movie-tech camera,",
                'category' => 'Samsung',
                'gallery' => 'https://www.samsung.com/global/galaxy/galaxy-note10/images/galaxy-note10_highlights_mobile_kv.jpg'
            ],

        ]);
    }
}
