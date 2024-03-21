<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table="posts";
    protected $fillable=[
        "title",
        "description",
        "single_image",
        "multiple_image",
        "status",
        "user_id",
    ];
}
