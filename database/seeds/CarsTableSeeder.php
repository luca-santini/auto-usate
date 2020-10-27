<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            [
                    'marca' => 'Renault',
                    'modello' => 'Clio',
                    'carburante' => 'Diesel',
                    'porte' => 5
            ],
            [
                    'marca' => 'Fiat',
                    'modello' => 'Punto',
                    'carburante' => 'Benzina',
                    'porte' => 5
            ],
            [
                    'marca' => 'BMW',
                    'modello' => 'Serie 1',
                    'carburante' => 'Diesel',
                    'porte' => 3
            ],
            [
                    'marca' => 'Seat',
                    'modello' => 'Leon',
                    'carburante' => 'Diesel',
                    'porte' => 3
            ],
            [
                    'marca' => 'Audi',
                    'modello' => 'A3',
                    'carburante' => 'Diesel',
                    'porte' => 5
            ]
        ];
        foreach ($cars as $car) {
            $newCar = new Car();
            $newCar->marca = $car['marca'];
            $newCar->modello = $car['modello'];
            $newCar->carburante = $car['carburante'];
            $newCar->porte = $car['porte'];
            $newCar->save();
        }
    }
}
