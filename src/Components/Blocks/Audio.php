<?php

namespace Contenu\Contracts\Components\Blocks;

use Contenu\Contracts\Medias\Audio as MediasAudio;

interface Audio extends Media
{
    public function media(): ?MediasAudio;
}
