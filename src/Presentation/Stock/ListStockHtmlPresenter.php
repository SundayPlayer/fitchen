<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Presentation\Stock;

use Sndpr\Fitchen\Domain\Stock\UseCase\PresenterInterface\ListStockPresenter;
use Sndpr\Fitchen\Domain\Stock\UseCase\ResponseDTO\ListStockResponse;
use Sndpr\Fitchen\Presentation\Stock\Model\StockLineViewModel;

class ListStockHtmlPresenter implements ListStockPresenter
{
    public readonly ListStockHtmlViewModel $listStockViewModel;

    public function present(ListStockResponse $response): void
    {
        $stockLines = [];

        foreach ($response->stockLines as $stockLine) {
            $quantity = number_format($stockLine->quantity);

            $stockLineViewModel = new StockLineViewModel($stockLine->name, $quantity);

            $stockLines[] = $stockLineViewModel;
        }

        $this->listStockViewModel = new ListStockHtmlViewModel($stockLines);
    }

    public function viewModel(): ListStockHtmlViewModel
    {
        return $this->listStockViewModel;
    }
}
