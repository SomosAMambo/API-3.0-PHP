<?php
namespace Cielo\API30\Ecommerce;

class RecurrentPayment implements \JsonSerializable
{

    const INTERVAL_MONTHLY = 'Monthly';

    const INTERVAL_BIMONTHLY = 'Bimonthly';

    const INTERVAL_QUARTERLY = 'Quarterly';

    const INTERVAL_SEMIANNUAL = 'SemiAnnual';

    const INTERVAL_ANNUAL = 'Annual';

    private $authorizeNow;

    private $startDate;

    private $endDate;

    private $interval;

    private $recurrentPaymentId;

    private $nextRecurrency;

    private $amount;

    private $country;

    private $createDate;

    private $currency;

    private $currentRecurrencyTry;

    private $provider;

    private $recurrencyDay;

    private $successfulRecurrences;

    private $links;

    private $recurrentTransactions;

    private $status;

    public function __construct($authorizeNow)
    {
        $this->setAuthorizeNow($authorizeNow);
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function populate(\stdClass $data)
    {
        $this->authorizeNow = isset($data->AuthorizeNow)? !!$data->AuthorizeNow: false;
        $this->startDate = isset($data->StartDate)? $data->StartDate: null;
        $this->endDate = isset($data->EndDate)? $data->EndDate: null;
        $this->interval = isset($data->Interval)? !!$data->Interval: null;
        $this->recurrentPaymentId = isset($data->recurrentPaymentId)? $data->recurrentPaymentId: null;
        $this->nextRecurrency = isset($data->nextRecurrency)? $data->nextRecurrency: null;
        $this->amount = isset($data->amount)? $data->amount: null;
        $this->country = isset($data->country)? $data->country: null;
        $this->createDate = isset($data->createDate)? $data->createDate: null;
        $this->currency = isset($data->currency)? $data->currency: null;
        $this->currentRecurrencyTry = isset($data->currentRecurrencyTry)? $data->currentRecurrencyTry: null;
        $this->provider = isset($data->provider)? $data->provider: null;
        $this->recurrencyDay = isset($data->recurrencyDay)? $data->recurrencyDay: null;
        $this->successfulRecurrences = isset($data->successfulRecurrences)? $data->successfulRecurrences: null;
        $this->links = isset($data->links)? $data->links: null;
        $this->recurrentTransactions = isset($data->recurrentTransactions)? $data->recurrentTransactions: null;
        $this->status = isset($data->status)? $data->status: null;
    }

    public function getAuthorizeNow()
    {
        return $this->authorizeNow;
    }

    public function setAuthorizeNow($authorizeNow)
    {
        $this->authorizeNow = $authorizeNow;
        return $this;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function getInterval()
    {
        return $this->interval;
    }

    public function setInterval($interval)
    {
        $this->interval = $interval;
        return $this;
    }

    public function getRecurrentPaymentId()
    {
        return $this->recurrentPaymentId;
    }

    public function setRecurrentPaymentId($recurrentPaymentId)
    {
        $this->recurrentPaymentId = $recurrentPaymentId;
    }

    public function getNextRecurrency()
    {
        return $this->nextRecurrency;
    }

    public function setNextRecurrency($nextRecurrency)
    {
        $this->nextRecurrency = $nextRecurrency;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getCreateDate()
    {
        return $this->createDate;
    }

    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function getCurrentRecurrencyTry()
    {
        return $this->currentRecurrencyTry;
    }

    public function setCurrentRecurrencyTry($currentRecurrencyTry)
    {
        $this->currentRecurrencyTry = $currentRecurrencyTry;
    }

    public function getProvider()
    {
        return $this->provider;
    }

    public function setProvider($provider)
    {
        $this->provider = $provider;
    }

    public function getRecurrencyDay()
    {
        return $this->recurrencyDay;
    }

    public function setRecurrencyDay($recurrencyDay)
    {
        $this->recurrencyDay = $recurrencyDay;
    }

    public function getSuccessfulRecurrences()
    {
        return $this->successfulRecurrences;
    }

    public function setSuccessfulRecurrences($successfulRecurrences)
    {
        $this->successfulRecurrences = $successfulRecurrences;
    }

    public function getLinks()
    {
        return $this->links;
    }

    public function setLinks($links)
    {
        $this->links = $links;
    }

    public function getRecurrentTransactions()
    {
        return $this->recurrentTransactions;
    }

    public function setRecurrentTransactions($recurrentTransactions)
    {
        $this->recurrentTransactions = $recurrentTransactions;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}