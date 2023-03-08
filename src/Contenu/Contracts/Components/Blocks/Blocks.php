<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;

interface Blocks extends Block
{
    public function components(): ?iterable;
}
