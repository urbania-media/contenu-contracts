<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;

interface Table extends Block
{
    public function columns(): ?iterable;

    public function rows(): ?iterable;
}
