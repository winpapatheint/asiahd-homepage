<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_story_id',
        'title',
        'body',
        'image',
    ];

    function sectionStory() {
        return $this->belongsTo(SectionStory::class,'section_story_id');
    }
}
