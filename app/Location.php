<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'lasLocation', 'BU', 'OU'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function transfers()
    {
        return $this->hasMany(Transfer::class);
    }
}
