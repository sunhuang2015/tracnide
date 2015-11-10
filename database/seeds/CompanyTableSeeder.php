<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

     /*   Corp. 0BALL
        B1   000B1
        B2F  00B2F
        B3   000B3
        B4   000B4
        B5   000B5*/

        DB::table('companies')->delete();
        DB::table('companies')->insert([
            ['name'=>"Corp",'DIM'=>'0BALL'],
            ['name'=>"B1",'DIM'=>'000B1'],
            ['name'=>"B2F",'DIM'=>'00B2F'],
            ['name'=>"B3",'DIM'=>'000B3'],
            ['name'=>"B4",'DIM'=>'000B4'],
            ['name'=>"B5",'DIM'=>'000B5'],

        ]);
    }
}
