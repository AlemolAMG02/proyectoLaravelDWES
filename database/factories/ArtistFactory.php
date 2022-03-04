<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class ArtistFactory extends Factory
{
    const IMG_ARTISTA = 'storage/artistsPhotos/grupo1.jpg';

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'anio' => $this->faker->year('now'),
            'esGrupo' => 0,
            'estilo' => $this->faker->companyEmail(),
            'descripcion' => $this->faker->text(100),
            'foto' => self::IMG_ARTISTA
        ];
    }
}
