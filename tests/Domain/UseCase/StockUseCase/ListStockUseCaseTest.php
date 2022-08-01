<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Tests\Domain\UseCase\StockUseCase;

use PHPUnit\Framework\TestCase;
use Sndpr\Fitchen\Domain\Stock\Entity\StockLineRepository;
use Sndpr\Fitchen\Domain\Stock\UseCase\PresenterInterface\ListStockPresenter;
use Sndpr\Fitchen\Domain\Stock\UseCase\RequestDTO\ListStockRequest;
use Sndpr\Fitchen\Domain\Stock\UseCase\ResponseDTO\ListStockResponse;
use Sndpr\Fitchen\Domain\Stock\UseCase\StockUseCase;

class ListStockUseCaseTest extends TestCase implements ListStockPresenter
{
    private ListStockResponse $response;
    private StockUseCase $stockUseCase;
    private StockLineRepository $stockLineRepositoryMock;

    protected function setUp(): void
    {
        $this->stockLineRepositoryMock = $this->createMock(StockLineRepository::class);

        $this->stockUseCase = new StockUseCase(
            $this->stockLineRepositoryMock
        );
    }

    public function present(ListStockResponse $response): void
    {
        $this->response = $response;
    }

    public function testItListStock(): void
    {
        $this->stockLineRepositoryMock
            ->expects($this->once())
            ->method('all')
            ->willReturn([]);

        $request = new ListStockRequest();

        $this->stockUseCase->list($request, $this);

        $this->assertEmpty($this->response->stockLines);
    }
}
