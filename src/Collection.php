<?php

namespace Contenu\Contracts;

interface Collection
{
    public function type(): string;

    public function title(): string;

    public function items(): iterable;
}
