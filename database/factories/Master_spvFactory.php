<?php

namespace Database\Factories;

use App\Models\Master_spv;
use Illuminate\Database\Eloquent\Factories\Factory;

class Master_spvFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Master_spv::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'serialnumber_spv'=>$this->faker->unique()->serialnumber_spv(),
            'nik_spv'=>$this->faker->nik_spv(),
            'fullname_spv'=>$this->faker->fullname_spv(),
            'cost_center'=>$this->faker->cost_center(),
            'location'=>$this->faker->location(),
            'level'=>$this->faker->level(),
            'created_at'=>$this->faker->created_at(),
            'created_by'=>$this->faker->created_by(),
            'company'=>$this->faker->company()
        ];
    }
}
