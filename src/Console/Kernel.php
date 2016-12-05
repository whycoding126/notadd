<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2016, iBenchu.org
 * @datetime 2016-11-29 19:14
 */
namespace Application\Console;

use Illuminate\Console\Scheduling\Schedule;
use Notadd\Foundation\Console\Kernel as NotaddKernel;

/**
 * Class Kernel.
 */
class Kernel extends NotaddKernel
{
    /**
     * @var array
     */
    protected $commands = [];

    /**
     * TODO: Method schedule Description
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     */
    protected function schedule(Schedule $schedule)
    {
    }

    /**
     * TODO: Method commands Description
     */
    protected function commands()
    {
    }
}