<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre = $this->faker->name();
        return [
            'cedula' => $this->faker->numberBetween(0000000000,9999999999),
            'nombre' => $nombre,
            'apellido' => $this->faker->name(),
            'fijo' => $this->faker->numberBetween(0000000000,9999999999),
            'celular' => $this->faker->numberBetween(0000000000,9999999999),
            'direccion' => $this->faker->name(),
            'municipio' => $this->faker->randomElement(['MEDELLIN','BELLO']),
            'barrio' => $this->faker->randomElement(['TERRANOVA','PRADITO']),
            'fechanac' => now(),
            'estcivil' => $this->faker->randomElement(['SOLTERO','CASADO']),
            'email' => $this->faker->name(),
            'slug' => Str::slug($nombre,'-')//convierte todo a minuscula y los espacios los reemplaza por un guion
        ];
    }
}
