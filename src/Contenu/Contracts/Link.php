<?php

namespace Contenu\Contracts\Concepts;

interface Link
{
    public function url(): string;

    public function label(): ?string;

    public function external(): ?bool;
}
