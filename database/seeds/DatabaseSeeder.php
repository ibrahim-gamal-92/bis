<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin'
        ]);
        $roleId = DB::getPdo()->lastInsertId();

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
        ]);
        $adminId = DB::getPdo()->lastInsertId();

        DB::table('role_user')->insert([
            'role_id' => $roleId,
            'user_id' => $adminId,
        ]);


    }
}
