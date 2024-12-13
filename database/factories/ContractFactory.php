<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract>
 */
class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'branch' => fake()->city(),
            'cust_id' => fake()->numberBetween(0, 99999999),
            'nameuser' => fake()->bothify('?????-#####'),
            'cae' => User::factory(),
            'unit_head' => User::factory(),
            'cpart_pic_lst' => fake()->company(),
            'serv_ty' => fake()->word(),
            'eff_dt' => fake()->date('Y_m_d'),
            'exp_dt' => fake()->date('Y_m_d'),
            'contr_period' => fake()->numberBetween(0, 100),
        ];
    }
}
