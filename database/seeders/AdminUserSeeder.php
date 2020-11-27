<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Администратор сайта',
            'email' => config('config.admin_email'),
            'password' => password_hash(config('config.admin_password'), PASSWORD_DEFAULT),
            'email_verified_at' => '01.01.2010'
        ]);

        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => 'Admin',
            'personal_team' => true,
        ]));

    }
}
