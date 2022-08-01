<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Infrastructure\Symfony\Controller;

use Sndpr\Fitchen\Domain\Stock\UseCase\RequestDTO\ListStockRequest;
use Sndpr\Fitchen\Domain\Stock\UseCase\StockUseCase;
use Sndpr\Fitchen\Infrastructure\Symfony\View\Html\ListStockView;
use Sndpr\Fitchen\Presentation\Stock\ListStockHtmlPresenter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StockController
{
    #[Route('/stock/', name: 'stock_list')]
    public function list(StockUseCase $stockUseCase, ListStockHtmlPresenter $htmlPresenter, ListStockView $view): Response
    {
        $request = new ListStockRequest();

        $stockUseCase->list($request, $htmlPresenter);

        return $view->generateView($htmlPresenter->viewModel());
    }
}
