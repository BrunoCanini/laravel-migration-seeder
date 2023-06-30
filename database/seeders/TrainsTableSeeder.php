<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'azienda' => 'TreniBoolean',
                'stazione_di_partenza' => 'Roma',
                'stazione_di_arrivo' => 'Milano',
                'orario_di_partenza' => '15:00:00',
                'orario_di_arrivo' => '18:00:00',
                'codice_treno' => 'PHPLM94',
                'numero_carrozze' => '9',
                'in_orario' => '1',
                'cancellato' => '0',
           ],

           [
            'azienda' => 'FrecciaRossa',
            'stazione_di_partenza' => 'Milano',
            'stazione_di_arrivo' => 'Roma',
            'orario_di_partenza' => '12:00:00',
            'orario_di_arrivo' => '14:00:00',
            'codice_treno' => 'HCPLM74',
            'numero_carrozze' => '10',
            'in_orario' => '1',
            'cancellato' => '0',
       ] 

        ];

        foreach ($trains as $train) {

          $newTrain = new Train();
          $newTrain->azienda = $train['azienda'];
          $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
          $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
          $newTrain->orario_di_partenza = $train['orario_di_partenza'];
          $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
          $newTrain->codice_treno = $train['codice_treno'];
          $newTrain->numero_carrozze = $train['numero_carrozze'];
          $newTrain->in_orario = $train['in_orario'];
          $newTrain->cancellato = $train['cancellato'];
          $newTrain->save();
        }
    }
}
