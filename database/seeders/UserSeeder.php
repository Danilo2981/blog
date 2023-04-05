<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usuario con todo lo especificado en el factory
        User::factory(2)->create();

        // Usuario con la excepcion, que retorna el método state
        User::factory(2)->unverified()->create();

        // Usuario con características específicas
        User::factory()->create([
            'name' => 'Danilo Vega',
            'email' => 'danilo.vega@mail.com',
            'password' => bcrypt('12345678'),	
        ]);
    }
}
