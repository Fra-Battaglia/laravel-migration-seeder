<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i <= 10; $i++) {
            $train_table_data = new Train();
    
            $train_table_data->azienda = $faker->word();
            $train_table_data->stazione_di_partenza = $faker->words(2, true);
            $train_table_data->stazione_di_arrivo = $faker->words(2, true);
            $train_table_data->orario_di_partenza = $faker->time();
            $train_table_data->orario_di_arrivo = $faker->time();         
            $train_table_data->codice_treno = $faker->numberBetween(2, 15);      
            $train_table_data->numero_carrozze = $faker->randomDigitNot(0);   
            $train_table_data->in_orario = $faker->boolean();
            $train_table_data->cancellato = $faker->boolean();
    
            $train_table_data->save();
        }
    }
}
