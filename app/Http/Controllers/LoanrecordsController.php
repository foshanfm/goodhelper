<?php

namespace App\Http\Controllers;

use App\Models\Loanrecord;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoanrecordRequest;

class LoanrecordsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$loanrecords = Loanrecord::paginate();
		return view('loanrecords.index', compact('loanrecords'));
	}

    public function show(Loanrecord $loanrecord)
    {
        return view('loanrecords.show', compact('loanrecord'));
    }

	public function create(Loanrecord $loanrecord)
	{
		return view('loanrecords.create_and_edit', compact('loanrecord'));
	}

	public function store(LoanrecordRequest $request)
	{
		$loanrecord = Loanrecord::create($request->all());
		return redirect()->route('loanrecords.show', $loanrecord->id)->with('message', 'Created successfully.');
	}

	public function edit(Loanrecord $loanrecord)
	{
        $this->authorize('update', $loanrecord);
		return view('loanrecords.create_and_edit', compact('loanrecord'));
	}

	public function update(LoanrecordRequest $request, Loanrecord $loanrecord)
	{
		$this->authorize('update', $loanrecord);
		$loanrecord->update($request->all());

		return redirect()->route('loanrecords.show', $loanrecord->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Loanrecord $loanrecord)
	{
		$this->authorize('destroy', $loanrecord);
		$loanrecord->delete();

		return redirect()->route('loanrecords.index')->with('message', 'Deleted successfully.');
	}
}