<?php

namespace Test\Ecotone\Messaging\Fixture\Annotation\MessageEndpoint\Gateway;

use Ecotone\Messaging\Attribute\MessageGateway;

interface CombinedGatewayExample
{
    #[MessageGateway('buy')]
    public function buy(): void;

    #[MessageGateway('sell')]
    public function sell(): void;
}
