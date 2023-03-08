<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Medias\Video as MediasVideo;

interface Video extends Media
{
    public function media(): ?MediasVideo;
}
