<?php

namespace Deployee\Plugins\Deploy\Events;

use Symfony\Component\EventDispatcher\EventDispatcher;

class PostRunDeploy extends EventDispatcher
{
    /**
     * @var bool
     */
    private $success;

    /**
     * PostRunDeploy constructor.
     * @param bool $success
     */
    public function __construct(bool $success)
    {
        $this->success = $success;
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }
}