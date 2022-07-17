<?php

declare(strict_types=1);

namespace Test\Ecotone\Messaging\Fixture\Annotation\ApplicationContext;

use Ecotone\Messaging\Attribute\ServiceContext;
use stdClass;

class ApplicationContextWithMethodParameters
{
    #[ServiceContext]
    public function someExtension(stdClass $some)
    {
        return new stdClass();
    }
}
