<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orders;

class AddTable extends Model
{

    use HasFactory;
    protected $table = "add_table";
    protected $primaryKey = "table_id";

    public function orders(){
        return $this->belongsTo(orders::class, 'table_id');
    }
}
