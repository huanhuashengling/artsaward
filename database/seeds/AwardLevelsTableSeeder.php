<?php

use Illuminate\Database\Seeder;

class AwardLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('award_levels')->delete();

        DB::table('award_levels')->insert([
            ['id' => 1, 'level_name' => '无奖', 'award_type' => "无奖"],
            ['id' => 2, 'level_name' => '一等奖', 'award_type' => "一等奖"],
            ['id' => 3, 'level_name' => '二等奖', 'award_type' => "二等奖"],
            ['id' => 4, 'level_name' => '纪念', 'award_type' => "纪念"],
        ]);
    }
}
