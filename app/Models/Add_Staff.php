<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add_Staff extends Model
{
    use HasFactory;
    protected $table = "add_staff";
    protected $primaryKey = "staff_id";
}
