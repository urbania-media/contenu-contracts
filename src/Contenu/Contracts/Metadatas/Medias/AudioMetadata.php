<?php

namespace Contenu\Contracts\Metadatas\Medias;

interface AudioMetadata extends MediaMetadata
{
    public function duration(): float;
}
