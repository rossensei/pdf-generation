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
        // Client::factory(30)->create();

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
                'email' => 'yenrezc09@gmail.com',
                'initial_deposit' => 18000,
            ],
            [
                'last_name' => 'Flores',
                'first_name' => 'Rosalino Sr.',
                'middle_name' => 'Lozano',
                'phone_number' => '09388292167',
                'address' => 'Pooc Oriental, Tubigon, Bohol.',
                'birth_date' => '1973-06-11',
                'email' => 'rossxkiller123@gmail.com',
                'initial_deposit' => 30000,
            ],
            [
                'last_name' => 'Flores',
                'first_name' => 'Maria Lorna',
                'middle_name' => 'Tumabang',
                'phone_number' => '09326565027',
                'address' => 'Pinayagan Sur, Tubigon, Bohol.',
                'birth_date' => '1967-04-27',
                'email' => 'senpai.ross332@gmail.com',
                'initial_deposit' => 30000,
            ],
            [
                'last_name' => 'Encina',
                'first_name' => 'Altair Jeriko',
                'middle_name' => 'Basco',
                'phone_number' => '09753767355',
                'address' => 'Poolba, Tubigon, Bohol.',
                'birth_date' => '2001-12-08',
                'email' => 'altenci0812@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Flores',
                'first_name' => 'Blue',
                'middle_name' => 'Manuyag',
                'phone_number' => '09535387645',
                'address' => 'Santa Monica, Lubao, Pampanga.',
                'birth_date' => '2006-03-08',
                'email' => 'czerneytanjuaquiomanuyag@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Calunia',
                'first_name' => 'Lester',
                'middle_name' => 'Cosinero',
                'phone_number' => '09987453645',
                'address' => 'Guiwanon, Tubigon, Bohol.',
                'birth_date' => '2002-07-05',
                'email' => 'calunialester7@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Manuyag',
                'first_name' => 'Syesha',
                'middle_name' => 'Tanjuaquio',
                'phone_number' => '09555453645',
                'address' => 'Santa Monica, Lubao, Pampanga.',
                'birth_date' => '2002-07-05',
                'email' => 'manuyag.syesha.t@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Manuyag',
                'first_name' => 'Ravijah Dwayne',
                'middle_name' => 'Tanjuaquio',
                'phone_number' => '09555453645',
                'address' => 'Santa Monica, Lubao, Pampanga.',
                'birth_date' => '2007-08-04',
                'email' => 'ravijadwaynem@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Caminos',
                'first_name' => 'Apple Jean',
                'middle_name' => 'Andoy',
                'phone_number' => '0977455645',
                'address' => 'Calape, Bohol.',
                'birth_date' => '2000-08-04',
                'email' => 'applegwaps23@gmail.com',
                'initial_deposit' => 20000,
            ],
        ];

        foreach($client as $c) {
            Client::create($c);
        }
    }
}
