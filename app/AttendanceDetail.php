<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendanceDetail extends Model
{
    protected $guarded = [];
    protected $table = 'absen_details';

    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }
}
