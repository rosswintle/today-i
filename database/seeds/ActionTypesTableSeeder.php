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
        	'name' => 'made']);
        DB::table('action_types')->insert([
        	// 'id' => 2,
        	'name' => 'helped']);
        DB::table('action_types')->insert([
        	// 'id' => 3,
        	'name' => 'signed']);
        DB::table('action_types')->insert([
        	// 'id' => 4,
        	'name' => 'wrote']);
        DB::table('action_types')->insert([
        	// 'id' => 5,
        	'name' => 'hacked']);
        DB::table('action_types')->insert([
        	// 'id' => 6,
        	'name' => 'shared']);
        DB::table('action_types')->insert([
        	// 'id' => 7,
        	'name' => 'gave']);
        DB::table('action_types')->insert([
        	// 'id' => 8,
        	'name' => 'taught']);
    }
}
