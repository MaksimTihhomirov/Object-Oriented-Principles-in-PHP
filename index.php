
<?php

interface BillingPortal
{
    public function getCustomer();
    public function getSubscription();
}

class StripeBillingPortal implements BillingPortal
{
    public function getCustomer()
    {
        return 'Stripe customer';
    }

    public function getSubscription()
    {
        return 'Stripe subscription';
    }
}

class Subscription
{
    public function __construct(
        protected BillingPortal $billingPortal
    ) {
    }

    public function create()
    {
        return $this->billingPortal->getCustomer();
    }

    public function cancel()
    {
    }

    public function swap(string $newPlan)
    {
    }

    public function invoice()
    {
    }
}

$subscription = new Subscription(
    new StripeBillingPortal()
);

echo $subscription->create();
