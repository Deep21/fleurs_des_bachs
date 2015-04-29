<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require __DIR__ . '/PayPal-PHP-SDK/autoload.php';
require __DIR__ . '/PayPal-PHP-SDK/common.php';
use PayPal\Api\Payment;

class Paypal
{

    private $client_id;
    private $client_secret;
    private $apiContext;

    public function __construct()
    {
        $ci = &get_instance();
        $ci->config->load('paypal');
        $this->client_id = $ci->config->item('client_id');
        $this->client_secret = $ci->config->item('client_secret');
        $this->apiContext = new \PayPal\Rest\ApiContext(new \PayPal\Auth\OAuthTokenCredential($this->client_id,

            // ClientID
            $this->client_secret

        // ClientSecret

        ));
        $this->apiContext->setConfig(array('mode' => 'sandbox', 'log.LogEnabled' => true, 'log.FileName' => '../PayPal.log', 'log.LogLevel' => 'DEBUG',

            // PLEASE USE `FINE` LEVEL FOR LOGGING IN LIVE ENVIRONMENTS
            'validation.level' => 'log', 'cache.enabled' => true,));
    }

    public function getTransaction_Id($id_payment)
    {
        try {
            $payment = Payment::get($id_payment, $this->apiContext);
            return $payment->getTransactions() [0]->getRelatedResources() [0]->getSale()->getId();
        } catch (Exception $ex) {
            ResultPrinter::printError("Get Payment", "Payment", null, null, $ex);
            exit(1);
        }
    }

    public function getReview($id_payment)
    {
        try {
            $payment = Payment::get($id_payment, $this->apiContext);
            $amount = $this->getAmountP($payment);
            $total = $amount->getTotal();
            $currency = $amount->getCurrency();
            $detail = $this->getDetails($payment);
            $detail->getSubtotal();
            $detail->getShipping();
            $detail->getTax();
            $detail->getFee();
            exit;
            return $payment->getTransactions() [0]->getRelatedResources() [0]->getSale()->getId();
        } catch (Exception $ex) {
            ResultPrinter::printError("Get Payment", "Payment", null, null, $ex);
            exit(1);
        }
    }

    public function getAmountP($payment)
    {
        $transaction = $payment->getTransactions();
        $amount = $transaction[0]->getAmount();
        return $amount;
    }

    public function getDetails($payment)
    {
        $detail = $this->getAmountP($payment)->getDetails();
        return $detail;
    }

    public function getTransactionId($payment)
    {
        try {
            return $payment->getTransactions() [0]->getRelatedResources() [0]->getSale()->getId();
        } catch (Exception $ex) {
            ResultPrinter::printError("Get Payment", "Payment", null, null, $ex);
            exit(1);
        }
    }

    public function getTransaction_date($payment)
    {
        try {
            return $payment->getTransactions() [0]->getRelatedResources() [0]->getSale()->getCreateTime();
        } catch (Exception $ex) {
            ResultPrinter::printError("Get Payment", "Payment", null, null, $ex);
            exit(1);
        }
    }

    public function getPayment($id_payment)
    {
        try {
            return Payment::get($id_payment, $this->apiContext);
        } catch (Exception $ex) {
            ResultPrinter::printError("Get Payment", "Payment", null, null, $ex);
            exit(1);
        }
    }

    public function getPayerInfo($payment)
    {
        $payerInfo = $payment->getPayer()->getPayerInfo();
        $payerInfo->getEmail();
        $payerInfo->getFirstName();
        $payerInfo->getLastName();
    }

    public function getPayerInfos($payment)
    {
        $payerInfo = $payment->getPayer()->getPayerInfo();
        $billingAddress = $payerInfo->getBillingAddress();
        $shippingAddress = $payerInfo->getShippingAddress();
        $shippingAddress->getCity();
        $shippingAddress->getLine1();
        $shippingAddress->getLine2();
        $shippingAddress->getPhone();
        $shippingAddress->getPostalCode();
        $shippingAddress->getCountryCode();
    }

    public function getItems($payment)
    {
        $itemList = $payment->getTransactions() [0]->getItemList();
        return $itemList->getItems();
    }
}

