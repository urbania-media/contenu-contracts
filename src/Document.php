<?php

namespace Contenu\Contracts;

use Contenu\Contracts\Metadatas\Documents\DocumentMetadata;
use Traversable;

interface Document
{
    public function type(): string;

    public function title(): string;

    public function subtitle(): ?string;

    public function description(): ?string;

    public function metadata(): DocumentMetadata;

    public function components(): ?Traversable;
}
