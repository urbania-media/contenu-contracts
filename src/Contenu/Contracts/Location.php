<?php

namespace Contenu\Contracts;

interface Location
{
    public function name(): ?string;

    public function latitude(): ?float;

    public function longitude(): ?float;

    public function address(): ?string;

    public function city(): ?string;

    public function region(): ?string;

    public function country(): ?string;

    public function postalCode(): ?string;
}
