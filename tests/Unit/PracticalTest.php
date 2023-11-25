<?php
class PracticalTest extends \PHPUnit\Framework\TestCase {

    public function testAddAcceptsFloat() {
        $result = add(1.5, 3.5);
        $this->assertEquals(5.0, $result);
    }

    public function testAddAcceptsFloatInteger() {
        $result = add(1.5, 2);
        $this->assertEquals(3.5, $result);
    }

    public function testAddAcceptsIntegerString() {
        $result = add("1", "2");
        $this->assertEquals(3, $result);
    }

    public function testAddAcceptsFloatString() {
        $result = add("1.4", "3.14");
        $this->assertEquals(5.54, $result);
    }

    public function testAddRejectsAlphabetString() {
        $this->expectException(InvalidArgumentException::class);
        add("abc", "xyz");
    }

    public function testAddRejectsAlphanumericString() {
        $this->expectException(InvalidArgumentException::class);
        add("a1", 1);
    }

    public function testFibonacciAcceptsInteger() {
        $result = generateFibonacciSequence(4);
        $this->assertEquals([0, 1, 1, 2], $result);
    }

    public function testFibonacciRejectsIntegerString() {
        $this->expectException(InvalidArgumentException::class);
        generateFibonacciSequence("4");
    }

    public function testFibonacciRejectsAlphabetString() {
        $this->expectException(InvalidArgumentException::class);
        generateFibonacciSequence("abc");
    }

    public function testFibonacciRejectsFloat() {
        $this->expectException(InvalidArgumentException::class);
        generateFibonacciSequence(3.5);
    }

}
?>