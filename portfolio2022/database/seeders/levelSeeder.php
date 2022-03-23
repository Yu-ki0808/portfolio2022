<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\level;

class levelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i =1; $i<=100; $i ++){
            $level = $i;
            $exp = ($i -1)*2*$i;


            $log = new level();
            $log ->Lv =$level;
            $log->EXP = $exp;
            $log->save();
        }
    }
    
}
