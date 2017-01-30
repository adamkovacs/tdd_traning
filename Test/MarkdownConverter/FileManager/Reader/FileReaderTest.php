<?php
namespace Test\MarkdownConverter\FileManager\Reader;

use MarkdownConverter\FileManager\Reader\FileReader;

class FileReaderTest extends \PHPUnit_Framework_TestCase
{
    protected $reader;

    protected $file = './test.txt';

    protected $content = 'Content content ...';

    public function setUp()
    {
        $this->reader = new FileReader();
    }

    public function testRead()
    {
        file_put_contents($this->file, $this->content);
        $fileContent = $this->reader->read($this->file);
        $this->assertEquals($fileContent, $this->content);
        unlink($this->file);
    }

    public function testReadIfNoFile()
    {
        $fileContent = $this->reader->read($this->file);
        $this->assertEquals($fileContent, false);
    }
}
