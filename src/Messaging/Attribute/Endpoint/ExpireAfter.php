<?php

declare(strict_types=1);

namespace Ecotone\Messaging\Attribute\Endpoint;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD)]
class ExpireAfter
{
    private int $time;

    public function __construct(int $time)
    {
        $this->time = $time;
    }

    public function getTime(): int
    {
        return $this->time;
    }
}
