<?php

namespace Sbagroupzrt\SqsDisk;

use Illuminate\Queue\Jobs\SqsJob;
use Illuminate\Contracts\Queue\Job as JobContract;

class SqsDiskJob extends SqsJob implements JobContract
{
    use SqsDiskBaseJob;
}
