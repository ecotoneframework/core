<?php

namespace Test\Ecotone\Modelling\Fixture\Annotation\CommandHandler\Service;

use Ecotone\Messaging\Attribute\MessageEndpoint;
use Ecotone\Modelling\Attribute\CommandHandler;

class CommandHandlerWithNoInputChannelName
{
    #[CommandHandler]
    public function noAction() : void
    {

    }
}