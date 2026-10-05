<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $primaryKey = 'item_id';

    protected $fillable = [
        'user_id',
        'category_id',
        'location_id',
        'type',
        'item_name',
        'brand',
        'color',
        'description',
        'event_date',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'location_id');
    }

    public function images()
    {
        return $this->hasMany(ItemImage::class, 'item_id', 'item_id');
    }

    public function claims()
    {
        return $this->hasMany(Claim::class, 'item_id', 'item_id');
    }
}
