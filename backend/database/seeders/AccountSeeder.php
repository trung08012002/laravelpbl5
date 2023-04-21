<?php

namespace database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
            'username' => "cong",
            'email'=>'cong@gmail.com',
            'password' => Hash::make('123456'),
            'id_role'=>2,
        ]);
        DB::table('account')->insert([
            'username' => "trung",
            'email'=>'trung@gmail.com',
            'password' => Hash::make('123456'),
            'id_role'=>3,
        ]);
    }
}
