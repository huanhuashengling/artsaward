<?php

use Illuminate\Database\Seeder;

class ApplyStatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apply_states')->delete();

        DB::table('apply_states')->insert([
            ['id' => 1, 'state_desc' => '已报名', 'next_state_desc' => "待核对"],
            ['id' => 2, 'state_desc' => '已核对', 'next_state_desc' => "待审核"],
            ['id' => 3, 'state_desc' => '已审核', 'next_state_desc' => "待设奖"],
            ['id' => 4, 'state_desc' => '已设奖', 'next_state_desc' => "待颁证"],
            ['id' => 5, 'state_desc' => '已颁证', 'next_state_desc' => "结束"],
        ]);
    }
}
