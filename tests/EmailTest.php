<?php
use PHPUnit\Framework\TestCase;

class EmailTest extends  TestCase {

    /**
     * @dataProvider emailsProvider
     */
    public function testValidEmail($email)
    {
        $this->assertRegExp('/^.+\@\S+\.\S+$/', $email);
    }

    /**
     * @dataProvider numbersProvider
     */
    public function testMath($a, $b, $expected)
    {
        $result = $a*$b;
        $this->assertEquals($expected, $result);
    }

    public function emailsProvider()
    {
        return [
            ['dsds@ffs.df'],
            ['dsds@ffs.dffdfd'],
            ['dsds@ffs'],
        ];
    }

    public function numbersProvider()
    {
        return [
            [1,2,2],
            [2,2,4],
            [3,3,10],
        ];
    }

}
