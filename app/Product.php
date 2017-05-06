<?php

namespace App;

use Illuminate\Cache\Console\CacheTableCommand;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['quantity', 'serial', 'status', 'brand_id', 'manufacture_id',  'category_id', 'description_id', 'location_id'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function description()
    {
        return $this->belongsTo(Description::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function transfers()
    {
        return $this->hasMany(Transfer::class);
    }
}
