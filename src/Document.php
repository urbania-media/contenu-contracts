<?php

namespace Contenu\Contracts;

use Contenu\Contracts\Metadatas\Documents\DocumentMetadata;

interface Document
{
    public function title(): string;

    public function description(): ?string;

    public function metadata(): DocumentMetadata;

    public function components(): ?iterable;
}