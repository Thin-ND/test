<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'Nguyen Dang Thin',
            'card_number' => '20138695',
            'email' => 'nguyendangthinbn@gmail.com',
            'password' => bcrypt('1234567'),
        ]);
    }
}
