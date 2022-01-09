<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persona;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Persona::factory(50)->create();
    }
}

//! SEEDERS: PARA LLENAR DATOS DE PRUEBA DE FORMA AUTOMATICA VAMOS A SEGUIR LOS SIGUIENTES PASOS:
//! 1. VAMOS A CREAR UN FACTORY PARA LA TABLA QUE DESEAMOS TESTEAR CON EL SGT COMANDO: php artisan make:factory [nombreTabla]Factory --model=Modelo
//! 2. DENTRO DEL FACTORY EN EL MÉTODO RUN SE LLENARAN LOS DATOS SEGÚN LOS COMANDOS QUE ESTAN EN LA DOCUMENTACIÓN DE LARAVEL.
//! 3. EN EL MÉTODO RUN DEL DATABASESEEDER SE EJECUTA EL MÉTODO FACTORY POR CADA TABLA COMO SE MUESTRA ACONTINUACIÓN:
//! Modelo::factory(#registros de prueba)->create()
//!4. SE EJECUTA EL MIGRATE FRESH CON LOS SEEDERS DE LA SIGUIENTE MANERA: php artisan migrate:fresh --seed

//! NOTA: CUANDO SE QUIEREN LLENAR DATOS MAS COMPLEJAS, POR EJEMPLO EN TABLAS RELACIONADAS, VAMOS A UTILIZAR LOS SEEDERS INDEPENDIENTES.
