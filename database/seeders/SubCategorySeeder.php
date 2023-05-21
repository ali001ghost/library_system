<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('sub_categories')->insert
        (

[
    [
        'name'=>'prgramming','category_id'=>'1'
    ],
    [
        'name'=>'Network','category_id'=>'1'
    ],
    [
    'name'=>'football','category_id'=>'2'

    ],

]);
    }
}
