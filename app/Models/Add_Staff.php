<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orders;

class Add_Staff extends Model
{
    use HasFactory;
    protected $table = "add_staff";
    protected $primaryKey = "staff_id";

    public function orders(){
        return $this->belongsTo(orders::class, 'staff_id');
    }
}
