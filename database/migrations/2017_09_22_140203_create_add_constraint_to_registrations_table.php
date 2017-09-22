<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddConstraintToRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('registrations', function (Blueprint $table){
           $table->integer('year_id')->after('option_id')->unsigned();
           $table->foreign('year_id')->references('id')->on('school_years')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registrations', function (Blueprint $table){
            $table->dropColumn(year_id);
        });
    }
}
