<?php 

namespace App\Http\Services\Shipping\Methods;

use App\Http\Services\Shipping\ShippingInterface;

class Sedex implements ShippingInterface
{
    public function calcShipping($distance)
    {
        return ["Delivery" => "Sedex", "Distance" => "$".$distance];
    } 
}  