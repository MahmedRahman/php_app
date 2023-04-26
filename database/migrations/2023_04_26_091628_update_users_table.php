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
    Schema::table('users', function (Blueprint $table) {
        $table->string('phone')->unique()->after('email');
        $table->string('state')->after('password');
        $table->text('note')->nullable()->after('state');
        $table->boolean('phone_active')->default(false)->after('note');
        $table->boolean('email_active')->default(false)->after('phone_active');
    });
}


    /**
     * Reverse the migrations.
     */
  public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('phone');
        $table->dropColumn('state');
        $table->dropColumn('note');
        $table->dropColumn('phone_active');
        $table->dropColumn('email_active');
    });
}

};
