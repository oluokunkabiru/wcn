<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'email_notification',
        'blog_notification' ,
        'comment_notification',
        'nugget_notification',
        'gallery_notification',
        'event_notification',
        'book_notification',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
