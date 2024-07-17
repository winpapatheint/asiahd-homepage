<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListContent extends Model
{
    use HasFactory;

    protected $fillable = ['content_id', 'list'];

}
