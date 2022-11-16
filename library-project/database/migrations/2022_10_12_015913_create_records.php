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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('member_id')->unsigned();
            $table->foreignId('member_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            // $table->bigInteger('book_id')->unsigned();
            $table->foreignId('book_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->date('date_record');
            $table->string ('status');
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
        Schema::dropIfExists('records');
    }
};
