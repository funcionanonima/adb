<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $rol_user = Role::where('name', 'user')->first();
        // $rol_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'usuario';
        $user->email = 'user@user.com';
        $user->password = bcrypt('user');
        $user->save();
        $user->assignRole('user');

        $user = new User();
        $user->name = 'administrador';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->assignRole('admin');
    }
}
