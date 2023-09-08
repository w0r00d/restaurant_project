<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id';

    use HasFactory;

    protected $fillable=[
        'restaurant_id',
        'user_id',
        'order_details',
        'order_type',
        'order_status',
        'order_time',
        'order_total'
    ];

    public function restaurant(): belongsTo {
        return $this->belongsTo(Restaurant::class);
    }

    public function user(): belongsTo {
        return $this->belongsTo(users::class);
    }
}
