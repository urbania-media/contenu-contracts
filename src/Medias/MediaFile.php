<?php

namespace Contenu\Contracts\Medias;

interface MediaFile extends Source
{
    public function handle(): ?string;

    public function name(): ?string;

    public function url(): string;

    public function mime(): ?string;

    public function size(): ?int;
}
