<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
