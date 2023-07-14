<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(30)->create();

        $client = [
            [
                'last_name' => 'Flores',
                'first_name' => 'Rosalino',
                'middle_name' => 'Tumabang',
                'phone_number' => '09359766852',
                'address' => 'Pinayagan Sur, Tubigon, Bohol.',
                'birth_date' => '2002-12-29',
                'email' => 'fross0988@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Manuyag',
                'first_name' => 'Czerney',
                'middle_name' => 'Tanjuaquio',
                'phone_number' => '09382272279',
                'address' => 'Santa Monica, Lubao, Pampanga.',
                'birth_date' => '2004-10-09',
                'email' => 'rossxkiller123@gmail.com',
                'initial_deposit' => 15000,
            ],
        ];

        foreach($client as $c) {
            Client::create($c);
        }
    }
}
