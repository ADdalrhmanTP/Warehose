<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{

    protected $fillable = ['name', 'code', 'minimum_quantity', 'current_quantity', 'price', 'image', 'active', 'group_id'];
    
    // public function group()
    // {
    //     return $this->belongsTo(Group::class);
    // }
    use CrudTrait;
    use HasFactory;
}
