<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_superadmin = Role::where('name', 'superadmin')->first();
        $role_admin  = Role::where('name', 'admin')->first();
        $role_user  = Role::where('name', 'user')->first();

        $superadmin = new User();
        $superadmin->username = 'SuperAdmin';
        $superadmin->first_name = 'Garret';
        $superadmin->last_name = 'Bever';
        $superadmin->email = 'superadmin@gmail.com';
        $superadmin->password = bcrypt('login');
        $superadmin->save(); 
        $superadmin->roles()->attach($role_superadmin);
        // Eventually allow super admin to promote admins
        $admin = new User();
        $admin->username = 'Admin';
        $admin->first_name = 'Garret';
        $admin->last_name = 'Bever';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('login');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->username = 'User';
        $user->first_name = 'Garret';
        $user->last_name = 'Bever';
        $user->email = 'user@gmail.com';
        $user->password = bcrypt('login');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
