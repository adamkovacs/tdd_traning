<?php
namespace MarkdownConverter\Replacers;

class ItalicReplacer implements IReplacer
{
    public function replace($content)
    {
        $pattern = '/(^|\s|>|\b)_(?=\S)([\s\S]+?)_/';
        $replacement = '$1<i>$2</i>';
        return preg_replace($pattern, $replacement, $content);
    }
}