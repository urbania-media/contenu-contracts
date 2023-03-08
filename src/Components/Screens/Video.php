<?php

namespace Contenu\Contracts\Components\Screens;

use Contenu\Contracts\Components\Screen;
use Contenu\Contracts\Medias\Video as MediasVideo;

interface Video extends Screen
{
    public function video(): ?MediasVideo;
}
