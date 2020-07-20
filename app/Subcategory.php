<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function plants()
    {
        return $this->hasMany(Plant::class);
    }
}
