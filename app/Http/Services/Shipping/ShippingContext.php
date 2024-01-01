<?php 

namespace App\Http\Services\Shipping;
use App\Http\Services\Shipping\Methods\Amazon;
use App\Http\Services\Shipping\Methods\Ctt;
use App\Http\Services\Shipping\Methods\Sedex;

class ShippingContext
{
   private ShippingInterface $shipping;

   public function __construct(string $shippingMethod)
   {
        
   }

   public function handle($distance)
   {
        return $this->shipping->calcShipping($distance);
   }

}  