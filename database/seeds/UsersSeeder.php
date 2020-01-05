<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Make Admin Role
        $adminRole = new Role();
        $adminRole->name = 'admin';
        $adminRole->display_name = 'Admin';
        $adminRole->save();

        // Make User Role
        $clientRole = new Role();
        $clientRole->name = 'client';
        $clientRole->display_name = 'Client';
        $clientRole->save();

        // Buat Sample Admin 
        $admin = new User();
        $admin->name = 'Admin Rayhan';
        $admin->email = 'adminray@gmail.com';
        $admin->password = bcrypt('1234567');
        $admin->save();
        $admin->attachRole($adminRole);

        // Buat Sample Admin 
        $client = new User();
        $client->name = 'Alan';
        $client->email = 'alan@gmail.com';
        $client->password = bcrypt('1234567');
        $client->save();
        $client->attachRole($clientRole);
    }
}
