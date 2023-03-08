<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;

interface Images extends Block
{
    public function presentation(): ?string;

    public function items(): ?iterable;
}
