<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = [
          ['brand' => 'First Car Brand', 'year' => '2006'],
          ['brand' => 'Second Car Brand', 'year' => '2007'],
          ['brand' => 'Third Car Brand', 'year' => '2008'],
        ];

        foreach ($seeds as $seed) {
          $car = new App\Car;

          $car->brand = $seed['brand'];
          $car->year = $seed['year'];

          $car->save();
        }
    }
}
