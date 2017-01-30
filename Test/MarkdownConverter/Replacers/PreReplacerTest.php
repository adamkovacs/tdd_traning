<?php

namespace Test\MarkdownConverter\Replacers;

use MarkdownConverter\Replacers\PreReplacer;

class PreReplacerTest extends \PHPUnit_Framework_TestCase
{
    protected $preReplacer;

    public function setup()
    {
        $this->preReplacer = new PreReplacer();
    }

    public function testReplace()
    {
        $beforeReplace = " `pre content` non pre content";
        $afterReplace = ' <pre>pre content</pre> non pre content';
        $result = $this->preReplacer->replace($beforeReplace);
        $this->assertEquals($afterReplace, $result);
    }
}