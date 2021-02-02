<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->delete();

        DB::table('subjects')->insert([
            ['id' => 1, 'subject_name' => '美术','subject_desc' => '美术', 'display_name' => '赵青', 'username' => "13755100135", 'password' => bcrypt("123456"), 'districts_id' => 1, 'remember_token' => ""],
        ]);
    }
}
