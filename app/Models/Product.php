<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // di Product.php
    public function category()
    {
        return $this->belongsTo(Categories::class, 'product_category_id');
    }


}
