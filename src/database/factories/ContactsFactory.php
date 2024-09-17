<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contacts;

class ContactsFactory extends Factory
{

    protected $model = Contacts::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        $gender = ['男性'];
        
        $detail = ['商品の交換について'];
        return [
            
            'first_name' => $this->faker->firstnameMale(),
            'last_name' => $this->faker->lastname(),
            'gender' => $this->faker->randomElement($gender),
            'email' => $this->faker->unique()->safeEmail(),
            'tell' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
        
            'detail' => $this->faker->randomElement($detail),

        ];
    }
}
