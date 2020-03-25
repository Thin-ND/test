<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Thin',
            'email' => 'thin-nd@trente.asia',
            'password' => bcrypt('password'),
        ]);
    }
}
