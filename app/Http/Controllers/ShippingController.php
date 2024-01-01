<?php

namespace App\Http\Controllers;

use App\Http\Services\Shipping\Methods\Amazon;
use App\Http\Services\Shipping\Methods\Ctt;
use App\Http\Services\Shipping\Methods\Sedex;

use Illuminate\Http\Request;

class ShippingController extends Controller
{
    protected $shipping;

    public function __construct(String $shippingMethod = "") {
        $this->shipping = match ($shippingMethod) {
            "amazon" => new Amazon(),
            "ctt" => new Ctt(),
            "sedex" => new Sedex(),
            default => "",
        };
    }

    public function handle(Request $request)
    {
        $data = $request->all();
        $this->__construct($data["shipping"]);

        return json_encode($this->shipping->calcShipping($data["distance"]));
    }
}
