<?php

use Illuminate\Database\Seeder;

class TaskCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('task_categories')->delete();
        DB::table('task_categories')->insert([
            ['name'=>'网线','code'=>101],
            ['name'=>'座机电话','code'=>102],
            ['name'=>'设备','code'=>103],
            ['name'=>'手机','code'=>104],
            ['name'=>'报销','code'=>105],
            ['name'=>'其他','code'=>106],

        ]);
    }
}
