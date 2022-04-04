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
        Schema::table('weights', function (Blueprint $table) {
            $table->float('body_fat')->after('weight')->comment('体脂肪率');
            $table->float('muscle_mass')->after('weight')->comment('筋肉量');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('weights', function (Blueprint $table) {
            $table->dropColumn('body_fat');
            $table->dropColumn('muscle-mass');
        });
    }
};
