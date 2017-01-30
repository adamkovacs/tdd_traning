<?php
namespace MarkdownConverter\Replacers;

class LinkReplacer implements IReplacer
{
    public function replace($content)
    {
        $pattern = '/\[(.*)\]\((.*)\)/U';
        $replacement = '<a href="$1">$2</a>';
        return preg_replace($pattern, $replacement, $content);
    }
}