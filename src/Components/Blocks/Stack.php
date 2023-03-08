<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;
use Contenu\Contracts\Support\HasComponents;

interface Stack extends Block, HasComponents
{
    public function direction(): string;
}
