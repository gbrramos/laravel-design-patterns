<?php 

namespace App\Http\Services\Shipping;

interface ShippingInterface
{
    function calcShipping($distance);
}  