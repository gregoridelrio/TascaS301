<?php
include_once('Payment.php');
include_once('PaymentProcessor.php');
include_once('StripePaymentGateway.php');
include_once('PayPalPaymentGateway.php');
include_once('BankTransfer.php');


$stripe = new PaymentProcessor(new StripePaymentGateway());
echo $stripe->procesarPago(100) . PHP_EOL;

$paypal = new PaymentProcessor(new PayPalPaymentGateway());
echo $paypal->procesarPago(100) . PHP_EOL;

$bank = new PaymentProcessor(new BankTransfer());
echo $bank->procesarPago(100) . PHP_EOL;
