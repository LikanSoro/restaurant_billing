<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orders;

class AddItemC extends Model
{
    use HasFactory;
    protected $table = "item_category";
    protected $primaryKey = "ic_id";

    public function orders(){
        return $this->belongsTo(orders::class , 'ic_id');
    
    }
}
