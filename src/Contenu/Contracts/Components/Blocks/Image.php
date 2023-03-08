<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;
use Contenu\Contracts\Medias\Image as MediasImage;

interface Image extends Block
{
    public function image(): ?MediasImage;

    public function caption(): ?string;
}
