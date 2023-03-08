<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;

interface Stack extends Block
{
    public function direction(): string;

    public function components(): ?iterable;
}
