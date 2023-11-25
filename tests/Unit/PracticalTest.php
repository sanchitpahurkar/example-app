<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use practicals\Practical; // Correct namespace import for Practical class

require(__DIR__.'/../../practicals/Practical.php'); // Correct path to Practical.php

class PracticalTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testAdd(): void
    {
        $this->assertEquals(Practical::add(1, 3), 4);
    }
}
?>
