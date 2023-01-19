<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddTable extends Model
{

    use HasFactory;
    protected $table = "addTable";
    protected $primaryKey = "id";
}
