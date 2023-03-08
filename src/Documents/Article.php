<?php

namespace Contenu\Contracts\Documents;

use Contenu\Contracts\Document;
use Contenu\Contracts\Metadatas\Documents\ArticleMetadata;

interface Article extends Document
{
    public function metadata(): ArticleMetadata;
}
