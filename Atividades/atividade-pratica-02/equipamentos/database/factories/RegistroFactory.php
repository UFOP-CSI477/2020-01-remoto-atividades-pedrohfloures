<?php

namespace Database\Factories;

use App\Models\Registro;
use App\Models\Equipamento;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'descricao' => $this->faker->randomElement($array = array ('Manutenção no cambio','Troca de pneus','Troca de bateria')),
            'datalimite' => $this->faker->date($format = 'd/m/Y', $max = 'now'),
            'tipo' => $this->faker->randomElement($array = array ('1','2','3')),
            'user_id' => User::factory(),
            'equipamento_id' => Equipamento::factory()
            
        ];
    }
}
