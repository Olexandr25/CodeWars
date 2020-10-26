<?php
function doubleInteger($i)
{
    return $i= $i * 2;
}


class MyTestCases extends TestCase
{
    public function testSampleTests() {
        $this->assertEquals(4, doubleInteger(2));
    }
}