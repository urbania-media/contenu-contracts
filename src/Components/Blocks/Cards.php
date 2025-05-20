<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;

interface Cards extends Block
{
    public function items(): ?iterable;
}
