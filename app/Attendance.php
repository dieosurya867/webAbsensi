<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $guarded = [];
    protected $table = 'absens';

    public function scopeCountAttendance($query, $status)
    {
        return $query->whereDate('created_at', Carbon::today())
            ->where('status', $status)->count();
    }

    public function detail()
{
    return $this->hasMany(AttendanceDetail::class, 'absen_id');
}

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
