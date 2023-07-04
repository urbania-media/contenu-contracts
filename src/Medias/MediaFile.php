<?php

namespace Contenu\Contracts\Medias;

interface MediaFile extends Source
{
    public function name(): ?string;

    public function url(): string;

    public function mime(): ?string;

    public function size(): ?int;
}
