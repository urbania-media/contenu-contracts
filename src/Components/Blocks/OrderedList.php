<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;

interface OrderedList extends Block
{
    public function items(): ?iterable;

    public function marker(): ?string; // number, letter, null
}
