<?php

use Illuminate\Database\Seeder;
use Modules\User\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            User::NAME => 'Admin User',
            User::EMAIL => 'admin@admin.com',
            User::PASSWORD => Hash::make('admin'),
        ]);

        User::create([
            User::NAME => 'John Doe',
            User::EMAIL => 'user@user.com',
            User::PASSWORD => Hash::make('user'),
        ]);
    }
}
