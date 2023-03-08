<?php

namespace Contenu\Contracts;

interface Taxonomy
{
    public function id(): string;

    public function label(): string;
}
