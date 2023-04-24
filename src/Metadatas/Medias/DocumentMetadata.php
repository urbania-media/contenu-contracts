<?php

namespace Contenu\Contracts\Metadatas\Medias;

interface DocumentMetadata extends MediaMetadata
{
    public function pages(): int;
}
