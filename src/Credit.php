<?php

namespace Contenu\Contracts;

interface Credit
{
    public function attribution(): Person|Organisation|string;

    public function role(): ?string;
}
