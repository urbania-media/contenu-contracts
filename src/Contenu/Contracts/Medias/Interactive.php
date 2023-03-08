<?php

namespace Contenu\Contracts\Medias;

use Contenu\Contracts\Media;
use Contenu\Contracts\Metadatas\Medias\InteractiveMetadata;

interface Interactive extends Media
{
    public function metadata(): InteractiveMetadata;
}
