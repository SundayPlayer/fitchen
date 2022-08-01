<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Domain\Stock\Entity;

interface StockLineRepository
{
    /** @return StockLine[] */
    public function all(): array;
}
