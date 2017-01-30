<?php
namespace MarkdownConverter\Replacers;

class PreReplacer implements IReplacer
{
    public function replace($content)
    {
        $pattern = '/`([^`]*)`/U';
        $replacement = '<pre>$1</pre>';
        return preg_replace($pattern, $replacement, $content);
    }
}