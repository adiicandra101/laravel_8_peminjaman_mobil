<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator'
        ]);

        $pengguna = Role::create([
            'name' => 'user',
            'display_name' => 'User'
        ]);

        $user = new User();
        $user->name = 'Admin Chandra';
        $user->email = 'Chandra@gmail.com';
        $user->password = Hash::make('password');
        $user->save();

        $pengunjung = new User();
        $pengunjung->name = 'User';
        $pengunjung->email = 'useraja@gmail.com';
        $pengunjung->password = Hash::make('useraja');
        $pengunjung->save();

        $user->attachRole($admin);
        $pengunjung->attachRole($pengguna);
    }
}
