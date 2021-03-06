<?php

namespace Database\Factories;

use App\Models\MoneyInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class MoneyInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MoneyInfo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'month' => $this->faker->month,
            'money' => $this->faker->randomDigit,
            'category' => $this->faker->realText(rand(15,40)),
            'detail' => $this->faker->realText(rand(15,40)),
            'memo' => $this->faker->realText(rand(15,40)),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
