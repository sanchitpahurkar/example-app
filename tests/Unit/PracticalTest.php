<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use practicals\Practical; // Assuming the namespace and file structure are correct

require(__DIR__.'/../../practicals/Practical.php'); // Adjust the path accordingly

class PracticalTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testAdd(): void
    {
        $result = Practical::add(1, 3);
        $this->assertEquals(4, $result);
    }
}
