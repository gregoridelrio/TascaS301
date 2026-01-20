<?php

class PayPalPaymentGateway implements Payment
{
  public function sendPayment(float $amount): string
  {
    return "{$amount} payment processed by Paypal";
  }
}
