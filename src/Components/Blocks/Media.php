<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;
use Contenu\Contracts\Media as MediaContract;

interface Media extends Block
{
    public function media(): ?MediaContract;
}
