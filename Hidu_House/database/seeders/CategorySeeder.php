<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['Name' => 'Pizza', 'anh_dm' => 'icon_pizza.png'],
            ['Name' => 'Đồ uống', 'anh_dm' => 'icon_douong.png'],
            ['Name' => 'Salad', 'anh_dm' => 'icon_salad.png'],
            ['Name' => 'Mỳ Ý', 'anh_dm' => 'icon_myi.png'],
            ['Name' => 'Combo', 'anh_dm' => 'icon_combo.png'],
        ]);
    }
}
