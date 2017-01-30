<?php

namespace Test\MarkdownConverter\Replacers;

use MarkdownConverter\Replacers\LinkReplacer;

class LinkReplacerTest extends \PHPUnit_Framework_TestCase
{
    protected $linkReplacer;

    public function setup()
    {
        $this->linkReplacer = new LinkReplacer();
    }

    public function testReplace()
    {
        $beforeReplace = "[http://index.hu](link) link";
        $afterReplace = '<a href="http://index.hu">link</a> link';
        $result = $this->linkReplacer->replace($beforeReplace);
        $this->assertEquals($afterReplace, $result);
    }
}
