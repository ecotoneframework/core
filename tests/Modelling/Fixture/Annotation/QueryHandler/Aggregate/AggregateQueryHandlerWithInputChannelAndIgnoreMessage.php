<?php


namespace Test\Ecotone\Modelling\Fixture\Annotation\QueryHandler\Aggregate;

use Ecotone\Messaging\Attribute\MessageEndpoint;
use Ecotone\Modelling\Attribute\Aggregate;
use Ecotone\Modelling\Attribute\IgnorePayload;
use Ecotone\Modelling\Attribute\QueryHandler;

#[Aggregate]
class AggregateQueryHandlerWithInputChannelAndIgnoreMessage
{
    #[QueryHandler("execute", "queryHandler")]
    #[IgnorePayload]
    public function execute(\stdClass $class) : int
    {

    }
}