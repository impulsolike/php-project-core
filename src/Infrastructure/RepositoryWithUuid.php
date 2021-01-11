<?php

declare(strict_types=1);

namespace ImpulsoLike\Core\Infrastructure;

trait RepositoryWithUuid
{
    protected $uuid;

    public function Uuid()
    {
        return $this->uuid;
    }
}
