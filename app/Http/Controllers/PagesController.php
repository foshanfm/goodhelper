<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Loanrecord;

class PagesController extends Controller
{
    //首页跳转
    public function root()
    {
        return view('pages.root');
    }
}