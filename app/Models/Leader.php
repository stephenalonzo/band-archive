<?php

namespace App\Models;

use App\Models\Archive;
use App\Models\Song;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = ['song_leader_name', 'className'];

    public function archives()
    {
        return $this->belongsToMany(Archive::class);
    }

    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }
}
