<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use CrudTrait;
    protected $fillable = ['name', 'code'];
    
    public function items()
    {
        return $this->hasMany(items::class);
    }
    use HasFactory;
}
