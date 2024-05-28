<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Medias\Embed as EmbedSource;

interface Embed extends Media
{
    public function embed(): EmbedSource;
}
