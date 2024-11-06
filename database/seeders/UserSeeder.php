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
        $role_admin = Role::where('code', 'admin')->first();
        $role_manager = Role::where('code', 'manager')->first();
        $role_user = Role::where('code', 'user')->first();
        User::create([
           'surname' => 'Шейкина',
           'name' => 'Елизавета',
           'patronymic' => 'Викторовна',
           'sex' => 1,
           'birthday' => '2005-04-23',
           'email' => 'liza.sheykina.2005@mail.ru',
           'password' => 'sheikina',
           'nickname' => 'sheikina-ev',
           'avatar' => null,
           'phone' => '+7(952)888-38-54',
           'api_token' => '1',
           'role_id' => $role_admin->id,
        ]);
        User::create([
            'surname' => 'Человек',
            'name' => 'Хороший',
            'patronymic' => 'Вроде',
            'sex' => 1,
            'birthday' => '2005-11-13',
            'email' => 'chel.shell@mail.ru',
            'password' => 'chel',
            'nickname' => 'chel',
            'avatar' => null,
            'phone' => '+7(913)845-75-42',
            'api_token' => '2',
            'role_id' => $role_manager->id,
        ]);
        User::create([
            'surname' => 'Новый',
            'name' => 'Человек',
            'patronymic' => 'Человечашка',
            'sex' => 1,
            'birthday' => '1995-10-13',
            'email' => 'chimin@mail.ru',
            'password' => 'koreanchel',
            'nickname' => 'koreanchel',
            'avatar' => null,
            'phone' => '+7(999)555-12-45',
            'api_token' => '3',
            'role_id' => $role_user->id,
        ]);
    }
}

