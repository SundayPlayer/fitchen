<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Domain\Stock\UseCase\PresenterInterface;

use Sndpr\Fitchen\Domain\Stock\UseCase\ResponseDTO\ListStockResponse;

interface ListStockPresenter
{
    public function present(ListStockResponse $response): void;
}
