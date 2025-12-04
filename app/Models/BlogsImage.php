<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogsImage extends Model
{
    protected $table = 'blogs_image';
    protected $guarded = ['id'];

    public function Blogs()
    {
        return $this->belongsTo(Blogs::class);
    }
}
