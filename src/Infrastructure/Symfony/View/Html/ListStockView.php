<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Infrastructure\Symfony\View\Html;

use Sndpr\Fitchen\Presentation\Stock\ListStockHtmlViewModel;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class ListStockView
{
    public function __construct(
        private readonly Environment $twig,
    ) {
    }

    public function generateView(ListStockHtmlViewModel $viewModel): Response
    {
        return new Response($this->twig->render('page/stock/list.html.twig'));
    }
}
