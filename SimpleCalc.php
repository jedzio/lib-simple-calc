<?php

/**
 * SimpleCalc library
 *
 * This file is part of the TDD PHP project:
 *
 *     https://github.com/tdd-php
 *
 * (c)2013 Włodzimierz Gajda <gajdaw@gajdaw.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Gajdaw\TddExamples\SimpleCalc;

/**
 * SimpleCalc performs math operations:
 * - addition
 * - subtraction
 * - multiplication
 * - division
 * - zero
 *
 * @package PHPTDD
 * @author  Włodzimierz Gajda <gajdaw@gajdaw.pl>
 *
 */
class SimpleCalc
{

    /**
     * Addition
     *
     * @param mixed $a First number (integer of float)
     * @param mixed $b Second number (integer of float)
     *
     * @return mixed The sum of two numbers (integer of float)
     */
    public static function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * Subtraction
     *
     * @param mixed $a First number (integer of float)
     * @param mixed $b Second number (integer of float)
     *
     * @return mixed The difference of two numbers (integer of float)
     */
    public static function subtract($a, $b)
    {
        return $a - $b;
    }

    /**
     * Multiplication
     *
     * @param mixed $a First number (integer of float)
     * @param mixed $b Second number (integer of float)
     *
     * @return mixed The product of two numbers (integer of float)
     */
    public static function multiply($a, $b)
    {
        return $a * $b;
    }

    /**
     * Division
     *
     * @param mixed $a First number (integer of float)
     * @param mixed $b Second number (integer of float)
     *
     * @return float The result of division of two numbers
     * @throws \InvalidArgumentException The exception is thrown when the divisor $b is equal to 0
     */
    public static function divide($a, $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException('Divisor must not be equal to 0.');
        }

        return $a / $b;
    }

    /**
     * Zero
     *
     * @return int The result is always equal to 0
     */
    public static function zero()
    {
        return 0;
    }

    /**
     * One
     *
     * @return int The result is always equal to 1
     */
    public static function one()
    {
        return 1;
    }

}
