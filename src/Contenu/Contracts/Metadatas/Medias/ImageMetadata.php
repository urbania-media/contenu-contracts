<?php

namespace Contenu\Contracts\Metadatas\Medias;

interface ImageMetadata extends MediaMetadata
{
    public function width(): int;

    public function height(): int;
}
