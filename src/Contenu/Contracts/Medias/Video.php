<?php

namespace Contenu\Contracts\Medias;

use Contenu\Contracts\Metadatas\Medias\VideoMetadata;

interface Video extends Visual
{
    public function metadata(): VideoMetadata;
}
