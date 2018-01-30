<?php

namespace App\Models;

class Loanrecord extends Model
{
    protected $fillable = ['day', 'loan', ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}