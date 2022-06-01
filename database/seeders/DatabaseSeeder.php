<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ChannelSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(ConvertedVideoSeeder::class);
        $this->call(NotificationSeeder::class);
        $this->call(AlertSeeder::class);
        $this->call(ViewSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(LikeSeeder::class); 
    }
}
