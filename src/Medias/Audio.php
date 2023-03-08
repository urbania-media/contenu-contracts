<?php

namespace Contenu\Contracts\Medias;

use Contenu\Contracts\Media;
use Contenu\Contracts\Metadatas\Medias\AudioMetadata;

interface Audio extends Media
{
    public function metadata(): AudioMetadata;
}
