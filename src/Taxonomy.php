<?php

namespace Contenu\Contracts;

interface Taxonomy
{
    public function type(): string;

    public function id(): string;

    public function label(): string;
}
