<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //
        DB::table('teachers')->insert([
            'name' => 'giaovien',
            'email' => 'gaiovien@gmail.com',
            'major' => 'Math',
            'password' => bcrypt('12345678'),
        ]);
    }
}
