<?php

namespace App\Models;

use App\Models\Leader;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['leader_id', 'song_title', 'chords_image_path'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('song_title', 'like', '%' . ucwords(request('search')) . '%');
        }
    }

    public function leaders()
    {
        return $this->belongsToMany(Leader::class);
    }
}
