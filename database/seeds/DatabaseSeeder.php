<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'root',
            'email' => 'root@gmail.com',
            'password' => bcrypt('secret'),
            'role'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ];

        DB::table('users')->insert($user);

        $gender = [
            [
                'name'=>'mail',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'name'=>'femail',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];

        foreach($gender as $item) {
            DB::table('gender')->insert($item);
        }

        $newsletters = [
            [
                'name'=>'receive images',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'name'=>'receive promotions',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'name'=>'receive updates',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'name'=>'receive job offers',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];

        foreach($newsletters as $newsletter){
            DB::table('newsletter')->insert($newsletter);
        }

        // $this->call(UsersTableSeeder::class);
    }
}
