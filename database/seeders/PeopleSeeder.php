<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        People::create([
            'name'          => "Jorge da Silva",
            'email'         => "jorge@terra.com.br",
            'category_id'   => 1
        ]);

        People::create([
            'name'          => "Flavia Monteiro",
            'email'         => "flavia@globo.com",
            'category_id'   => 2
        ]);

        People::create([
            'name'          => "Marcos Frota Ribeiro",
            'email'         => "ribeiro@gmail.com",
            'category_id'   => 2
        ]);

        People::create([
            'name'          => "Raphael Souza Santos",
            'email'         => "rsantos@gmail.com",
            'category_id'   => 1
        ]);

        People::create([
            'name'          => "Pedro Paulo Mota",
            'email'         => "ppmota@gmail.com",
            'category_id'   => 1
        ]);

        People::create([
            'name'          => "Winder Carvalho da Silva",
            'email'         => "winder@hotmail.com",
            'category_id'   => 3
        ]);

        People::create([
            'name'          => "Maria da Penha Albuquerque",
            'email'         => "mpa@hotmail.com",
            'category_id'   => 3
        ]);

        People::create([
            'name'          => "Rafael Garcia Souza",
            'email'         => "rgsouza@hotmail.com",
            'category_id'   => 3
        ]);

        People::create([
            'name'          => "Tabata Costa",
            'email'         => "tabata_costa@gmail.com",
            'category_id'   => 2
        ]);

        People::create([
            'name'          => "Ronil Camarote",
            'email'         => "camarote@terra.com.br",
            'category_id'   => 1
        ]);

        People::create([
            'name'          => "Joaquim Barbosa",
            'email'         => "barbosa@globo.com",
            'category_id'   => 1
        ]);

        People::create([
            'name'          => "Eveline Maria Alcantra",
            'email'         => "ev_alcantra@gmail.com",
            'category_id'   => 2
        ]);

        People::create([
            'name'          => "João Paulo Vieira",
            'email'         => "jpvieria@gmail.com",
            'category_id'   => 1
        ]);

        People::create([
            'name'          => "Carla Zamborlini",
            'email'         => "zamborlini@terra.com.br",
            'category_id'   => 1
        ]);
    }
}
