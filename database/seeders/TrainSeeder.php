<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        /*
                   $table->id();
            $table->string('Azienda', 50);
            $table->string('Stazione di partenza', 100);
            $table->string('Stazione di arrivo', 100);
            $table->dateTime('Orario di partenza');
            $table->dateTime('Orario di arrivo');
            $table->string('Codice Treno', 20);
            $table->tinyInteger('Numero Carrozze')->default(2);
            $table->boolean('In orario')->default(True);
            $table->boolean('Cancellato')->default(False);
            $table->timestamps();
        */
        for ($i = 0; $i < 25; $i++) {
            $train = new Train();
            $train->Azienda = $faker->company();
            $train->Stazione_di_partenza = $faker->city();
            $train->Stazione_di_arrivo = $faker->city();
            $train->Orario_di_partenza = $faker->dateTime();
            $train->Orario_di_arrivo = $faker->dateTime();
            $train->Codice_Treno = $faker->unique()->randomNumber(8);
            $train->Numero_Carrozze = $faker->numberBetween(1, 10);
            $train->In_orario = $faker->boolean();
            $train->Eliminato = $faker->boolean();
            $train->save();
        }
    }
}
