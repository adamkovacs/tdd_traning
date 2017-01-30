<?php
namespace MarkdownConverter\Replacers;

class ImageReplacer implements IReplacer
{
    public function replace($content)
    {
        $pattern = '/!\[(.*)\]\((.*)\)/U';
        $replacement = '<img src="$1" alt="$2" />';
        return preg_replace($pattern, $replacement, $content);
    }
}