<?php

namespace App\Observers;

use App\Models\Loanrecord;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class LoanrecordObserver
{
    public function creating(Loanrecord $loanrecord)
    {
        //
    }

    public function updating(Loanrecord $loanrecord)
    {
        //
    }
}