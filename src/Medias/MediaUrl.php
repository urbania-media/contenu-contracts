<?php

namespace Contenu\Contracts\Medias;

interface MediaUrl extends Source
{
    public function url(): string;
}
