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
        DB::table('users')->insert([
            'name' => 'root',
            'email' => 'root@gmail.com',
            'password' => bcrypt('secret'),
            'role'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
