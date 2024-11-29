<?php

namespace Brds\LaravelMacros\Macros;

use Illuminate\Support\Collection;

class CollectionMacros {
    public function __construct() {
        Collection::macro('recursive', function () {
            return $this->map(function ($value) {
                if (is_array($value) || is_object($value)) {
                    return collect($value)->recursive();
                }
                return $value;
            });
        });
    }
}
