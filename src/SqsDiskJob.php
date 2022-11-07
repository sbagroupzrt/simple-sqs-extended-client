<?php

namespace sbagroupzrt\SimpleSqsExtendedClient;

use Illuminate\Queue\Jobs\SqsJob;
use Illuminate\Contracts\Queue\Job as JobContract;

class SqsDiskJob extends SqsJob implements JobContract
{
    use SqsDiskBaseJob;
}
