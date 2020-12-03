<?php
use PHPUnit\Framework\TestCase;

class ErrorsExceptionsTest extends TestCase {

   public function testErrorCanBeExpected(): void
    {
        $this->expectError();

        $this->expectErrorMessage('foo');

        \trigger_error('foo', \E_USER_ERROR);
        // $file = fopen("test.txt", "r");
    }


    public function testException()
    {
        $this->expectException(WrongBmiDataException::class);
        $BMICalculator = new BMICalculator;
        $BMICalculator->mass = 0; // kg
        $BMICalculator->height = 1.6; // m
        $BMICalculator->calculate();
    }

}
