<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testValidUserName()
    {
        $phpunit = $this;
        $user = new User('donald', 'Trump');
        $expected = 'Donald';
        $assertClosure = function () use ($phpunit,$expected) {
            $phpunit->assertSame($expected, $this->name);
        };
        $executeAssertClosure = $assertClosure->bindTo($user, get_class($user));
        $executeAssertClosure();
        // $this->assertSame($expected, $user->name);
    }

    public function testValidUserName2()
    {
        $user = new class('donald', 'Trump') extends User {
            public function getName()
            {
                return $this->name;
            }
        };
        $this->assertSame('Donald', $user->getName());
    }
}
