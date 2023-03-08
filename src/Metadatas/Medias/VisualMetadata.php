<?php

namespace Contenu\Contracts\Metadatas\Medias;

interface VisualMetadata extends MediaMetadata
{
    public function width(): int;

    public function height(): int;
}
