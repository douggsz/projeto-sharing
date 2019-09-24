<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            administrador::class,
            categorias::class,
            tipo_usuario::class,
        ]);
    }
}
