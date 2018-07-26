<?php
namespace Mirakl\MMP\Common\Domain\Order\Tax;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float   getAmount()
 * @method  $this   setAmount(float $amount)
 * @method  string  getCode()
 * @method  $this   setCode(string $code)
 */
class OrderTaxAmount extends MiraklObject
{
    /**
     * @param   float   $amount
     * @param   string  $code
     */
    public function __construct($amount, $code)
    {
        parent::__construct();
        $this->setAmount($amount);
        $this->setCode($code);
    }

    /**
     * @inheritdoc
     */
    public static function create(array $data = [])
    {
        return new static($data['amount'], $data['code']);
    }
}