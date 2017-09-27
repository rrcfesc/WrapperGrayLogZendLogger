<?php
/**
 * Rioxygen
 * @copyright Copyright (c) 2018 Rioxygen. (http://www.Rioxygen.com/)
 * @license   Copyright
 */
namespace Rioxygen\Graylog;

use Rioxygen\Graylog\Request\Adapter;

/**
 * Clase abstracta para el usu de Graylog
 */
abstract  class LoggerAdapter
{
    protected $isProduction;
    /** 
     * @var string 
     **/
    protected $data;
    /** 
     * @var string 
     **/
    protected $response;
    /**
     * Define el tamaño del level
     * @var string
     */
    protected $level;
    /**
     * @var Adapter 
     **/
    protected $requestAdapter;
    /**
     * Constructor de la clase
     * @param array $options
     */
    public function __construct($options = [])
    {
        $this->isProduction = (bool) Arr::get($options, 'prod', false);
        $this->shipment = Arr::get($options, 'shipment');
    }
    /**
     * Asegura que todos los datos estan correctos
     */
    abstract protected function validate();
    /**
     * Prepare Request
     */
    abstract protected function prepare();
    /**
     * Curl Request
     */
    abstract protected function execute();
    /**
     * Process Response en caso de
     */
    abstract protected function process();
    
    /**
     * Setea el adapter
     * @param Adapter $rateRequest
     */
    public function setRequestAdapter(Adapter $rateRequest)
    {
        $this->requestAdapter = $rateRequest;
    }
    /**
     * Setea el nivel
     * @param string $string
     */
    public function setLevel($string =  "devel")
    {
        $this->level        = $string;
    }
    /**
     * Manda un mensaje
     * @return type
     */
    public function sendMessage()
    {
        $this
            ->validate()
            ->prepare()
            ->execute()
            ->process();
        return true;
    }
}