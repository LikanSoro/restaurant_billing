<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordered_items extends Model
{
    use HasFactory;
    protected $table = "ordered_items";
    protected $primaryKey = "ordered_item_id";

    public function orders(){
        return $this->belongsTo(orders::class, 'order_id');
    }
}
