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
     * @dataProvider getDivideData
     */
    public function testDivide($a, $b, $result)
    {
        $this->assertEquals($result, SimpleCalc::divide($a, $b));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testFByOneExceptionMG()
    {
        SimpleCalc::fNewfunctionMg(1, 0);
    }

    public function getMultiplyDataMG() {
        return array(
            array(2, -3)
        );
    }

    /**
     * @dataProvider getMultiplyDataMG
     */
    public function testFByOneMG($x, $result) {
        $this->assertEquals($result, SimpleCalc::fNewfunctionMg($x));
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

    public function testZero()
    {
        $this->assertEquals(0, SimpleCalc::zero());
    }

}
