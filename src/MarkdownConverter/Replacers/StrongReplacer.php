<?php
namespace MarkdownConverter\Replacers;

class StrongReplacer implements IReplacer
{
    public function replace($content)
    {
        $pattern = '/\*{2}(.*)\*{2}/U';
        $replacement = '<strong>$1</strong>';
        return preg_replace($pattern, $replacement, $content);
    }
}