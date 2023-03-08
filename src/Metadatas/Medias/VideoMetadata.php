<?php

namespace Contenu\Contracts\Metadatas\Medias;

interface VideoMetadata extends VisualMetadata
{
    public function duration(): float;
}
