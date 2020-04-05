<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alls', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('code');
            $table->string('name');
            $table->string('email');
            $table->boolean('number')->default(0);
            $table->string('img')->nullable();
            $table->string('mate_id')->nullable();      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alls');
    }
}
