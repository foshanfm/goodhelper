<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Loanrecord;

class LoanrecordPolicy extends Policy
{
    public function update(User $user, Loanrecord $loanrecord)
    {
        // return $loanrecord->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Loanrecord $loanrecord)
    {
        return true;
    }
}
