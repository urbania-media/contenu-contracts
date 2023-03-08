<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;
use Contenu\Contracts\Link;

interface Button extends Block
{
    public function link(): ?Link;

    public function label(): ?string;
}
