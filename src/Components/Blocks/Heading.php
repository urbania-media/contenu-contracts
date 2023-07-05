<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;

interface Heading extends Block
{
    public function size(): ?int;

    public function body(): ?string;
}
