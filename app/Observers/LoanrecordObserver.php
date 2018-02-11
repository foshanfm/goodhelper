<?php

namespace App\Observers;

use App\Models\Loanrecord;
use App\Models\User;
use Auth;
use App\Http\Controllers\Controller;


// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class LoanrecordObserver
{
    public function created (Loanrecord $loanrecord)
    {
        //剩余借款额度
        $user = Auth::user();

        $user->quota = $user->quota - ($loanrecord->loan);

        $user->update();

    }

    public function updating(Loanrecord $loanrecord)
    {
        //
    }
}