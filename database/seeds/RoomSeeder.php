<?php

use App\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // faker library instantiëren, om te gebruiken
        $faker = Faker\Factory::create();

        // nieuwe instantie van Room-model
        $room = new Room();

        // willekeurig nummer en naam
        $room->number = rand(100,200) . '_' . Str::random(3);
        $room->name = $faker->company;

        // bewaren
        $room->save();
    }
}
