<?php

namespace Contenu\Contracts\Support;

interface HasLocales
{
    public function locales(); // of strings

    public function localizedVariant(string $locale);

    public function localizedVariants(array $locales); // of documents
}
