<?php

namespace Test\MarkdownConverter\Replacers;

use MarkdownConverter\Replacers\ItalicReplacer;

class ItalicReplacerTest extends \PHPUnit_Framework_TestCase
{
    protected $italicReplacer;

    public function setup()
    {
        $this->italicReplacer = new ItalicReplacer();
    }

    public function testReplace()
    {
        $beforeReplace = ' _italic content_ non italic content';
        $afterReplace = ' <i>italic content</i> non italic content';
        $result = $this->italicReplacer->replace($beforeReplace);
        $this->assertEquals($afterReplace, $result);
    }
}