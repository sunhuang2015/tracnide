<?php

use Illuminate\Database\Seeder;

class TaskStepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('task_steps')->delete();
        DB::table('task_steps')->insert([
            ['name'=>"发起",'code'=>"101",'icon'=>""],
            ['name'=>"审批",'code'=>"102",'icon'=>""],
            ['name'=>"采购",'code'=>"103",'icon'=>""],
            ['name'=>"订单",'code'=>"104",'icon'=>""],
            ['name'=>"收货",'code'=>"105",'icon'=>""],
            ['name'=>"验收",'code'=>"106",'icon'=>""],
            ['name'=>"入库",'code'=>"107",'icon'=>""],
            ['name'=>"完成",'code'=>"108",'icon'=>""],
            ['name'=>"退单",'code'=>"109",'icon'=>""],
        ]);
    }
}
