<?php

namespace Test\MarkdownConverter;

use MarkdownConverter\Converter;

class ConverterTest extends \PHPUnit_Framework_TestCase
{
    protected $sourceFilePath = './source.txt';

    protected $resultFilePath = './result.txt';

    protected $afterConvert = 'This <strong>is</strong> simple <i><a href="http://index.hu">link</a></i> and this is a picture <img src="http://r.ddmcdn.com/s_f/o_1/cx_633/cy_0/cw_1725/ch_1725/w_720/APL/uploads/2014/11/too-cute-doggone-it-video-playlist.jpg" alt="of a dog" />.';

    protected $converter;

    public function setUp()
    {
        $this->converter = new Converter();
    }

    public function testConverter()
    {
        $this->converter->convert($this->sourceFilePath, $this->resultFilePath);
        $this->assertEquals(file_get_contents($this->resultFilePath), $this->afterConvert);
        unlink($this->resultFilePath);
    }
}