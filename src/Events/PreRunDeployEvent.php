<?php

namespace Deployee\Plugins\Deploy\Events;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;

class PreRunDeployEvent extends EventDispatcher
{
    /**
     * @var InputInterface
     */
    private $input;

    /**
     * @param InputInterface $input
     */
    public function __construct(InputInterface $input)
    {
        $this->input = $input;
    }

    /**
     * @return InputInterface
     */
    public function getInput(): InputInterface
    {
        return $this->input;
    }
}