<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function Sum($X,$Y)
    {
        return $X+$Y;
    }

    public function Divide($X,$Y)
    {
        if ($Y==0)
        {
            throw new \InvalidArgumentException('Division by zero');
        }

        return $X/$Y;
    }

    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_Sum(): void
    {
        $result=$this->Sum(2,3);
    
        $this->assertEquals(5,$result);
    }

    public function test_Divide(): void
    {
        $result=$this->Divide(16,4);
        $this->assertEquals(4,$result);

    }
    
}
