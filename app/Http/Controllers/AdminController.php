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
    public function adminRoot()
    {
     return view('admin.index');
    }

    public function adminReview(Loanrecord $loanrecord)
    {
        $id = 1;
        $loanrecord = Loanrecord::with('user', 'category')->where('category_id',$id)->paginate(30);
        return view('admin.review',compact('loanrecord'));
    }

    public function adminAllow(Loanrecord $loanrecord)
    {
        if ($loanrecord->id)
                {
                session()->flash('success', '放款成功');
            } else {
                session()->flash('danger','放款失败');
            };

        return back();
    }

}