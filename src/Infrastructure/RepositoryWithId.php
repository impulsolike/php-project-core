<?php

declare(strict_types=1);

namespace ImpulsoLike\Core\Infrastructure;

trait RepositoryWithId
{
    protected $id;

    public function id()
    {
        return $this->id;
    }
}
