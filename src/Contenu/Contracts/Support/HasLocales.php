<?php

namespace Contenu\Contracts\Support;

interface HasLocales
{
    public function locales(): iterable; // of strings

    public function localizedVariant(string $locale);

    public function localizedVariants(array $locales): iterable; // of documents
}
