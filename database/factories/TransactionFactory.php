<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    
    public function definition()
    {
        // اختيار مستخدمين عشوائيين من جدول users
        $sender = User::inRandomOrder()->first();
        $recipient = User::inRandomOrder()->first();

        return [
            'sender_id' => $sender ? $sender->id : null,
            'recipient_id' => $recipient ? $recipient->id : null, // يمكن أن يكون null للمستلم المجهول
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'currency' => 'LYD',
            'transaction_type' => $this->faker->randomElement(['transfer', 'payment', 'deposit', 'withdrawal']),
            'status' => $this->faker->randomElement(['pending', 'completed', 'blocked']),
            'risk_score' => $this->faker->numberBetween(0, 100),
            'risk_action' => $this->faker->randomElement(['ALLOW','CHALLENGE','BLOCK']),
            'transaction_hour' => $this->faker->time('H:i:s'), // الوقت العشوائي
            'description' => $this->faker->optional()->sentence(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

}
