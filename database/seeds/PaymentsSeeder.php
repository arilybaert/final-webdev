<?php

use Illuminate\Database\Seeder;
use App\Payment;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $db_payment = new Payment();

        $db_payment->firstname = $faker->firstName();
        $db_payment->lastname = $faker->lastName();
        $db_payment->email = $faker->firstName() . $faker->lastName().'outlook.com';
        $db_payment->msg = $faker->words($nb = 2, $asText = true);
        $db_payment->show = 'on';
        $db_payment->amount = '10';
        $db_payment->currency = 'EUR';


        $db_payment->save();
    }
}
