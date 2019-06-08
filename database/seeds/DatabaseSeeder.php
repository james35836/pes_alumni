<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Carbon\Carbon;

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
                'created_at' => Carbon::now(),
            ]);

            DB::table('userinfos')->insert([
                'name' => $faker->name,
                'user_id' => $id,
            ]);
        }
        $this->posts();
        $this->products();
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
            $categories = ['T-shirt','Pants','Jersey'];
            foreach ($categories as $index) {
                DB::table('categories')->insert([
                    'name' => $index,
                    'description' => $index,
                ]);
            }
        }
    }


    public function events(){
        if (DB::table('events')->count()<= 0) 
        {
            DB::table('events')->insert([
                'id'          => 1,
                'name'          => "Alumni Homecoming",
                'description'   => "Lets get together",
                'thumbnail'     => "/event_img/event-152202636.png",
                'time'          => "6:00 am - 9:00 pm",
                'date'          => Carbon::now(),
                'place'         => "Eaglesview Hotel",
                'group_id'      => 1,
                'created_at'    => Carbon::now(),
                'user_id'       => 1,
            ]);
        }
    }

    public function posts(){
        if (DB::table('posts')->count()<= 0) 
        {
            DB::table('posts')->insert([
                'id'          => 1,
                'thumbnail'     => "/posts_img/default_image.png",
                'name'          => "Alumni Homecoming",
                'date'          => Carbon::now(),
                'time'          => "6:00 am - 9:00 pm",
                'place'         => "Eaglesview Hotel",
                'description'   => "Lets get together",
                'group_id'      => 1,
                'user_id'       => 1,
                'created_at'    => Carbon::now(),
            ]);

            DB::table('posts')->insert([
                'id'          => 2,
                'thumbnail'     => "/posts_img/default_image.png",
                'name'          => "Alumni Events",
                'date'          => Carbon::now(),
                'time'          => "6:00 am - 9:00 pm",
                'place'         => "Eaglesview Hotel",
                'description'   => "Lets get together",
                'group_id'      => 1,
                'user_id'       => 1,
                'created_at'    => Carbon::now(),
            ]);
        }
    }

    public function products(){
        if (DB::table('products')->count()<= 0) 
        {
            DB::table('products')->insert([
                'id'          => 1,
                'thumbnail'     => "/products_img/tshirt.jpg",
                'name'          => "Fila Shirt",
                'colors'        => "Blue/Red",
                'price'         => 248,
                'sizes'         => "L/M/S",
                'discount'      => "0",
                'description'   => "Sample Product",
                'category_id'   => 1,
                'created_at'    => Carbon::now(),
            ]);

            DB::table('products')->insert([
                'id'          => 2,
                'thumbnail'     => "/products_img/tshirt.jpg",
                'name'          => "Nike Shirt",
                'colors'        => "Blue/Red",
                'price'         => 248,
                'sizes'         => "L/M/S",
                'discount'      => "0",
                'description'   => "Sample Product",
                'category_id'   => 2,
                'created_at'    => Carbon::now(),
            ]);
        }
    }

    
    
  
}
