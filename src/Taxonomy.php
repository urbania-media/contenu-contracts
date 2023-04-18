<?php

namespace Contenu\Contracts;

interface Taxonomy
{
    public function id(): string;

    public function label(?string $locale = null): string;

    public function type(): ?string;

}
