<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Restaurant extends Model
{
   
    protected $table = 'restaurant';
    protected $primaryKey = 'id';

    use HasFactory;

    protected $fillable= [
        'restaurant_name',
        'cuisine_type',
        'phone',
        'address'

    ];

    protected $hidden= [
        
        'created_at',
        'updated_at'
    ];

   
    
        public function reviews(): HasMany{
            return $this->hasMany(review::class);
        }

        public function orders(): HasMany{
            return $this->hasMany(order::class);
        }

        function getAllRestaurants(){
            $records =[]; 
            DB::table('restaurant')->insert($records);
        }
    
}
