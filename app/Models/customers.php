<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $primaryKey = "customer_id";

    public function orders(){
        return $this->hasMany(orders::class, 'customer_id');
    }
}
