<?php

namespace MarkdownConverter\FileManager\Writer;

class FileWriter implements IWriter
{
    public function write($path, $content)
    {
        file_put_contents($path, $content);
    }
}
