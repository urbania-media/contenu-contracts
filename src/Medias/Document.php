<?php

namespace Contenu\Contracts\Medias;

use Contenu\Contracts\Media;
use Contenu\Contracts\Metadatas\Medias\DocumentMetadata;

interface Document extends Media
{
    public function metadata(): DocumentMetadata;
}
