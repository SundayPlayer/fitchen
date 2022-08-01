<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Domain\Stock\Model;

class StockLine
{
    public function __construct(
        public string $slug,
        public string $name,
        public int|float $quantity,
    ) {
    }
}
