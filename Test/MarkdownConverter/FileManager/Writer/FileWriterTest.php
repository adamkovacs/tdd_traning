<?php
namespace Test\MarkdownConverter\FileManager\Writer;

use MarkdownConverter\FileManager\Writer\FileWriter;

class FileWriterTest extends \PHPUnit_Framework_TestCase
{
    protected $writer;

    protected $file = './test.txt';

    protected $content = 'Content content ...';

    public function setUp()
    {
        $this->writer = new FileWriter();
    }

    public function testWrite()
    {
        $this->writer->write($this->file, $this->content);
        $fileContent = file_get_contents($this->file);
        $this->assertEquals($fileContent, $this->content);
        unlink($this->file);
    }
}
