<?php

namespace App\Http\Controllers;

use App\Models\Loanrecord;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoanrecordRequest;
use Auth;
use App\Http\Controllers\Loanrecords;
use App\Models\Category;

class LoanrecordsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => []]);
    }

	// public function index()
	// {
    //     $loanrecords = loanrecord::with('user', 'category')->paginate(30);
    //     return view('loanrecords.index', compact('loanrecords'));
	// }


    public function index(Loanrecord $loanrecord)
    {
           $id = Auth::id();
           $loanrecord = Loanrecord::where('user_id', $id)
                                  ->latest()
                                  ->get();

        return view('loanrecords.index',compact('loanrecord'));
    }

    public function show(Loanrecord $loanrecord)
    {
        return view('loanrecords.show', compact('loanrecord'));
    }

	public function create(Loanrecord $loanrecord)
	{
		return view('loanrecords.create_and_edit', compact('loanrecord'));
	}

	public function store(LoanrecordRequest $request, Loanrecord $loanrecord)
	{
        if ($request->loan <= Auth::user()->quota ) {
                $loanrecord->fill($request->all());
                $loanrecord->user_id = Auth::id();
                $loanrecord->order_id = date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
                $loanrecord->category_id = 1;
                $loanrecord->save();
                return redirect()->route('loanrecords.show', $loanrecord->id)->with('success', '申请完成，请等待审核。');
        } else {
            return back()->with('danger', '超过可用信用额度，请重新输入。');
        }

    }

    public function payback(Loanrecord $loanrecord)
    {
        $loanstatus = 2;
        $id = Auth::id();
        $loanrecord = Loanrecord::where([['user_id', $id],
                                         ['category_id',$loanstatus],])
                               ->latest()
                               ->get();
        return view('loanrecords.payback',compact('loanrecord'));
    }

	// public function edit(Loanrecord $loanrecord)
	// {
    //     $this->authorize('update', $loanrecord);
	// 	return view('loanrecords.create_and_edit', compact('loanrecord'));
	// }

	// public function update(LoanrecordRequest $request, Loanrecord $loanrecord)
	// {
	// 	$this->authorize('update', $loanrecord);
	// 	$loanrecord->update($request->all());
    //
	// 	return redirect()->route('loanrecords.show', $loanrecord->id)->with('message', 'Updated successfully.');
	// }

	// public function destroy(Loanrecord $loanrecord)
	// {
	// 	$this->authorize('destroy', $loanrecord);
	// 	$loanrecord->delete();
    //
	// 	return redirect()->route('loanrecords.index')->with('message', 'Deleted successfully.');
	// }


}