<?php
use PHPUnit\Framework\TestCase;

class UsefulAnnotationsTest extends  TestCase {

    private $value;
    /**
     * @before
     */
    public function runBeforeEachTestMethod()
    {
        $this->value = 1;
    }

    /**
     * @after
     */
    public function runAfterEachTestMethod()
    {
        unset($this->value);
    }

    public function testAnnotations1()
    {
        $this->value++;
        $expected = 2;
        $result = $this->value;
        $this->assertEquals($expected,$result);
    }

    public function testAnnotations2()
    {
        $this->value++;
        $expected = 2;
        $result = $this->value;
        $this->assertEquals($expected,$result);
    }

}

// @beforeClass
// @afterClass
// @dataProvider
