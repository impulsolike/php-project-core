<?php

declare(strict_types=1);

namespace ImpulsoLike\Core\Domain;

abstract class Entity
{
    protected $id;
    abstract public function id();
    abstract public function toArray();
    abstract public function toObject();
}
