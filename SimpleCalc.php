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
     * Product
     *
     * @param mixed $array array (integer of float)
     * @return mixed The sum of two numbers (integer of float)
     */
    public static function productOfArray($array)
    {
        $res = $array[0];

        for ($i = 1; $i < count($array); $i++) {
            $res = $res * $array[$i];
        }

        return $res;
    }

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
     * This function return the min of table.
     *
     * @param array $table Array with numbers
     *
     * @returns float
     * @throws \InvalidArgumentException The exception is thrown when the param is not a array
     * @throws \InvalidArgumentException The exception is thrown when the array is empty
     */
    public static function minFromTable(array $table)
    {
        if (!is_array($table)) {
            throw new \InvalidArgumentException('Function require the array,' . gettype($table));
        }

        if (count($table) == 0) {
            throw new \InvalidArgumentException('Table is empty');
        }

        $min = $table[0];

        if ( count($table) > 1)
        {
            foreach($table as $value)
            {
                if ($value < $min) {
                    $min = $value;
                }
            }
        }

        return $min;
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
     * MaxFromArray
     *
     * @param array $a Table (integer)
     *
     * @return int The max of table
     */
    public static function maxFromArray($a)
    {
        $max = $a[0];

        for ($i = 1; $i < count($a); $i++) {
            if($max < $a[$i])
                $max = $a[$i];
        }

        return $max;
    }


    /*
        * Average
        *
        *  @param array $table of mixed numbers(integer or float)
        *
        * @return float The average of all array numbers
    */
    public static function average($table)
    {
        $cnt = count($table);
        $sum = 0;
        for ($x =0;$x < $cnt; $x++ ){
            $sum = $sum + $table[$x];
        }
        return ($sum/$cnt);
    }
    /**
     *
     * @param $tab Argument (Integer[])
     *
     * @return integer
     */
    public static function sumOfSquares($tab)
    {
        $sum =0;
        foreach ($tab as $itemn){
            $sum += $itemn*$itemn;
        }
        return $sum;
    }
    /*
        * Sum of integer tablix
        *
        * @param array $a Table (integer)
        *
        * @return integer The sum of table
        */
    public static function SumTablix($a){
        $result = 0;
        for ($i = 1; $i < count($a); $i++) {
            $result=$result+$a[$i];
        }
        return $result;
    }
}
