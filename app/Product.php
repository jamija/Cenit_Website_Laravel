<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filelable = [
      'product_name', 'description', 'price', 'stock', 'img1', 'img2', 'img3',
    ];

    public function sizes()
  	{
      return $this->belongsToMany(Size::class)->withTimestamps();
  	}

    public function users()
    {
      return $this->belongsToMany(User::class)->withTimestamps();
    }
}
