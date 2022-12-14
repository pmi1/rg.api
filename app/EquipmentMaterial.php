<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentMaterial extends Model
{
    protected $fillable = ['name'];

    public function items()
    {
        return $this->belongsToMany(Item::class)
            ->withTimestamps();
    }
}
