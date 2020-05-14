<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => "Administrator",
                'email' => 'tazo@gmail.com',
                'password' => bcrypt(env('TAZO_PASSWORD')),
            ],
            [
                'name' => "Administrator",
                'email' => 'bukianatia@gmail.com',
                'password' => bcrypt(env('NATIA_PASSWORD')),
            ]
        ];

        $user = new User();

        foreach($users as $usr) {
            if (!$user->where('email', $usr['email'])->exists()) {
                $user->create($usr);
            }
        }

    }
}
