<?php

namespace Contenu\Contracts\Metadatas\Documents;

use DateTime;

interface DocumentMetadata
{
    public function tags();

    public function categories();

    public function sections();

    public function credits();

    public function locations();

    public function createdAt(): ?DateTime;

    public function updatedAt(): ?DateTime;
}
