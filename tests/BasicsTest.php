<?php

use PHPUnit\Framework\TestCase;

class BasicsTest extends TestCase
{
    /**
     * @see https://www.php.net/manual/en/language.constants.predefined.php
     */
    public function testMagicConstants()
    {
        // The current line number of the file.
        $this->assertEquals(13, __LINE__);
        echo "\n" . __LINE__ . "\n";

        // The function name, or {closure} for anonymous functions.
        $this->assertEquals('testMagicConstants', __FUNCTION__);

        // The function name, or {closure} for anonymous functions.
        $this->assertEquals('BasicsTest',  __CLASS__);
        // TODO __CLASS__
        var_dump(__CLASS__);

        // The class method name.
        // TODO __METHOD__
        $this->assertEquals('BasicsTest::testMagicConstants',  __METHOD__);

        // TODO __NAMESPACE__
        // The name of the current namespace.
        $this->assertEquals('',  __NAMESPACE__);


    }

    /**
     * @see https://www.php.net/manual/en/language.types.boolean.php
     */
    public function testConvertingToBoolean()
    {
        // Positive integers
        $this->assertEquals(true, (bool) 1);
        $this->assertEquals(true, (bool) 10);

        // Negative integers
        // TODO (bool) -1
        $this->assertEquals(true, (bool) -1);
        // TODO (bool) -10
        $this->assertEquals(true, (bool) - 10);
        // TODO (bool) 0
        $this->assertEquals(false, (bool) - 0);

        // Strings
        // TODO (bool) ''
        $this->assertEquals(false, (bool) '');
        // TODO (bool) 'false'
        $this->assertEquals(false, (bool) '');
        // TODO (bool) 'not empty string'
        $this->assertEquals(true, (bool) 'not empty string');
        // Arrays
        // TODO (bool) []
        $this->assertEquals(false, (bool) []);
        // TODO (bool) [1, 2, 3]
        $this->assertEquals(true, (bool) [1, 2, 3]);
        // Null
        // TODO (bool) null
        $this->assertEquals(false, (bool) null);
    }

    /**
     * @see https://www.php.net/manual/en/language.operators.arithmetic.php
     */
    public function testArithmeticOperators()
    {
        // Addition
        $this->assertEquals(3, 1 + 2);

        // Subtraction
        $this->assertEquals(1, 2 - 1);

        // Multiplication
        // TODO to be implemented
        $this->assertEquals(2, 1*2);

        // Division
        // TODO to be implemented
        $this->assertEquals(2, 4/2);

        // Modulo
        // TODO to be implemented
        $this->assertEquals(0, 4%2);

        // Exponentiation
        // TODO to be implemented
        $this->assertEquals(16, 4**2);
    }

    /**
     * @see https://www.php.net/manual/en/language.operators.precedence.php
     */
    public function testOperatorsPrecedence()
    {
        $a = 1;
        $b = 2;
        $a = $b += 3;

        $this->assertEquals(5, $a);
    }

    /**
     * @see https://www.php.net/manual/en/language.types.type-juggling.php
     */
    public function testTypeJuggling()
    {
        $foo = '1';
        $this->assertIsString($foo);

        $foo *= 2;
        $this->assertIsInt($foo);

        // TODO $foo = $foo * 1.3;
        $this->assertIsFloat($foo * 1.3); //float, not int

        // TODO $foo = 5 * '10 Little Piggies';
          $this->assertIsNumeric(5 * "10 Little Piggies"); //A non well formed numeric value encountered


//        // TODO $foo = 5 * '10 Small Pigs';
        $this->assertIsInt(5 * '10 Small Pigs'); //A non well formed numeric value encountered
    }
}