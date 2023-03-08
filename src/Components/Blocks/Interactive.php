<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Medias\Interactive as InteractiveContract;

interface Interactive extends Media
{
    public function media(): ?InteractiveContract;
}
