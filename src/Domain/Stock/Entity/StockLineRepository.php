<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Domain\Stock\Entity;

use Sndpr\Fitchen\Domain\Stock\Model\StockLine;

interface StockLineRepository
{
    /** @return StockLine[] */
    public function all(): array;
}
