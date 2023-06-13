<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsenDetail extends Model
{
    protected $guarded = [];

    public function absen()
    {
        return $this->belongsTo(Absen::class);
    }
}
