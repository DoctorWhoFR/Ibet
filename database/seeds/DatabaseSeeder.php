<?php

use App\Articles;
use App\Pronostiques;
use App\User;
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
        factory(Pronostiques::class, 30)->create();
        factory(Articles::class, 5)->create();
        factory(User::class, 1)->create();
    }
}
