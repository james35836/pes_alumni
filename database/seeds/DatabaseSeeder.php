<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->groups();
        $this->categories();
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            $id = DB::table('users')->insertGetId([
                'email' => $faker->email,
                'group_id' => 1,
                'password' => bcrypt('secret'),
            ]);

            DB::table('userinfos')->insert([
                'name' => $faker->name,
                'user_id' => $id,
            ]);
        }
    }

    public function groups()
    {
        if (DB::table('groups')->count()<= 0) 
        {
            $start  = 1972;
            $end    = 1973;
            for($i = 0; $i <= 60; $i++)
            {
                $year_start  = $start + $i;
                $year_end    = $end + $i;
                $years       = $year_start."-".$year_end;

                $name        = $i == 0 ? "NO BATCH" : "BATCH '".$year_end;
                DB::table('groups')->insert([
                    'id' => $i + 1,
                    'name' => $name,
                    'year' => $years,
                ]);
                
            }
        }
    }
    

    public function categories()
    {
        if (DB::table('categories')->count()<= 0) 
        {
            DB::table('categories')->insert([
                    'id' => 1,
                    'name' => "T-SHIRT",
                    'description' => "T-SHIRT",
                ]);
        }
    }
  
}
