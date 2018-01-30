<?php

use Illuminate\Database\Seeder;
use App\Models\Loanrecord;

class LoanrecordsTableSeeder extends Seeder
{
    public function run()
    {
        $loanrecords = factory(Loanrecord::class)->times(50)->make()->each(function ($loanrecord, $index) {
            if ($index == 0) {
                // $loanrecord->field = 'value';
            }
        });

        Loanrecord::insert($loanrecords->toArray());
    }

}

