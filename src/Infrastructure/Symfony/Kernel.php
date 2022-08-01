<?php

declare(strict_types=1);

namespace Sndpr\Fitchen\Infrastructure\Symfony;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait {
        getConfigDir as microKernelTraitGetConfigDirs;
    }

    private function getConfigDir(): string
    {
        return $this->getProjectDir().'/config/symfony';
    }
}
