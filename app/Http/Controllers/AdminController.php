<?php

namespace App\Http\Controllers;

use App\Models\Loanrecord;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoanrecordRequest;
use Auth;
use App\Http\Controllers\Loanrecords;
use App\Models\Category;

class AdminController extends Controller
{
    //
    public function adminroot(Loanrecord $loanrecord)
    {

     $loanrecord = Loanrecord::with('user', 'category')->paginate(30);

     return view('loanrecords.index',compact('loanrecord'));
    }
}