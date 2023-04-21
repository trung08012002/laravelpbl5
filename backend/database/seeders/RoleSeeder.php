<?php

namespace database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('role')->insert([
            'id_role'=>2,
            'Name'=>'shopper',
        ]);
        DB::table('role')->insert([
            'id_role'=>3,
            'Name'=>'shipper',
        ]);
    }
}
