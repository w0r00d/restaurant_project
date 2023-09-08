<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class reviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $records = [
           [ 'value' => 2,
            'restaurant_id' => 1],
            [ 'value' => 2,
            'restaurant_id' => 2],
            [ 'value' => 5,
            'restaurant_id' => 3],
            [ 'value' => 3,
            'restaurant_id' => 7],
            [ 'value' => 5,
            'restaurant_id' => 7],
            [ 'value' => 3,
            'restaurant_id' => 3],
            [ 'value' => 1,
            'restaurant_id' => 5],
            [ 'value' => 1,
            'restaurant_id' => 2],
            [ 'value' => 2,
            'restaurant_id' =>5],
            [ 'value' => 2,
            'restaurant_id' => 4],
            [ 'value' => 5,
            'restaurant_id' => 4],

        ];
         DB::table('review')->insert($records);
    }
}
