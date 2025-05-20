<?php

namespace Contenu\Contracts;

interface Collection
{
    public function title(): string;

    public function items();
}
