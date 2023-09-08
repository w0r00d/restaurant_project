<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant; 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class restaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*
        $records = [
            [
                    
                'restaurant_name' => 'Delicious',
                'cuisine_type' => 'oriental',
                'phone' =>'123456',
                'address' =>'Homs, alDablan'
        
            ],
            [
                    
                'restaurant_name' => 'Schizo',
                'cuisine_type' => 'western',
                'phone' =>'123456',
                'address' =>'Homs, Almahatta'
        
            ],
            [
                    
                'restaurant_name' => 'Max Potato',
                'cuisine_type' => 'Mix',
                'phone' =>'123456',
                'address' =>'Homs, City Center'
        
            ],
            [
                    
                'restaurant_name' => 'Foofoo',
                'cuisine_type' => 'western',
                'phone' =>'6575',
                'address' =>'Homs, AlInshaat'
        
            ],
            [
                    
                'restaurant_name' => 'Spicy Chicken',
                'cuisine_type' => 'Mix',
                'phone' =>'123456',
                'address' =>'Homs, Alkornish'
        
            ],
            [
                    
                'restaurant_name' => 'barbeque',
                'cuisine_type' => 'Mix',
                'phone' =>'98566',
                'address' =>'Homs, Hama\'s road'
        
            ],
            [
            'restaurant_name' => Str::random(6),
            'cuisine_type' => Str::random(5),
            'phone' => Str::random(9),
            'address' => Str::random(20)
            ],
        ];
        */
     
     
       // DB::table('restaurant')->insert($records);
    }
}
