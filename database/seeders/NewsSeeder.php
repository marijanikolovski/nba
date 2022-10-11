<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\User;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::factory(5)->make()->each(function ($news) {
            $user = User::inRandomOrder()->first();

            $user->news()->save($news);
        });
    }
}
