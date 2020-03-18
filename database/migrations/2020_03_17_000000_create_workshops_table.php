<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('workshop_name');
            $table->longText('description');
            $table->string('location');
            $table->time('time');
            $table->date('date');
            $table->mediumText('github_repo')->unique();
            $table->mediumText('google_slides')->unique();
            $table->string('attendees')->nullable();
            $table->string('conducted_by')->nullable();
            $table->binary('thumbnail')->nullable();
            $table->binary('flyer')->nullable();
            $table->boolean('active');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workshops');
    }
}
