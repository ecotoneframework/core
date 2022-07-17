<?php

namespace Test\Ecotone\Messaging\Fixture\Behat\Calculating;

use Attribute;

#[Attribute]
class AroundSumCalculation
{
    /**
     * @var integer
     */
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }
}
