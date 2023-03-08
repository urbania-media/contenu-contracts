<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;

interface Title extends Block
{
    public function size(): ?int;

    public function body(): ?string;
}
