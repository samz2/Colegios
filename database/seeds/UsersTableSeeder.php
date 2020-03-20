<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            // 'ID'        => '',
            'user'      => 'acanales',
            'password'  => bcrypt('Inicio01'),
            'tipo'      => 1,
            'estado'    => 1
        ]);

    }
}
