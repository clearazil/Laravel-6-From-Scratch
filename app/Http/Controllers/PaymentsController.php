<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
        request()->user()->notify(new PaymentReceived());

        return redirect(route('payments.create'))
            ->with('message', 'Payment made!');
    }
}
