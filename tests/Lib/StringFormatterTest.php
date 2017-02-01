<?php

namespace tests\Lib;

use Lib\StringFormatter;

class StringFormatterTest extends \PHPUnit_Framework_TestCase {

    public function testPrefix() {
        $myclass = new StringFormatter();
        $result = $myclass->prefix("pre", "test", false);

        $this->assertSame($result, "pretest");
    }

    public function testSuffix() {
        $myclass = new StringFormatter();
        $result = $myclass->suffix("suf", "test", true);

        $this->assertSame($result, "testSuf");
    }

    public function testToCamelCase() {
        $myclass = new StringFormatter();
        $result = $myclass->toCamelCase("first", "second");

        $this->assertSame($result, "firstSecond");
    }

    public function testConcatString() {
        $myclass = new StringFormatter();
        $result = $myclass->concatString("first", "second");

        $this->assertSame($result, "firstsecond");
    }

}
