<?php
/**
 * Rioxygen
 * @copyright Copyright (c) 2018 Rioxygen. (http://www.Rioxygen.com/)
 * @license   Copyright
 */
namespace Rioxygen\Graylog\Request;

/**
 * Adaptador de clase para setear la información del request en caso correcto
 * @version 1.0
 * @author Ricardo Ruiz <ricardo.cruz@Rioxygen.com>
 */
abstract class Adapter
{
    /**
     * Tiempo de conexión
     * @var integer
     */
    protected $connectTimeoutInMilliseconds = 1000;
    /**
     * Tiempo de descarga
     * @var integer
     */
    protected $downloadTimeoutInSeconds = 11;
    
    abstract public function execute($url, $data = null);
}
