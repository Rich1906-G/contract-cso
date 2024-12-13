<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\DocIsu;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DocIsu>
 */
class DocIsuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'doc_isu_cd' => fake()->regexify('[A-Z]{5}'),
            'doc_isu_nm' => fake()->name(),
            'doc_isu_ord' => fake()->randomDigitNotNull(),
            'doc_isu_val' => fake()->name(),
            'doc_isu_desc' => fake()->sentences(),
            'cre_by' => fake()->name(),
            'cre_tm' => fake()->date(),
        ];
    }
}
