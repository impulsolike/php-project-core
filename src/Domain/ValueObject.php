<?php

declare(strict_types=1);

namespace ImpulsoLike\Core\Domain;

abstract class ValueObject
{
    abstract public function __construct();
    abstract public function isEmpty(): bool;
}
