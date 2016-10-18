<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{

    protected $fillable = ['user_id', 'article_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function article()
    {
        return $this->belongsTo(Article::class);
    }


    public function scopeByUserId($query, $userId)
    {
        return $query->where('user_id', $userId);
    }





}
