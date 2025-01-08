<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable =[
        'category_id',
        'title',
        'description',
        'img',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
