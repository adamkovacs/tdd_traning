<?php
namespace MarkdownConverter;

use MarkdownConverter\FileManager\Reader\FileReader;
use MarkdownConverter\FileManager\Writer\FileWriter;
use MarkdownConverter\Replacers\ReplacerFactory;

class Converter
{
    protected $reader;

    protected $writer;

    protected $replacers;

    public function __construct()
    {
        $this->reader = new FileReader();
        $this->writer = new FileWriter();
        $replacerFactory = new ReplacerFactory();
        $this->replacers = $replacerFactory->getAllReplacer();
    }

    public function convert($sourceFilePath, $resultFilePath)
    {
        $content = $this->reader->read($sourceFilePath);
        foreach($this->replacers as $replacer){
            $content = $replacer->replace($content);
        }
        $this->writer->write($resultFilePath, $content);
    }

}
