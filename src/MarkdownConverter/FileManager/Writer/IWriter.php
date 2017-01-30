<?php

namespace MarkdownConverter\FileManager\Writer;

interface IWriter
{
    public function write($path, $content);
}