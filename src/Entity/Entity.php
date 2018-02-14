<?php

namespace Loevgaard\HostnetTest\Entity;

use Doctrine\ORM\Mapping as ORM;
use Loevgaard\HostnetTest\Entity\Generated\EntityInterface;
use Loevgaard\HostnetTest\Entity\Generated\EntityTrait;
use Loevgaard\HostnetTest\Exception\AnotherDomainException;
use Loevgaard\HostnetTest\Exception\DomainException;

/**
 * @ORM\Entity()
 **/
class Entity implements EntityInterface
{
    use EntityTrait;

    /**
     * @throws \InvalidArgumentException
     */
    public function throwInvalidArgumentException()
    {
        throw new \InvalidArgumentException('Testing');
    }

    /**
     * @throws DomainException
     */
    public function throwDomainException()
    {
        throw new DomainException('Testing');
    }

    /**
     * @throws \Loevgaard\HostnetTest\Exception\AnotherDomainException
     */
    public function throwAnotherDomainException()
    {
        throw new AnotherDomainException('Testing');
    }
}
