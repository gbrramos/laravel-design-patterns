<?php 

namespace App\Http\Services\Shipping\Methods;

use App\Http\Services\Shipping\ShippingInterface;

class Amazon implements ShippingInterface
{
    public function calcShipping($distance)
    {
        return ["Delivery" => "Amazon", "Distance" => "$".$distance];
    } 
}  