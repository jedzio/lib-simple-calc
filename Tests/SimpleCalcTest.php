<?php

namespace Gajdaw\TddExamples\SimpleCalc\Tests;

use Gajdaw\TddExamples\SimpleCalc\SimpleCalc;

class SimpleCalcTest extends \PHPUnit_Framework_TestCase
{

    public function testAdd()
    {
        $this->assertEquals(3, SimpleCalc::add(1, 2));
        $this->assertEquals(20.0, SimpleCalc::add(10.5, 9.5));
        $this->assertEquals(500.0, SimpleCalc::add(499.1, 0.9));
    }

    public function testSubtract()
    {
        $this->assertEquals(1, SimpleCalc::subtract(7, 6));
        $this->assertEquals(-10, SimpleCalc::subtract(10, 20));
    }

	public function getMinFromTable() {
        return array(
            array(array(1, 2, 3), 1),
            array(array(9, 8, 7), 7),
            array(array(5, 5, 2), 2),
            array(array(1, 1, 2), 1),
			array(array(2, 2, 2), 2),

        );
    }

    /**
     * @dataProvider getMinFromTable
     */
    public function testMinFromTable($array, $result) {
        $this->assertEquals($result, SimpleCalc::minFromTable($array));
    }

    /**
     * @dataProvider getMultiplyData
     *
     */
    public function testMultiply($a, $b, $result)
    {
        $this->assertEquals($result, SimpleCalc::multiply($a, $b));
    }

    public function getMultiplyData()
    {
        return array(
            array(1, 2, 2),
            array(2, 5, 10),
            array(2, 10, 20),
            array(100, 0.01, 1),
        );
    }

    /**
     * @dataProvider getProductOfArray
     *
     */
    public function testProductOfArray($array, $result)
    {
        $this->assertEquals($result, SimpleCalc::ProductOfArray($array));
    }

    public function getProductOfArray()
    {
        return array(
            array(array(1,2,3), 6),
            array(array(1,1), 1),
            array(array(0.2, 0.3),0.06),
        );
    }

    /**
     * @dataProvider getDivideData
     */
    public function testDivide($a, $b, $result)
    {
        $this->assertEquals($result, SimpleCalc::divide($a, $b));
    }

    public function getDivideData()
    {
        return array(
            array(10, 2, 5),
            array(20, 5, 4),
            array(7, 2, 3.5),
        );
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testDivideByZero()
    {
        SimpleCalc::divide(30, 0);
    }


    public function testMaxFromArray()
    {
        $this->assertEquals(6, SimpleCalc::maxFromArray(array(1, 6, 2)));
        $this->assertEquals(1, SimpleCalc::maxFromArray(Array(-2,-3,1,0,-10)));
        $this->assertEquals(2, SimpleCalc::maxFromArray(Array(2)));
    }

    /**
     * @dataProvider getAverageData
     */
    public function testAverage($result, $a)
    {
        $this->assertEquals($result,SimpleCalc::average($a));
    }
    public function getAverageData()
    {
        return array(
            array(3.5, array(2, 5)),
            array(4.5, array(5, 4)),
            array(3, array(2, 3, 1  , 4, 5)),
        );
    }

    public function testSumOfSquare()
    {
        $this->assertEquals(29, SimpleCalc::sumOfSquares(array(2, 3, 4)));
        $this->assertEquals(8, SimpleCalc::sumOfSquares(array(2, 2)));
        $this->assertEquals(0, SimpleCalc::sumOfSquares(array(0, 0, 0, 0)));
        $this->assertEquals(18, SimpleCalc::sumOfSquares(array(-3, -3)));
    }


}
