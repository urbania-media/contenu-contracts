<?php

namespace Contenu\Contracts;

use Contenu\Contracts\Medias\Image;
use Contenu\Contracts\Metadatas\Medias\MediaMetadata;
use Traversable;

interface Media
{
    public function type(): string;

    public function url(): string;

    public function name(): string;

    public function metadata(): MediaMetadata;

    public function thumbnail(): ?Image;

    public function sources(): ?Traversable;
}
