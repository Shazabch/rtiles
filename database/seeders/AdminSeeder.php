<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'Royal Tiles' ,
            'email' => 'admin@royaltiles.com',
            'password' => bcrypt('royaltiles') ,
        ];

        User::insert($user);
    }
}
