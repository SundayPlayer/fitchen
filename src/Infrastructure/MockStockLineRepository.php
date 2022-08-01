<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Infrastructure;

use Sndpr\Fitchen\Domain\Stock\Entity\StockLineRepository;

class MockStockLineRepository implements StockLineRepository
{
    public function all(): array
    {
        return [];
    }
}
