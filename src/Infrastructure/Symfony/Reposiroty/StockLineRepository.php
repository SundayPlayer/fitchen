<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Infrastructure\Symfony\Reposiroty;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use \Sndpr\Fitchen\Domain\Stock\Entity\StockLineRepository as StockLineRepositoryInterface;
use Sndpr\Fitchen\Infrastructure\Symfony\Entity\StockLine;
use Sndpr\Fitchen\Infrastructure\Symfony\ModelFactory\StockLineFactory;

/**
 * @method StockLine|null find($id, $lockMode = null, $lockVersion = null)
 * @method StockLine|null findOneBy(array $criteria, ?array $orderBy = null)
 * @method StockLine[]    findAll()
 * @method StockLine[]    findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
 */
class StockLineRepository extends ServiceEntityRepository implements StockLineRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StockLine::class);
    }

    public function all(): array
    {
        return StockLineFactory::buildFromArrayEntity($this->findAll());
    }
}
