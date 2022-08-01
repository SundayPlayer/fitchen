<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Presentation\Stock\Model;

class StockLineViewModel
{
    public function __construct(
        public readonly string $productName,
        public readonly string $quantity,
        public readonly bool $lowStock = false,
    ) {
    }
}
