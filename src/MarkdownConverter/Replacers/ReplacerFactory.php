<?php
namespace MarkdownConverter\Replacers;

class ReplacerFactory
{
    protected $replacerArray = array(
        'Italic',
        'Pre',
        'Strong',
        'Image',
        'Link'
    );

    public function getAllReplacer()
    {
        $replacers = array();
        foreach($this->replacerArray as $replacer){
            $replacers[] = $this->getReplacer($replacer);
        }
        return $replacers;
    }

    protected function getReplacer($replacer)
    {
        $class = 'MarkdownConverter\Replacers\\' . $replacer . 'Replacer';
        return new $class();
    }
}