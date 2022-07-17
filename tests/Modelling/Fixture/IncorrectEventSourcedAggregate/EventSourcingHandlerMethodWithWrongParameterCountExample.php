<?php

namespace Test\Ecotone\Modelling\Fixture\IncorrectEventSourcedAggregate;

use Ecotone\Modelling\Attribute\AggregateIdentifier;
use Ecotone\Modelling\Attribute\CommandHandler;
use Ecotone\Modelling\Attribute\EventSourcingAggregate;
use Ecotone\Modelling\Attribute\EventSourcingHandler;

#[EventSourcingAggregate]
class EventSourcingHandlerMethodWithWrongParameterCountExample
{
    #[AggregateIdentifier]
    private string $id;

    #[CommandHandler]
    public function doSomething(): void
    {
    }

    #[EventSourcingHandler]
    public function factory()
    {
    }
}
