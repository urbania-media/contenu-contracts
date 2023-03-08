<?php

namespace Contenu\Contracts;

interface Component
{
    public function type(): string;

    public function role(): string;

    public function presentation(): ?string;

    public function theme();
}
