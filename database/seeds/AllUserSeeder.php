<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AllUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin seeder
        DB::table('users')->insert([
            'name'  =>  'Admin',
            'email' =>  'admin@admin.com',
            'password'  =>  Hash::make('12345678'),
            'user_type' =>  '1',
            'status'    =>  '1',
            'is_approved'   =>  '1'
        ]);

        // client seeder
        DB::table('users')->insert([
            'name'  =>  'Client',
            'email' =>  'client@client.com',
            'password'  =>  Hash::make('123456789'),
            'user_type' =>  '3',
            'status'    =>  '1',
            'is_approved'   =>  '1'
        ]);

        // worker seeder
        DB::table('users')->insert([
            'name'  =>  'Worker',
            'email' =>  'worker@worker.com',
            'password'  =>  Hash::make('123456789'),
            'user_type' =>  '2',
            'status'    =>  '1',
            'is_approved'   =>  '1'
        ]);
    }
}
