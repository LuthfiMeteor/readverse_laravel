<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'cate_id', 'id');
    }
    public function bookmarkedByUser($id)
    { 
        return $this->bookmark()
            ->where('user_id', $id)
            ->exists();
    }
}
