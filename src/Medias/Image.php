<?php

namespace Contenu\Contracts\Medias;

use Contenu\Contracts\Metadatas\Medias\ImageMetadata;

interface Image extends Visual
{
    public function metadata(): ImageMetadata;

    public function sizes(): ?iterable;
}
