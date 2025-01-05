<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartCheckoutController extends Controller
{
    public function cart(){
        return view("frontend.services.cart.index");
    }
    public function checkout(){
        
        return view("frontend.services.checkout.index");
    }
}
