<?php

namespace Contenu\Contracts\Metadatas\Documents;

interface PageMetadata extends DocumentMetadata
{
    public function url(): string;
}
