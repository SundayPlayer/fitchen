<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Domain\Stock\UseCase;

use Sndpr\Fitchen\Domain\Stock\Entity\StockLineRepository;
use Sndpr\Fitchen\Domain\Stock\UseCase\PresenterInterface\ListStockPresenter;
use Sndpr\Fitchen\Domain\Stock\UseCase\RequestDTO\ListStockRequest;
use Sndpr\Fitchen\Domain\Stock\UseCase\ResponseDTO\ListStockResponse;

class StockUseCase
{
    public function __construct(
        private readonly StockLineRepository $stockLineRepository,
    ) {
    }

    public function list(ListStockRequest $request, ListStockPresenter $presenter): void
    {
        $stockLines = $this->stockLineRepository->all();
        $response = new ListStockResponse($stockLines);
        $presenter->present($response);
    }
}
