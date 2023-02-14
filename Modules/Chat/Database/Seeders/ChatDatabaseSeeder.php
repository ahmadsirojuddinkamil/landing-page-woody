<?php

namespace Modules\Chat\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Chat\Entities\User;
use Faker\Factory as Faker;
use GuzzleHttp\Promise\Create;

class ChatDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Dummy data user
        User::factory(30)->create();
    }
}
