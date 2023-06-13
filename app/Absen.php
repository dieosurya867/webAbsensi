<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $guarded = [];

    public function detail()
    {
        return $this->hasMany(AbsenDetail::class);
    }
}
