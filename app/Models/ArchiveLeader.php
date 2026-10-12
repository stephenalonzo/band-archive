<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArchiveLeader extends Model
{
    public $table = 'archive_leader';

    protected $fillable = ['archive_id', 'leader_id'];
}
