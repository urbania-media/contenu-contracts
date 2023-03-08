<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;
use Contenu\Contracts\Medias\Video as MediasVideo;

interface Video extends Block
{
    public function media(): ?MediasVideo;
}
