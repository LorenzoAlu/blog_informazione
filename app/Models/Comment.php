<?php

namespace App\Models;

use App\Models\User;
use App\Models\Article;
use App\Models\ReplayComment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=[
        'body','user_id','article_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function replaycomments()
    {
        return $this->hasMany(ReplayComment::class);
    }
}
