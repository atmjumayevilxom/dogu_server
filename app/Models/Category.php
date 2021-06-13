<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use HasFactory;
    use Translatable;

    protected $translatable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeUnfeatured($query) {
        return $query->where('featured', false);
    }
}
