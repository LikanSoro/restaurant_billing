<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orders;

class Item extends Model
{
    use HasFactory;
    protected $table = "add_item";
    protected $primaryKey = "item_id";
    
    public function orders(){
        return $this->belongsTo(orders::class, 'item_id');
    
    }
}
