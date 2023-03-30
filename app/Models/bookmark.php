<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookmark extends Model
{
    use HasFactory;
    protected $table = 'bookmark';
    protected $guarded = [];

    public function buku()
    {
        return $this->belongsTo(buku::class, 'buku_id', 'id');
    }
    

}
