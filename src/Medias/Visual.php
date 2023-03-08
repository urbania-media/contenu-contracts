<?php

namespace Contenu\Contracts\Medias;

use Contenu\Contracts\Media;
use Contenu\Contracts\Metadatas\Medias\VisualMetadata;

interface Visual extends Media
{
    public function metadata(): VisualMetadata;
}
