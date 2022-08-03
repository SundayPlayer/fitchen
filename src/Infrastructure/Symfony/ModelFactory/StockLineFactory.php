<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Infrastructure\Symfony\ModelFactory;

use Sndpr\Fitchen\Domain\Stock\Model\StockLine as StockLineModel;
use Sndpr\Fitchen\Infrastructure\Symfony\Entity\StockLine;
use Symfony\Component\String\Slugger\AsciiSlugger;

class StockLineFactory
{
    public static function buildFromEntity(StockLine $stockLine): StockLineModel
    {
        $slugger = new AsciiSlugger('fr');

        return new StockLineModel(
            $slugger->slug($stockLine->getName().'-'.$stockLine->getId())->toString(),
            $stockLine->getName(),
            $stockLine->getQuantity()
        );
    }

    /**
     * @param StockLine[] $stockLines
     *
     * @return StockLineModel[]
     */
    public static function buildFromArrayEntity(array $stockLines): array
    {
        $stockLineModels = [];

        foreach ($stockLines as $stockLine) {
            $stockLineModels[] = self::buildFromEntity($stockLine);
        }

        return $stockLineModels;
    }
}
