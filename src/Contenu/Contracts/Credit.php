<?php

namespace Contenu\Contracts;

interface Credit
{
    public function attribution(): Person|Organisation;

    public function role(): string;
}
