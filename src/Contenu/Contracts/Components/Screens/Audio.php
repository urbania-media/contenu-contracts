<?php

namespace Contenu\Contracts\Components\Screens;

use Contenu\Contracts\Components\Screen;
use Contenu\Contracts\Medias\Audio as MediasAudio;

interface Audio extends Screen
{
    public function audio(): ?MediasAudio;
}
