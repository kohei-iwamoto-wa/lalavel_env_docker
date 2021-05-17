<?php

namespace tests\Unit\Sample;

use PHPUnit\Framework\TestCase;
use App\source\Sample;

class SampleTest extends TestCase
{
    public function test_add()
    {
        $sample = new Sample;
        $sum = $sample->add(5, 3);
        $this->assertEquals(8, $sum);
    }

    public function test_sub()
    {
        $sample = new Sample;
        $sum = $sample->sub(5, 3);
        $this->assertEquals(2, $sum);
    }
}
