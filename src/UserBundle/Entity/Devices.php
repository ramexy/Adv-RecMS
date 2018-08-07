<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devices
 *
 * @ORM\Table(name="devices")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\DevicesRepository")
 */
class Devices
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="SN", type="string", length=15, unique=true)
     */
    private $sN;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=10, unique=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_name", type="string", length=255)
     */
    private $customerName;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=50)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=50)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="tin", type="string", length=15)
     */
    private $tin;

    /**
     * @var string
     *
     * @ORM\Column(name="vrn", type="string", length=30, nullable=true)
     */
    private $vrn;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=150)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=40)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=15, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="paid_amount", type="string", length=10, nullable=true)
     */
    private $paidAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="balance_amount", type="string", length=10, nullable=true)
     */
    private $balanceAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_number", type="string", length=10, nullable=true)
     */
    private $invoiceNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="receipt_number", type="string", length=10, nullable=true)
     */
    private $receiptNumber;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sN
     *
     * @param string $sN
     *
     * @return Devices
     */
    public function setSN($sN)
    {
        $this->sN = $sN;

        return $this;
    }

    /**
     * Get sN
     *
     * @return string
     */
    public function getSN()
    {
        return $this->sN;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Devices
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set customerName
     *
     * @param string $customerName
     *
     * @return Devices
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get customerName
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Devices
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Devices
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set tin
     *
     * @param string $tin
     *
     * @return Devices
     */
    public function setTin($tin)
    {
        $this->tin = $tin;

        return $this;
    }

    /**
     * Get tin
     *
     * @return string
     */
    public function getTin()
    {
        return $this->tin;
    }

    /**
     * Set vrn
     *
     * @param string $vrn
     *
     * @return Devices
     */
    public function setVrn($vrn)
    {
        $this->vrn = $vrn;

        return $this;
    }

    /**
     * Get vrn
     *
     * @return string
     */
    public function getVrn()
    {
        return $this->vrn;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Devices
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Devices
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Devices
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set paidAmount
     *
     * @param string $paidAmount
     *
     * @return Devices
     */
    public function setPaidAmount($paidAmount)
    {
        $this->paidAmount = $paidAmount;

        return $this;
    }

    /**
     * Get paidAmount
     *
     * @return string
     */
    public function getPaidAmount()
    {
        return $this->paidAmount;
    }

    /**
     * Set balanceAmount
     *
     * @param string $balanceAmount
     *
     * @return Devices
     */
    public function setBalanceAmount($balanceAmount)
    {
        $this->balanceAmount = $balanceAmount;

        return $this;
    }

    /**
     * Get balanceAmount
     *
     * @return string
     */
    public function getBalanceAmount()
    {
        return $this->balanceAmount;
    }

    /**
     * Set invoiceNumber
     *
     * @param string $invoiceNumber
     *
     * @return Devices
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * Get invoiceNumber
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Set receiptNumber
     *
     * @param string $receiptNumber
     *
     * @return Devices
     */
    public function setReceiptNumber($receiptNumber)
    {
        $this->receiptNumber = $receiptNumber;

        return $this;
    }

    /**
     * Get receiptNumber
     *
     * @return string
     */
    public function getReceiptNumber()
    {
        return $this->receiptNumber;
    }
}

