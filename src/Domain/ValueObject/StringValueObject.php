<?php

declare(strict_types=1);

namespace ImpulsoLike\Core\Domain\ValueObject;

use ImpulsoLike\Core\Domain\ValueObject;

class StringValueObject extends ValueObject
{
    protected $value;

    public function __construct($value = null)
    {
        $this->value = $value;
    }

    final public function value()
    {
        return $this->value;
    }

    final public function isEmpty(): bool
    {
        return empty($this->value);
    }

    final public function length()
    {
        return mb_strlen($this->value);
    }
}
