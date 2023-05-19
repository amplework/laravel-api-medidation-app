<?php

namespace App\Models\Admin\Categories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory, SoftDeletes;
    public $fillable = ['name','slug','status'];
    protected $dates = ['deleted_at'];
}
