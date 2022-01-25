<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'title', 'content'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts = ['user_id' => '', 'title' => '', 'content' => '',];
}
