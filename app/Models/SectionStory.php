<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionStory extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_section_id',
        'type',
        'section',
    ];

    public function story()
    {
        return $this->hasMany(Story::class, 'section_story_id');
    }

    function pageSection() {
        return $this->belongsTo(PageSection::class,'page_section_id');
    }
}
