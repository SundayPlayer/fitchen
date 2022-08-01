<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Presentation\Stock;

use Sndpr\Fitchen\Presentation\Stock\Model\StockLineViewModel;

class ListStockHtmlViewModel
{
    public function __construct(
        /** @var StockLineViewModel[] $stockLinesViewModel */
        public readonly array $stockLinesViewModel = [],
    ) {
    }
}
