<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;

interface Form extends Block
{
    public function fields(): ?iterable;

    // URL?
}
