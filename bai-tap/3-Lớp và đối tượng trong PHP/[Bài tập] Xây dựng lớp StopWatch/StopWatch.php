<?php

/*StopWatch
------------------
- $startTime: int
- $endTime: int
------------------
+ __construct(startTime): System time
+ getStartTime()
+ getEndTime()
+ start(): void
+ stop(): void
+ getElapsedTime(): time milisecond s
 */

class StopWatch
{

    private int $startTime;
    private int $endTime;

    public function __construct()
    {
        $this->startTime = time();
    }

    public function getStartTime(): int
    {
        return $this->startTime;
    }

    public function getEndTime(): int
    {
        return $this->endTime;
    }

    public function start()
    {
        $this->startTime = time();
    }

    public function stop()
    {
        $this->endTime = time();
    }

    public function getElapsedTime(): float|int
    {
        return ($this->endTime - $this->startTime) * 1000;
    }
}