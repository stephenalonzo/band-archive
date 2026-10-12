<?php

namespace App\Models;

use App\Models\Leader;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    protected $fillable = ['archive_date'];

    public function leaders()
    {
        return $this->belongsToMany(Leader::class);
    }
}
