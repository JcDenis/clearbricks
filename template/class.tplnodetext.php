<?php
/**
 * @class tplNodeText
 * @brief Text node, for any non-tpl content
 *
 * @package Clearbricks
 * @subpackage Template
 *
 * @copyright Olivier Meunier & Association Dotclear
 * @copyright GPL-2.0-only
 */
class tplNodeText extends tplNode
{
    // Simple text node, only holds its content
    protected $content;

    public function __construct(string $text)
    {
        parent::__construct();
        $this->content = $text;
    }

    public function compile($tpl): string
    {
        return $this->content;
    }

    public function getTag(): string
    {
        return 'TEXT';
    }
}
