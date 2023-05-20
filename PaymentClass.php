<?php



abstract class PaymentStrategy 
{
    abstract public function pay($amount);
}

class VisaPayment extends PaymentStrategy
{
    public function pay($amount) 
    {
        echo "Paid $amount using Visa";
    }
}

class CashPayment extends PaymentStrategy
{
    public function pay($amount) 
    {
        echo "Paid $amount using Cash";
    }
}

class BankTransferPayment extends PaymentStrategy
{
    public function pay($amount) 
    {
        echo "Paid $amount using Bank Transfer";
    }
}  

class PayPalPayment extends PaymentStrategy
{
    public function pay($amount) 
    {
        echo "Paid $amount using PayPal";      
    } 
}

class Context 
{
    private $strategy;

    public function __construct(PaymentStrategy $strategy) 
    {
        $this->strategy = $strategy;
    }

    public function makePayment($amount) 
    {
        $this->strategy->pay($amount);
    }
} 

$context = new Context(new VisaPayment());  
$context->makePayment(100);
// Output: Paid 100 using Visa

$context = new Context(new CashPayment());  
$context->makePayment(200);
// Output: Paid 200 using Cash  

$context=new Context(new BankTransferPayment());  
$context->makePayment(150);
// Output: Paid 150 using Bank Transfer

$context=new Context(new PayPalPayment());  
$context->makePayment(250);
// Output: Paid 250 using PayPal   




?>