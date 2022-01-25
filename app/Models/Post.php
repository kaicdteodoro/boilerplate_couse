<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'title', 'content'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts = ['user_id' => 'int', 'title' => 'string', 'content' => 'string'];
    public static $rules = [
        'user_id' => 'required|unique:users',
        'title' => 'required|max:255',
        'content' => 'required|max:255'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
