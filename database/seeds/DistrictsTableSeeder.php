<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->delete();

        DB::table('districts')->insert([
            ['id' => 1, 'district_name' => '芙蓉区', 'username' => "18073100720", 'password' => bcrypt("123456"), 'district_desc' => '长沙市芙蓉区', 'remember_token' => ""],
        ]);
    }
}
