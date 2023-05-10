<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SubscribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subscribes')->insert
        (

[
    [
        'name'=>'Free','value'=>0
    ],
[
    'name'=>'Primeum','value'=>20
],
[
    'name'=>'Primeum Plus','value'=>35
],
]

);
    }
    }

