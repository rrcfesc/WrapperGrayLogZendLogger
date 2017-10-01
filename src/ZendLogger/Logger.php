<?php
/**
 * Rioxygen
 * @copyright Copyright (c) 2018 Rioxygen. (http://www.Rioxygen.com/)
 * @license   Copyright
 */
namespace Rioxygen\Graylog\ZendLogger;

use Rioxygen\Graylog\LoggerAdapter;
use Psr\Log\LoggerInterface;

class Logger extends LoggerAdapter implements LoggerInterface
{
    public function __construct($options = [])
    {
        parent::__construct($options);
    }
}