<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddItemC extends Model
{
    use HasFactory;
    protected $table = "item_category";
    protected $primaryKey = "ic_id";
}
