<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCategories extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'categories_id',
        'status'
    ];
    protected $dates = ['deleted_at'];

}
