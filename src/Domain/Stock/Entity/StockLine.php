<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Domain\Stock\Entity;

class StockLine
{
    public function __construct(
        public readonly int $id,
        public string $name,
        public float $quantity,
    ) {
    }
}
