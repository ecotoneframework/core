<?php


namespace Test\Ecotone\Messaging\Fixture\Handler\Processor\Interceptor;

use Ecotone\Messaging\Attribute\MessageGateway;
use Ecotone\Messaging\Attribute\MessageEndpoint;
use Ecotone\Messaging\Transaction\Transactional;

interface TransactionalInterceptorOnGatewayMethodExample
{
    #[Transactional(["transactionFactory"])]
    #[MessageGateway("requestChannel")]
    public function invoke() : void;
}