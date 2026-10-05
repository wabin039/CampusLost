<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $primaryKey = 'location_id';
    protected $fillable = ['location_name'];

    public function items()
    {
        return $this->hasMany(Item::class, 'location_id', 'location_id');
    }
}
