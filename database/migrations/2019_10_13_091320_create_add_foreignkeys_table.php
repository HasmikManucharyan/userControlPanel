<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddForeignkeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private $table ="users";
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('ageGroup_id');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('ageGroup_id')->references('id')->on('age_groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {        
        $this->table->dropForeign(['location_id','role_id','ageGroup_id']);
    }
}
