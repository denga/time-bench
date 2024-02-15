<?php

declare(strict_types=1);

namespace TimeBench\Tests\Benchmark;

use Carbon\Carbon;
use PhpBench\Attributes as Bench;

class InitializationBench
{
    #[Bench\Revs(1000)]
    #[Bench\Iterations(1)]
    public function benchDateTimeInitialization(): void
    {
        $object = new \DateTime();
    }

    #[Bench\Revs(1000)]
    #[Bench\Iterations(1)]
    public function benchCarbonInitialization(): void
    {
        $object = new Carbon();
    }
}