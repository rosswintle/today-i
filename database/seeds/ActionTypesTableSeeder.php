<?php

use Illuminate\Database\Seeder;

class ActionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('action_types')->insert([
            // 'id' => 1,
            'name' => 'made',
            'icon_class' => 'fa-puzzle-piece', ]);
        DB::table('action_types')->insert([
            // 'id' => 2,
            'name' => 'helped',
            'icon_class' => 'fa-handshake-o', ]);
        DB::table('action_types')->insert([
            // 'id' => 3,
            'name' => 'signed',
            'icon_class' => 'fa-pencil', ]);
        DB::table('action_types')->insert([
            // 'id' => 4,
            'name' => 'wrote',
            'icon_class' => 'fa-file-text-o', ]);
        DB::table('action_types')->insert([
            // 'id' => 5,
            'name' => 'hacked',
            'icon_class' => 'fa-laptop', ]);
        DB::table('action_types')->insert([
            // 'id' => 6,
            'name' => 'shared',
            'icon_class' => 'fa-share-alt', ]);
        DB::table('action_types')->insert([
            // 'id' => 7,
            'name' => 'gave',
            'icon_class' => 'fa-gift', ]);
        DB::table('action_types')->insert([
            // 'id' => 8,
            'name' => 'taught',
            'icon_class' => 'fa-lightbulb-o', ]);
        DB::table('action_types')->insert([
            // 'id' => 9,
            'name' => 'thanked',
            'icon_class' => 'fa-thumbs-up', ]);
    }
}
