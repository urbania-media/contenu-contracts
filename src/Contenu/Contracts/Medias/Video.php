<?php

namespace Contenu\Contracts\Medias;

use Contenu\Contracts\Metadatas\Medias\VideoMetadata;

interface Video extends Media
{
    public function metadata(): VideoMetadata;
}
