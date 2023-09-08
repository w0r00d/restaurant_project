<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class review extends Model
{   protected $table='review';
    protected $primaryKey= 'id';
    use HasFactory;

    protected $fillable =[
        'value',
        'restaurant_id'
    ];

    public function restaurant(): belongsTo{

        return $this->belongsTo(Restaurant::class);
        
    }
}
