<?php

namespace Contenu\Contracts;

use Traversable;

interface Collection
{
    public function title(): string;

    public function items(): iterable;
}
