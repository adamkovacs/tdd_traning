<?php

namespace Test\MarkdownConverter\Replacers;

use MarkdownConverter\Replacers\StrongReplacer;

class StrongReplacerTest extends \PHPUnit_Framework_TestCase
{
    protected $strongReplacer;

    public function setup()
    {
        $this->strongReplacer = new StrongReplacer();
    }

    public function testReplace()
    {
        $beforeReplace = " **strong content** non strong content";
        $afterReplace = ' <strong>strong content</strong> non strong content';
        $result = $this->strongReplacer->replace($beforeReplace);
        $this->assertEquals($afterReplace, $result);
    }
}