<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Components\Block;
use Contenu\Contracts\Medias\Image;

interface Card extends Block
{
    public function image(): ?Image;

    public function title(): ?string;

    public function body(): ?string;
}
