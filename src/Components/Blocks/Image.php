<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Medias\Image as MediasImage;

interface Image extends Media
{
    public function media(): ?MediasImage;

    public function caption(): ?string;
}
