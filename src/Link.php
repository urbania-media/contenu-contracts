<?php

namespace Contenu\Contracts;

interface Link
{
    public function url(): string;

    public function external(): ?bool;

    public function target(): ?string;
}
