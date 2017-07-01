<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmailFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('email_hour')
                ->default(8);
            $table->date('last_email_sent_date')
                ->default('1980-01-01');
            $table->integer('last_email_sent_hour')
                ->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('email_hour');
            $table->dropColumn('last_email_sent_date');
            $table->dropColumn('last_email_sent_hour');
        });
    }
}
