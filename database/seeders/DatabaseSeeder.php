<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->command->line('Seeding DB...');
        $this->call(CategoriasSeeder::class);
        $this->call(ProductosSeeder::class);

    }
}
