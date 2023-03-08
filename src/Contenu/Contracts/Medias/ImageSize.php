<?php

namespace Contenu\Contracts\Medias;

interface ImageSize
{
    public function name(): string;

    public function url(): string;

    public function width(): int;

    public function height(): int;
}
