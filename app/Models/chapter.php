<?php

namespace App\Models;

use App\Models\buku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class chapter extends Model
{
    use HasFactory;
    protected $table = 'chapter_image';
    protected $guarded = [];

    public function judul(): BelongsTo
    {
        return $this->belongsTo(buku::class, 'buku_id', 'id');
    }
    protected $casts = [
        'image' => 'array',
    ];
}
