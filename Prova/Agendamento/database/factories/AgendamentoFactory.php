<?php

namespace Database\Factories;

use App\Models\Agendamento;
use App\Models\Pessoa;
use App\Models\Coleta;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgendamentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agendamento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pessoa_id' => Pessoa::factory(),
            'coleta_id' => Coleta::factory(),
            'data' => $this->faker->date($format = 'd/m/Y', $max = 'now')
        ];
    }
}
