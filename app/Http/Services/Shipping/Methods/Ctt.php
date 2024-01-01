<?php 

namespace App\Http\Services\Shipping\Methods;

use App\Http\Services\Shipping\ShippingInterface;

class Ctt implements ShippingInterface
{
    public function calcShipping($distance)
    {
        return ["Delivery" => "CTT", "Distance" => "$".$distance];
    } 
}  