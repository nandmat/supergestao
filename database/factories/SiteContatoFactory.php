<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContato>
 */
class SiteContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome'=>$this->faker->name,
            'telefone' =>$this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail,
            'motivo_contato' => $this->faker->randomDigit(1),
            'mensagem'=> $this->faker->text()
        ];
    }
}
