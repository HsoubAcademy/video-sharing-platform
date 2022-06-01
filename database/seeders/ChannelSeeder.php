<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1 = User::create([
            'name' => "hsoub-academy",
            'email' => 'academy-hsoub@gmail.com',
            'password' => bcrypt('11111111'),
            'administration_level' => '2',
            'current_team_id' => '1',
        ]);

        $channel2 = User::create([
            'name' => "hsoub",
            'email' => 'hsoub@gmail.com',
            'password' => bcrypt('11111111'),
            'administration_level' => '0',
            'current_team_id' => '2',
        ]);

        $channel3 = User::create([
            'name' => "Mostaql",
            'email' => 'Mostaql@gmail.com',
            'password' => bcrypt('11111111'),
            'administration_level' => '0',
            'current_team_id' => '3',
        ]);

        $channel4 = User::create([
            'name' => "Baeed",
            'email' => 'Baeed@gmail.com',
            'password' => bcrypt('11111111'),
            'administration_level' => '0',
            'current_team_id' => '4',
        ]);

        $channel5 = User::create([
            'name' => "Khamsat",
            'email' => 'Khamsat@gmail.com',
            'password' => bcrypt('11111111'),
            'administration_level' => '0',
            'current_team_id' => '5',
        ]);

        $channel6 = User::create([
            'name' => "Ana",
            'email' => 'Ana@gmail.com',
            'password' => bcrypt('11111111'),
            'administration_level' => '0',
            'current_team_id' => '6',
        ]);
    }
}
