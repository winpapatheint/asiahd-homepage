<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionStory extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'section',
    ];

    public function story()
    {
        return $this->hasMany(Story::class);
    }
}
