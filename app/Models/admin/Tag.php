<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Sluggable\SlugOptions;
use Tonysm\RichTextLaravel\Casts\AsRichTextContent;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected array $richTextAttributes = [
        'description',
    ];

    public function casts(): array
    {
        return [
            'description' => AsRichTextContent::class,
        ];
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate()
            ->preventOverwrite();
    }

    public function blog(): BelongsToMany
    {
        return $this->belongsToMany(Blog::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
