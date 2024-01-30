<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::updateOrCreate(
            [
                'name'=> 'Super Admin',
            ],
            [
                'name' => 'super-admin',
                'title' => 'Super Admin',
                'description' => 'Sitenin Genel Yönetimini Sağlar',
            ]
        );

        $roleBlog = Role::updateOrCreate(
            [
                'name' => 'blog-yoneticisi',
            ],
            [
                'name' => 'blog-yoneticisi',
                'title' => 'Blog Yöneticisi',
                'description' => 'Blog Yönetimini Sağlar',
            ]
        );
        $roleEcommerce = Role::updateOrCreate(
            [
                'name' => 'E-ticaret-yoneticisi',
            ],
            [
                'name' => 'e-ticaret-yoneticisi',
                'title' => 'E-Ticaret Yöneticisi',
                'description' => 'E-Ticaret Yönetimini Sağlar',
            ]
        );

        $user = User::updateOrCreate(
            ['email' => 'gokay@gmail.com'], // Doğru şekilde e-posta alanını belirtin
            [
                'name' => 'Gökay',
                'email' => 'gokay@gmail.com',
                'password' => bcrypt('12345678'),
            ]
        );
         $user->assignRole($role);
        if(User::count() < 2){
           $users = User::factory(100)->create();
           foreach($users as $user){
              $user->assignRole(rand(0,1) == 1 ? $roleBlog : $roleEcommerce);
           }
        }

    }
}
