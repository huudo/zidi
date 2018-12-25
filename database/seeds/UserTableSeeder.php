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
        //
        $role_user = Role::where('name','User')->first();
        $role_author = Role::where('name','Author')->first();
        $role_admin = Role::where('name','Admin')->first();

        $user = new User();
        $user->name = 'Visitor';
        $user->address = 'Ha Noi';
        $user->phone = '0936355388';
        $user->email = 'visitor@mail.com';
        $user->password = bcrypt('visitor');
        $user->save();
        $user->roles()->attach($role_user);
     
        $admin = new User();
        $admin->name = 'Admin';
        $admin->address = 'Ha Noi';
        $admin->phone = '0936399358';
        $admin->email = 'admin@mail.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
