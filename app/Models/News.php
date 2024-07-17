<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'content',
        'list'
    ];

    public function listContents()
    {
        return $this->hasMany(ListContent::class, 'content_id');
    }
}
