<?php

namespace Test\Ecotone\Modelling\Fixture\LateAggregateIdAssignationWithAggregateIdFromMethod;

use Ecotone\Modelling\Attribute\Repository;
use Ecotone\Modelling\StandardRepository;
use Ramsey\Uuid\Uuid;

#[Repository]
class UserRepository implements StandardRepository
{
    private array $users;

    public function canHandle(string $aggregateClassName): bool
    {
        return User::class;
    }

    public function findBy(string $aggregateClassName, array $identifiers): ?object
    {
        return $this->users[array_pop($identifiers)];
    }

    public function save(array $identifiers, object $aggregate, array $metadata, ?int $versionBeforeHandling): void
    {
        $aggregate->internalId = Uuid::uuid4()->toString();
        $this->users[$aggregate->internalId] = $aggregate;
    }
}
