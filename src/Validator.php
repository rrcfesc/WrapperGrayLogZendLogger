<?php
/**
 * Rioxygen
 * @copyright Copyright (c) 2018 Rioxygen. (http://www.Rioxygen.com/)
 * @license   Copyright
 */
namespace Rioxygen\Graylog;

/**
 * Clase para validar si un valor es nulo o no
 * @version 1.0
 * @author Ricardo Ruiz <ricardo.cruz@Rioxygen.com>
 */
class Validator
{
    /**
     * Manda el valor a usar
     * @param string $value mandar el valor
     * @param string $name Nombre a mostrar en la excepcion
     * @throws \LogicException
     */
    public static function checkIfNull($value, $name)
    {
        if ($value === null) {
            throw new \LogicException("$name is not set");
        }
    }
}
