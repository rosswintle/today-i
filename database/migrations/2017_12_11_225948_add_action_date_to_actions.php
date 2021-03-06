<?php

use App\Action;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActionDateToActions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actions', function (Blueprint $table) {
            $table->datetime('action_time')->nullable();
            /*
             * To migrate, do:
             *
            Action::all()->map( function ( $action ) {
                $action->action_time = $action->created_at;
                $action->save();
            });
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actions', function (Blueprint $table) {
            $table->dropColumn('action_time');
        });
    }
}
