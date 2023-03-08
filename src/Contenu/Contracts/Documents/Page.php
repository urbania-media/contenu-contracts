<?php

namespace Contenu\Contracts\Documents;

use Contenu\Contracts\Metadatas\Documents\PageMetadata;

interface Page extends Document
{
    public function url(): string;

    public function metadata(): PageMetadata;
}
