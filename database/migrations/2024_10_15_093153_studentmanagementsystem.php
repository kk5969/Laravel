<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class studentmanagementsystem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentmanagementsystem', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name', 255);
            $table->string('registration_number', 50)->unique();
            $table->integer('INT221_marks'); // Marks for INT221
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
