<?php

declare(strict_types=1);
namespace Hyperf\AsyncEvent;

use Hyperf\AsyncQueue\Process\ConsumerProcess;

class AsyncEventDispatchProcess extends ConsumerProcess
{
    public string $queue = 'async_event_queue'; //key
}
