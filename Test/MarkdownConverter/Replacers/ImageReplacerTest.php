<?php

namespace Test\MarkdownConverter\Replacers;

use MarkdownConverter\Replacers\ImageReplacer;

class ImageReplacerTest extends \PHPUnit_Framework_TestCase
{
    protected $imageReplacer;

    public function setup()
    {
        $this->imageReplacer = new ImageReplacer();
    }

    public function testReplace()
    {
        $beforeReplace = "![http://r.ddmcdn.com/s_f/o_1/cx_633/cy_0/cw_1725/ch_1725/w_720/APL/uploads/2014/11/too-cute-doggone-it-video-playlist.jpg](of a dog) kep";
        $afterReplace = '<img src="http://r.ddmcdn.com/s_f/o_1/cx_633/cy_0/cw_1725/ch_1725/w_720/APL/uploads/2014/11/too-cute-doggone-it-video-playlist.jpg" alt="of a dog" /> kep';
        $result = $this->imageReplacer->replace($beforeReplace);
        $this->assertEquals($afterReplace, $result);
    }
}