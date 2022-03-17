<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('height')->after('email')->comment('身長');
            $table->date('birthday')->nullable(true)->after('email')->comment('生年月日');
            $table->tinyInteger('gender')->unsigned()->after('email')->comment('性別 :1 →男性 2 →女性');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('height');
            $table->dropColumn('birthday');
            $table->dropColumn('gender');
        });
    }
};
