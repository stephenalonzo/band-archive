<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeaderSong extends Model
{
    public $table = 'leader_song';

    protected $fillable = ['leader_id', 'song_id'];
}
