<?php

namespace Database\Factories;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Payment::class;

    public function definition()
    {
        $products = ['Mobile', 'Laptop', 'Watch', 'Mac Book'];
        static $invoice = 20;
        return [
        'product_name' => $products[rand(0, 3)],
        'currency' => 'BDT',
        'amount' => rand(1500, 2000),
        'invoice' => $invoice++,
        'status' => 'Pending'
        ];
    }
}
