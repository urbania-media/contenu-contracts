<?php

namespace Contenu\Contracts;

use Contenu\Contracts\Medias\Image;
use Contenu\Contracts\Metadatas\Medias\MediaMetadata;

interface Media
{
    public function url(): ?string;

    public function metadata(): MediaMetadata;

    public function thumbnail(): ?Image;

    public function sources(): iterable;
}
