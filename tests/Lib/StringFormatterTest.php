<?php

namespace tests\Lib;

use Lib\StringFormatter;

class StringFormatterTest extends \PHPUnit_Framework_TestCase
{
    public function testPrefix()
    {
        $myclass = new StringFormatter();
        $camelCase = true;
        $result = $myclass->prefix("pre", "test", $camelCase);

        if ($camelCase) {
            $this->assertSame($result, "preTest");
        } else {
            $this->assertSame($result, "pretest");
        }
    }

    public function testSuffix()
    {
        $myclass = new StringFormatter();
        $camelCase = false;
        $result = $myclass->suffix("suf", "test", $camelCase);

        if ($camelCase) {
            $this->assertSame($result, "testSuf");
        } else {
            $this->assertSame($result, "testsuf");
        }
    }

    public function testToCamelCase()
    {
        $myclass = new StringFormatter();
        $result = $myclass->toCamelCase("first", "second");

        $this->assertSame($result, "firstSecond");
    }

    public function testConcatString()
    {
        $myclass = new StringFormatter();
        $result = $myclass->concatString("first", "second");

        $this->assertSame($result, "firstsecond");
    }
}
