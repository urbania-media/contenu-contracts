<?php

namespace Contenu\Contracts\Medias;

interface Embed extends Source
{
    public function url(): string;

    public function provider(): string;

    public function iframeUrl(): ?string;

    public function html(): ?string;
}
