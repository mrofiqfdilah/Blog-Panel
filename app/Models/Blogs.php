<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'blogs';
    protected $guarded = ['id'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
