<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
    ];

    public function sectionStory()
    {
        return $this->hasMany(SectionStory::class, 'page_section_id');
    }
}
