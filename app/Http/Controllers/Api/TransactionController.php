<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function CalculateDelivery() {

    }
    public function googlePlaces() {

    }
    public function ConfirmPayment() {

    }
}
