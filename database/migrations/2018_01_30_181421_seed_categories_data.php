<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $categories = [
            [
                'name'        => '借款申请中',
            ],
            [
                'name'        => '废弃订单',
            ],
            [
                'name'        => '已放款',
            ],
            [
                'name'        => '还款申请中',
            ],
            [
                'name'        => '已还款',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         DB::table('categories')->truncate();
    }
}