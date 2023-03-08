<?php

namespace Contenu\Contracts\Taxonomies;

use Contenu\Contracts\Taxonomy;

interface Section extends Taxonomy
{
    public function parent(): ?Section;

    public function children(): ?iterable;
}
