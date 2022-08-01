<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Domain\Stock\UseCase\ResponseDTO;

use Sndpr\Fitchen\Domain\Stock\Model\StockLine;

class ListStockResponse
{
    /** @var StockLine[] $stockLines */
    public readonly array $stockLines;

    public function __construct(
        array $stockLines,
    ) {
        $this->stockLines = $stockLines;
    }
}
