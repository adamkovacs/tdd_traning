<?php

namespace MarkdownConverter\FileManager\Reader;

class FileReader implements IReader
{
    public function read($path)
    {
        if (is_file($path)) {
            return file_get_contents($path);
        }
        return false;
    }
}