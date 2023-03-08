<?php

namespace Contenu\Contracts;

use Contenu\Contracts\Medias\Image;

interface Organisation
{
    public function name(): string;

    public function image(): ?Image;
}
