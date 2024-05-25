<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'EventID',
        'EventName',
        'EventDescription',
        'EventLocation',
        'EventDate',
        'EventImage',
        'EventPoint',
        'IsSpecial',
        'UserID',
        'IsFinished',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'id');
    }
}
