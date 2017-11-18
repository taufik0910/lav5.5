<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role admin
$adminRole = new Role();
$adminRole->name = "admin";
$adminRole->display_name = "Admin";
$adminRole->save();
// Membuat role member
$memberRole = new Role();
$memberRole->name = "member";
$memberRole->display_name = "Member";
$memberRole->save();
// Membuat sample admin
$admin = new User();
$admin->name = 'Admin Refox';
$admin->email = 'admin@gmail.com';
$admin->password = bcrypt('rahasia');
$admin->save();
$admin->attachRole($adminRole);
// Membuat sample member
$member = new User();
$member->name = "Sample Member";
$member->email = 'member@gmail.com';
$member->password = bcrypt('rahasia');
$member->save();
$member->attachRole($memberRole);
    }
}
