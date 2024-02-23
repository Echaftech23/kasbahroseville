<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payments = [
            [
                'amountPaid' => 100.00,
                'totalAmount' => 500.00,
                'reservation_id' => 1, // Replace with the actual reservation ID
            ],
            [
                'amountPaid' => 200.00,
                'totalAmount' => 1000.00,
                'reservation_id' => 2, // Replace with the actual reservation ID
            ],
            [
                'amountPaid' => 50.00,
                'totalAmount' => 200.00,
                'reservation_id' => 3, // Replace with the actual reservation ID
            ],
        ];
        
        foreach ($payments as $payment) {
            Payment::create($payment);
        }
    }
}
