<?php

namespace App\Repositories;


class OrderTransaction
{
    protected $starTevPercentage;

    public $commission;

    public $payStackCharge;

    public $delivery;

    public $totalAmount;

    /**
     * Transaction values holds the required
     * parameters to compute an order transaction.
     * i.e
     * StarTev percentage,
     * Product Commission,
     * Delivery Charge,
     * Total Order Amount,
     * PayStack: PayStack percentage ought to have been
     * calculated before this class object is ever called,
     * based on accurate percentage received,
     * the amount is calculated here which is
     * the same as the amount deducted at successful payment.
     *
     * @param array $transactionValues
     */
    public function __construct($transactionValues)
    {
        //Set Order Total Amount
        $this->totalAmount = $transactionValues['amountTotal'];
        $this->grandTotal = $transactionValues['batchGrandTotal'];
        //Set StarTev Transaction Fees
        $this->starTevPercentage = $transactionValues['starTev'];
        //Set Percentage Commission On Product
        $this->commission = $transactionValues['commission'];
        //Set General Delivery Fee
        $this->delivery = $transactionValues['delivery'];
        //Set PayStack Percentage
        $this->payStackCharge = $transactionValues['payStack'];
    }


    public function calculate()
    {
        $result['paystack_charge'] = $this->calPayStack();
        $result['paystack_percentage'] = $this->calPayStackPercentage();
        $result['delivery'] = $this->delivery;
        $result['commission_payout'] = $this->calCommission();
        $result['commission_percentage'] = $this->commission;
        $result['startev_charge'] = $this->calStarTev();
        $result['business_payout'] = $this->calBusiness();
        $result['escrowed'] = $this->calEscrowed();
        $result['total'] = $this->totalAmount;

        //return array response
        return $result;
    }

    /**
     * Calculate student commission
     * for this single product.
     *
     * @return int
     */
    public function calCommission()
    {
        return ($this->commission / 100) * $this->totalAmount;
    }

    public function calPayStackPercentage()
    {
        $originalPer = (($this->totalAmount - $this->payStackCharge) * 100) / $this->totalAmount;
        /**
         * We already have the amount, but we need to calculate and get the percentage,
         * for reference purposes.
         */

         return round((100 - round($originalPer, 2)), 2);
    }

    public function calPayStack()
    {
        return $this->payStackCharge;
    }

    public function calStarTev()
    {
        return ($this->starTevPercentage / 100) * $this->totalAmount;
    }

    public function calBusiness()
    {
        return ($this->totalAmount - $this->calCommission() - $this->calStarTev());
    }

    public function calEscrowed()
    {
        return ($this->calCommission() + $this->calStarTev() + $this->delivery);
    }

}
