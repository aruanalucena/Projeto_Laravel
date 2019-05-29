<?php

use Illuminate\Database\Seeder;
use App\Documentario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Documentario::truncate();

        
      $documentario = new Documentario;
      $documentario->name = 'Guerras Mundiais';
      $documentario->LENGTH = 120;
      $documentario->save();

      $documentario = new Documentario;
      $documentario->name = 'Agua e planeta';
      $documentario->LENGTH = 240;
      $documentario->save();

      
    }
}
