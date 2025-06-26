<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
            $user = [
                [
                'FirstName' => 'Admin',
                'LastName' => 'Admin',
                'Phone' => '1234567890',
                'email'  => 'admin@admin.com',
                'is_admin' => '1',
                'password' => bcrypt('12345678')
            ],
            [
                'FirstName' => 'User',
                'LastName' => 'User',
                'Phone' => '0987654321',
                'email'  => 'user@user.com',
                'is_admin' => '0',
                'password' => bcrypt('12345678')
            ]
        ];

        foreach($user as $key => $value) {
            User::create($value);
        }
    }
}
