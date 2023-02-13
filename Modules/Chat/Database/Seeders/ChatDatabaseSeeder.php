<?php

namespace Modules\Chat\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Chat\Entities\User;
use Faker\Factory as Faker;

class ChatDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        // Dummy data user
        for ($i = 1; $i <= 30; $i++) {
            User::insert([
                'name' => $faker->name,
                'email' => $faker->unique->safeEmail,
                'password' => bcrypt('secret')
            ]);
        }
    }
}
