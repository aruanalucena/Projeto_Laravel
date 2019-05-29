<?php

use Illuminate\Database\Seeder;
use app\Filme;

class FilmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Filme::class)->times(50)->create();
    }
}
