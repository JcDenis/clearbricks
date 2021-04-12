<?php
declare(strict_types=1);
/**
 * @class tplNodeValueParent
 * @brief Value node, for all {{tpl:Tag}}
 *
 * @package Clearbricks
 * @subpackage Template
 *
 * @copyright Olivier Meunier & Association Dotclear
 * @copyright GPL-2.0-only
 */
class tplNodeValueParent extends tplNodeValue
{
    public function compile(template $tpl): string
    {
        // simply ask currently being displayed to display itself!
        return tplNodeBlockDefinition::renderParent($tpl);
    }
}
