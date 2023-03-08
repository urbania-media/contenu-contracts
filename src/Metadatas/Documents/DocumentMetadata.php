<?php

namespace Contenu\Contracts\Metadatas\Documents;

use DateTime;

interface DocumentMetadata
{
    public function tags(): ?iterable;

    public function categories(): ?iterable;

    public function sections(): ?iterable;

    public function credits(): ?iterable;

    public function locations(): ?iterable;

    public function createdAt(): ?DateTime;

    public function updatedAt(): ?DateTime;
}
