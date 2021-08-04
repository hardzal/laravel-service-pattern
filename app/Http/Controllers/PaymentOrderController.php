<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use Illuminate\Http\Request;

class PaymentOrderController extends Controller
{
    public function store() {
        $paymentGateway = new PaymentGateway();

        dd($paymentGateway->charge(3000));
    }
}
