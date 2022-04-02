<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\GruposSeeder;
use Database\Seeders\TiposSeeder;
use Database\Seeders\HistoriaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Se manda a llamar el seeder de grupos
        $this->call(GruposSeeder::class);

        //Se manda a llamar el seeder de tipos
        $this->call(TiposSeeder::class);

        //Se manda a llamar el seeder de historia
        $this->call(HistoriaSeeder::class);
    }
}
