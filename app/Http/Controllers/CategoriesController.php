<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loanrecord;
use App\Models\Category;
use Auth;

class CategoriesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth', ['except' => []]);
    }

    public function show(Category $category)
    {
        $id = Auth::id();
        $loanrecord = Loanrecord::where([['user_id', $id],
                                        ['category_id', $category->id],])
                               ->get();
        // 传参变量话题和分类到模板中
        return view('loanrecords.index', compact('loanrecord', 'category'));
    }
}