<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;

interface Text extends Block
{
    public function body(): ?string;
}
