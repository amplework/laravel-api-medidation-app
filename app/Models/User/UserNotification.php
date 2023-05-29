<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'push_notification',
        'tips_notification',
        'reminders_notification',
        'when_schedule',
        'sending_time',
        'status',
    ];
    protected $dates =['deleted_at'];

}