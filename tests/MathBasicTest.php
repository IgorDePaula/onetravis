<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-05-27 at 20:46:10.
 */
class MathBasicTest extends PHPUnit_Framework_TestCase {

    /**
     * @var MathBasic
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new MathBasic;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers MathBasic::sum
     * @todo   Implement testSum().
     */
    public function testSum() {
        // Remove the following lines when you implement this test.
        $this->assertEquals(4,$this->object->sum(2,2));
    }

    /**
     * @covers MathBasic::sub
     * @todo   Implement testSub().
     */
    public function testSub() {
        // Remove the following lines when you implement this test.
        $this->assertEquals(0,$this->object->sub(1,1));
    }

}
