<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->string('states')->nullable(); // Add 'states' column
            $table->text('note')->nullable(); // Add 'note' column
            $table->boolean('phoneActive')->default(false); // Add 'phoneActive' column
            $table->boolean('emailActive')->default(false); // Add 'emailActive' column
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn(['states', 'note', 'phoneActive', 'emailActive']);
        });
    }
};
