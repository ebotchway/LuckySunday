<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::create([
            'fullname' => 'John Sika',
            'phone' => '0247299683',
            'location' => 'Akyem Odaa',
        ]);

        Player::create([
            'fullname' => 'Musa Abdullah',
            'phone' => '0237789561',
            'location' => 'Walawala',
        ]);

        Player::create([
            'fullname' => 'Ms Gyakyie',
            'phone' => '0271568923',
            'location' => 'Brong Ahafo',
        ]);

        Player::create([
            'fullname' => 'Emeralda Gyan',
            'phone' => '0207456123',
            'location' => 'Achimota',
        ]);

        Player::create([
            'fullname' => 'Ewura Aboda',
            'phone' => '0232291683',
            'location' => 'Kumasi',
        ]);

        Player::create([
            'fullname' => 'Mawuna Ogyira',
            'phone' => '0214293683',
            'location' => 'Volta',
        ]);

        Player::create([
            'fullname' => 'Mr Johnny Small',
            'phone' => '0247788883',
            'location' => 'Tarkoradi',
        ]);

        Player::create([
            'fullname' => 'Adwoa Rose',
            'phone' => '0241569683',
            'location' => 'Cape Coast',
        ]);

        Player::create([
            'fullname' => 'Mansa Teytey',
            'phone' => '0247295753',
            'location' => 'Osu',
        ]);
    }
}
