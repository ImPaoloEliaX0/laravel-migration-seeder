<?php

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company_name' => 'Trenitalia',
                'departure_station' => 'Sicilia',
                'arrival_station' => 'Torino',
                'departure_time' => '2022-03-22 08:01:17',
                'arrival_time' => '2022-03-22 14:03:11',
                'code_number' => 'DEB76A',
                'carriages' => 7,
                'in_time' => false,
                'canceled' => false
            ],
            [
                'company_name' => 'Trenitalia',
                'departure_station' => 'Napoli',
                'arrival_station' => 'Venezia',
                'departure_time' => '2022-03-22 08:01:17',
                'arrival_time' => '2022-03-22 14:03:11',
                'code_number' => 'M6CR55',
                'carriages' => 6,
                'in_time' => false,
                'canceled' => false
            ],
            [
                'company_name' => 'Trenitalia',
                'departure_station' => 'Roma',
                'arrival_station' => 'Puglia',
                'departure_time' => '2022-03-22 08:01:17',
                'arrival_time' => '2022-03-22 14:03:11',
                'code_number' => 'VAK091',
                'carriages' => 11,
                'in_time' => false,
                'canceled' => false
            ],
            [
                'company_name' => 'Trenitalia',
                'departure_station' => 'Catania',
                'arrival_station' => 'Palermo',
                'departure_time' => '2022-03-22 08:01:17',
                'arrival_time' => '2022-03-22 14:03:11',
                'code_number' => 'LO098A',
                'carriages' => 10,
                'in_time' => false,
                'canceled' => false
            ],
            [
                'company_name' => 'Trenitalia',
                'departure_station' => 'Torino',
                'arrival_station' => 'Milano',
                'departure_time' => '2022-03-22 08:01:17',
                'arrival_time' => '2022-03-22 14:03:11',
                'code_number' => '95JFMV',
                'carriages' => 8,
                'in_time' => false,
                'canceled' => false
            ],
        ];

        foreach ($trains as $train) {
            $new_train =  new Train();
            $new_train->fill($train);
            $new_train->save();
        }
    }
}
