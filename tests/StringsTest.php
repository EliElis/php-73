<?php

use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{
    /**
     * @see https://www.php.net/manual/en/language.types.string.php
     */
    public function testVariableParsing()
    {
        $foo = 'world';

        // Double quotes.
        $this->assertEquals('Hello world', "Hello $foo");

        // Single quotes.
        $this->assertEquals('Hello $foo', 'Hello $foo');

        // TODO "Hello ${foo}"
        $this->assertEquals('Hello world', "Hello ${foo}");

        // TODO "Hello " . $foo
        $this->assertEquals('Hello world', 'Hello ' . $foo);

        // TODO Heredoc
        $this->assertEquals('Hello world', <<<TEXT
Hello $foo
TEXT
);

        // TODO Nowdoc
        // TODO Heredoc
        $this->assertEquals('Hello $foo', <<<'TEXT'
Hello $foo
TEXT
        );
    }

    /**
     * @see https://www.php.net/manual/en/ref.strings.php
     */
    public function testStringFunctions()
    {
        // trim — Strip whitespace (or other characters) from the beginning and end of a string
        $this->assertEquals('Hello', trim('Hello         '));
        $this->assertEquals('Hello', trim('Hello......', '.'));

        // ltrim — Strip whitespace (or other characters) from the beginning of a string
        // TODO to be implemented
        $this->assertEquals('Hello', ltrim('     Hello'));
        // rtrim — Strip whitespace (or other characters) from the end of a string
        // TODO to be implemented
        $this->assertEquals('Hello', rtrim('Hello    '));
        // strtoupper — Make a string uppercase
        $this->assertEquals('HELLO', strtoupper('hello'));

        // strtolower — Make a string lowercase
        $this->assertEquals('hello', strtolower('HeLlO'));

        // ucfirst — Make a string's first character uppercase
        // TODO to be implemented
        $this->assertEquals('Hello', ucfirst('hello'));

        // lcfirst — Make a string's first character lowercase
        // TODO to be implemented
        $this->assertEquals('hello', lcfirst('Hello'));

        // strip_tags — Strip HTML and PHP tags from a string
        // TODO to be implemented
        $this->assertEquals('Hello', strip_tags('<p>Hello</p>'));

        // htmlspecialchars — Convert special characters to HTML entities
        // TODO to be implemented
        $this->assertEquals('&quot;Hello&quot;', htmlspecialchars('"Hello"'));
        // addslashes — Quote string with slashes
        // TODO to be implemented
        $this->assertEquals("He said \'Hello!\'", addslashes("He said 'Hello!'"));

        // strcmp — Binary safe string comparison
        // TODO to be implemented
        $this->assertEquals(-6, strcmp('Hello', 'Hello world'));

        // strncasecmp — Binary safe case-insensitive string comparison of the first n characters
        // TODO to be implemented
        $this->assertEquals(0, strncasecmp('Hello', 'Hello world', 5));
        // str_replace — Replace all occurrences of the search string with the replacement string
        // TODO to be implemented
        $this->assertEquals('Hello php', str_replace('world', 'php', 'Hello world'));

        // strpos — Find the position of the first occurrence of a substring in a string
        // TODO to be implemented
        $this->assertEquals(6, strpos('Hello world', 'world'));

        // strstr — Find the position of the first occurrence of a substring in a string
        // TODO to be implemented
        $this->assertEquals('world qwerty', strstr('Hello world qwerty', 'world'));

        // strrchr — Find the last occurrence of a character in a string
        // TODO to be implemented
        $this->assertEquals('world', strrchr('Hello world qwerty world', 'world'));

        // substr — Return part of a string
        // TODO to be implemented
        $this->assertEquals('ello', substr('Hello', '1'));


        // sprintf — Return a formatted string
        // TODO to be implemented
        $this->assertEquals('10.00', sprintf('%01.2f', '10'));
    }
}