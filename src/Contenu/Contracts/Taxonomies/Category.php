<?php

namespace Contenu\Contracts\Taxonomies;

use Contenu\Contracts\Taxonomy;

interface Category extends Taxonomy
{
    public function parent(): ?Category;

    public function children(): ?iterable;
}
