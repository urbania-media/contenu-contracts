<?php

namespace Contenu\Contracts;

use Contenu\Contracts\Medias\Image;

interface Person
{
    public function name(): string;

    public function firstName(): ?string;

    public function lastName(): ?string;

    public function image(): ?Image;
}
