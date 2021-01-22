<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $currentTimeStamp = time();
        $randomfigure = rand(1,20);
        return [
            'name' => $this->faker->name,
            'nickname'=> $this->faker->unique()->username.$currentTimeStamp.$rand,
            'dateJoined'=>$this->faker->dateTimeBetween('-100 days', '+100 days'),
            'lastLogin'=>$this->faker->dateTimeBetween('-20 days', '+20 days'),
            'email' => $this->faker->username.$currentTimeStamp.'@gmail.com',
            'password'=>Hash::make('password')
        ];
    }
}
