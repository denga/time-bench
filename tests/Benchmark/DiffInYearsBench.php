<?php

declare(strict_types=1);

namespace TimeBench\Tests\Benchmark;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use PhpBench\Attributes as Bench;


#[Bench\BeforeMethods('setUp')]
class DiffInYearsBench
{
    private \DateTimeInterface $d1;
    private \DateTimeInterface $d2;

    private CarbonInterface $c1;
    private CarbonInterface $c2;

    public function setUp(): void
    {
        $this->d1 = new \DateTime('1990-01-01');
        $this->d2 = new \DateTime('2024-01-01');

        $this->c1 = new Carbon('1990-01-01');
        $this->c2 = new Carbon('2024-01-01');
    }

    #[Bench\Revs(1000)]
    #[Bench\Iterations(1)]
    public function benchDateTimeDiffInYears(): void
    {
        $result = $this->d1->diff($this->d2)->y;
    }

    #[Bench\Revs(1000)]
    #[Bench\Iterations(1)]
    public function benchCarbonDiffInYears(): void
    {
        $result = $this->c1->diffInYears($this->c2);
    }
}
