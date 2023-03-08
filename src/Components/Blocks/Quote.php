<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;

interface Quote extends Block
{
    public function body(): ?string;

    public function caption(): ?string;
}
