<?php
namespace MarkdownConverter\Replacers;

interface IReplacer
{
    public function replace($content);
}