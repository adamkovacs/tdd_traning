<?php

namespace Test\MarkdownConverter\Replacers;

use MarkdownConverter\Replacers\ReplacerFactory;

class ReplacerFactoryTest extends \PHPUnit_Framework_TestCase
{
    protected $replacerFactory;

    public function setUp()
    {
        $this->replacerFactory = new ReplacerFactory();
    }

    public function testReplacerFactory()
    {
        $replacers = $this->replacerFactory->getAllReplacer();
        if (is_array($replacers)) {
            foreach($replacers as $replacer) {
                $this->assertInstanceOf('MarkdownConverter\Replacers\IReplacer', $replacer);
            }
        }
    }
}
