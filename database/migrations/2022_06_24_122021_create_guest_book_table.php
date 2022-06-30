<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_book', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile_phone_number',14)->unique();
            $table->string('institution');
            $table->string('position');
            $table->string('necessities');
            $table->date('dates');
            $table->string('times');
            $table->enum('status',['active','inactive']);
            $table->string('slug');
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
        Schema::dropIfExists('guest_book');
    }
}
