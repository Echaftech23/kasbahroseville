<?php

namespace Database\Seeders;

use App\Models\PaymentMethode;
use Illuminate\Database\Seeder;

class PaymentMethodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentMethods = [
            [
                'type' => 'Credit Card',
                'payment_id' => 1,
            ],
            [
                'type' => 'Paypal',
                'payment_id' => 2
            ],
            [
                'type' => 'Cash',
                'payment_id' => 3
            ]
        ];

        foreach ($paymentMethods as $paymentMethod) {
            PaymentMethode::create($paymentMethod);
        }
    }
}
