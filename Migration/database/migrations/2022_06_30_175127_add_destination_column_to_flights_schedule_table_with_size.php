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
        Schema::table('flights_schedule', function (Blueprint $table) {
            $table->string('destination', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flights_schedule', function (Blueprint $table) {
        if(Schema::hasColumn('flights_schedule', 'destination')){
            $table->dropColumn('destination');
        }
           
        });
    }
};
