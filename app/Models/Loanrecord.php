<?php

namespace App\Models;

class Loanrecord extends Model
{
    protected $fillable = ['order_id', 'user_id', 'category_id', 'day', 'loan', 'repayment_id'];
}
