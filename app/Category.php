<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['id','name', 'description', 'slug'];

    public function produtcs()
    {
        return $this->belongsToMany(Product::class);
    }
}
