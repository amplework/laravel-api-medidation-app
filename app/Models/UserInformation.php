<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;
    protected $softDelete = true;
    protected $fillable=[
        'user_id',
        'role',
        'name',
        'about',
        'last_name',
        'gender',
        'dob',
        'about_moti',
        'exp_info_status',
        'cover_img',
        'profiles_img',
        'schedule_status',
        'profile_status',
        'status',
        'date_time',
    ];
}
