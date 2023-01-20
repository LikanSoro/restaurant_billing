<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\AddTable;
use App\Models\Add_Staff;
use App\Models\Item;


class orders extends Model
{
    use HasFactory;
    protected $table = "manage_orders";
    protected $primaryKey = "order_id";

    public function InfoTable(){
        return $this->hasMany(AddTable::class , 'table_id', 'table_id');
    }
    public function AddStaff(){
        return $this->belongsTo(Add_Staff::class , 'staff_id', 'staff_id');
    }
    public function Item(){
        return $this->hasMany(Item::class, 'item_id', 'item_id');
    }
    public function ordered_items(){
        return $this->hasMany(ordered_items::class, 'order_id', 'order_id');
    }

    public function customers(){
        return $this->belongsTo(customers::class, 'customer_id', 'customer_id');
    }
}
