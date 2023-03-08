<?php

namespace Contenu\Contracts\Documents;

use Contenu\Contracts\Metadatas\Documents\MicromagMetadata;

interface Micromag extends Document
{
    public function theme();

    public function settings();

    public function metadata(): MicromagMetadata;
}
