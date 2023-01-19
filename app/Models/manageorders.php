<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manageorders extends Model
{
    use HasFactory;
    protected $table = "manage_orders";
    protected $primaryKey = "order_id";
}
